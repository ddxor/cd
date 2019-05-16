<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreUpdateCompany;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        return view('companies.index')->with('companies', Company::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() : View
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUpdateCompany $request) : RedirectResponse
    {
        $company = new Company();

        $company->name = $request->name;
        $company->email = $request->email;

        if ($request->logo) {
            $company->logo_path = $request->logo->store('companies', 'public');
        }

        $company->website_url = $request->website_url;
        $company->save();

        return redirect()->route('companies.index')->with('message', 'Successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return void
     * @todo Consider implementing this? - We have so little info the index page is sufficient at present.
     */
    public function show(Company $company) : void
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\View
     */
    public function edit(Company $company) : View
    {
        return view('companies.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreUpdateCompany $request, Company $company) : RedirectResponse
    {
        $company->name = $request->name;
        $company->email = $request->email;

        if ($request->logo) {
            $company->logo_path = $request->logo->store('companies', 'public');
        }

        $company->website_url = $request->website_url;
        $company->save();

        return redirect()->route('companies.index')->with('message', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company) : RedirectResponse
    {
        $company->delete();

        return redirect()->route('companies.index')->with('message', 'Successfully deleted');
    }
}
