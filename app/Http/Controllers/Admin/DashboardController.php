<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view("admin.index");
    }

    public function course() {
        return view("admin.course");
    }

    public function vacancy() {
        return view("admin.vacancy");
    }

    public function detail() {
        return view("admin.detail_course");
    }
}
