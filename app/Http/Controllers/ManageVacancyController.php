<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Skill;
use App\Models\Skillable;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageVacancyController extends Controller
{
    public $company = null;
    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            $company = Company::where([
                'id' => $request->company_id,
                'user_id' => Auth::id(),
            ])->first();
            if (!$company) {
                abort(404);
            }
            $this->company = $company;
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $vacancies = Vacancy::where('company_id', $request->company_id)->orderBy('created_at')->paginate();
        return view('vacancies.admin.index', [
            'vacancies' => $vacancies,
            'company' => $this->company,
        ]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $skills_id = $request->has('skill_exists') ? $request->skill_exists : [];
            if ($request->has('skill_not_exists')) {
                foreach ($request->skill_not_exists as $skill) {
                    $skill = Skill::create([
                        'name' => $skill
                    ])->where('skill', '!=', $skill);
                    $skills_id[] = $skill->id;
                }
            }
            $skillables = collect($skills_id)->map(function ($s) {
                return new Skillable(['skill_id' => $s]);
            });

            $vacancy = new Vacancy();
            $vacancy->job_title = $request->job_title;
            $vacancy->company_id = $request->company_id;
            $vacancy->workplace_type = $request->workplace_type;
            $vacancy->location = $request->location;
            $vacancy->job_type = $request->job_type;
            $vacancy->description = $request->description;
            $vacancy->save();

            $vacancy->skillables()->saveMany($skillables);
            DB::commit();
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json($e->getMessage(), 500);
            // abort(500);
        }
    }
}
