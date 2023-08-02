<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request) {
        return view('courses.index');
    }

    public function detail() {
        return view('courses/detail');
    }
}
