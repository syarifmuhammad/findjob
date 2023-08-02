<?php

namespace App\Http\Controllers;

use App\Models\Appliable;
use App\Models\User;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    public function index()
    {
        $recommended = Vacancy::with('company')->take(3)->get();
        $more = Vacancy::with('company')->whereNotIn('id', collect($recommended)->pluck('id'))->take(20)->get();
        return view('vacancies/index', [
            'recommended' => $recommended,
            'more' => $more,
        ]);
    }

    public function my_vacancies()
    {
        $my_vacancies = Vacancy::whereHas('appliables', function ($query) {
            $query->where('appliable_type', Vacancy::class);
                  $query->where('user_id', Auth::id());
        })->get();
        // $more = Vacancy::with('company')->whereNotIn('id', collect($recommended)->pluck('id'))->take(20)->get();
        return view('vacancies/my_vacancies', [
            'my_vacancies' => $my_vacancies,
        ]);
    }

    public function collection(Request $request)
    {
        $vacancies = Vacancy::with('company')->paginate();
        $selected_vacancy = Vacancy::find($request->vacancy_id);
        if (!$selected_vacancy) {
            if (count($vacancies->items()) > 0) {
                $selected_vacancy = Vacancy::find($vacancies->items()[0]->id);
            } else {
                $selected_vacancy = null;
            }
        }
        $phone_code = Http::get('https://gist.githubusercontent.com/anubhavshrimal/75f6183458db8c453306f93521e93d37/raw/f77e7598a8503f1f70528ae1cbf9f66755698a16/CountryCodes.json');
        return view('vacancies/collection', [
            'vacancies' => $vacancies,
            'selected_vacancy' => $selected_vacancy,
            'phone_code' => $phone_code->object(),
        ]);
    }

    public function apply(Request $request, $id)
    {
        $vacancy = Vacancy::find($id);
        if (!$vacancy) {
            abort(404);
        }

        try {
            DB::beginTransaction();
            $resume_file = $request->file('resume')->store('resume', 'public');
            $appliable = new Appliable([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'phone_code' => $request->phone_code,
                'phone' => $request->phone,
                'email' => $request->email,
                'resume' => $resume_file,
            ]);

            $vacancy->appliables()->save($appliable);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            if (Storage::disk('public')->exists($resume_file)) {
                Storage::disk('public')->delete($resume_file);
            }
            abort(500);
        }
    }
}
