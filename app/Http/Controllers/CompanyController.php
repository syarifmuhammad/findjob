<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(Request $request) {
        $companies = Company::paginate();
        return view('companies.index', compact('companies'));
    }

    public function show($id) {
        $company = Company::find($id);
        return view('companies.detail', compact('company'));
    }

    public function create(Request $request) {
        return view('companies.create');
    }

    public function store(Request $request) {
        $company = new Company();
        $company->name = $request->name;
        $company->industry = $request->industry;
        $company->website = $request->website ?? "";
        $company->organization_size = $request->organization_size;
        $company->organization_type = $request->organization_type;
        $company->logo = $request->file('logo')->store('company_logo', 'public');
        $company->tagline = $request->tagline ?? "";
        $company->user_id = Auth::id();
        $company->save();
        session()->flash('companies.store', 'success');
        return to_route('companies.admin.index', $company->id);
    }
}
