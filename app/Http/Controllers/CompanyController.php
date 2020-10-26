<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate();

        return Inertia::render('Companies/Index', [
            'companies' => $companies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Company::validate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $jobs = $company->jobs()->get();

        return Inertia::render('Companies/Show', [
            'company' => $company,
            'jobs' => $jobs
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        // Validate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->users()->detach();
        $company->delete();

        return Redirect::route('dashboard')->with('success', 'Company successfully deleted.');
    }
}
