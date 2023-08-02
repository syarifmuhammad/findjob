<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index() {
        return view('recruitments/index');
    }

    public function detail() {
        return view('recruitments/detail');
    }

    public function create() {
        return view('recruitments/create');
    }
}
