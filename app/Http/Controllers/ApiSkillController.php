<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class ApiSkillController extends Controller
{
    public function search(Request $request) {
        $skills = Skill::where("name", "LIKE", "%".$request->search."%")->take(5)->get();
        return response()->json($skills);
    }
}
