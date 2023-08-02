<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageCompanyController extends Controller
{
    public function index($id) {
        $company = Company::where([
            'id' => $id,
            'user_id' => Auth::id(),
        ])->first();

        if (!$company) {
            return to_route('companies.index');
        }

        return view('companies.admin.index', [
            'company' => $company,
        ]);
    }
}
