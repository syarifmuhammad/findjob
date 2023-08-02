<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $my_companies = Company::where('user_id', Auth::id())->get();
        }
        $recommended_vacancies = Vacancy::with('company')->take(3)->get();
        $follow = User::where("id", "!=", Auth::id())->take(5)->get();
        return view('dashboard', [
            'my_companies' => $my_companies ?? [],
            'recommended_vacancies' => $recommended_vacancies,
            'follow' => $follow,
        ]);
    }
}
