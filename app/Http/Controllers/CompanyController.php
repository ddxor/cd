<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreUpdateCompany;

class CompanyController extends Controller
{
    /**
     * Display a list of companies.
     *
     * @return View
     */
    public function index() : View
    {
        $companies = Company::simplePaginate(env('DEFAULT_PAGINATE_COUNT'));

        return view('companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a company.
     *
     * @return View
     */
    public function create() : View
    {
        return view('companies.create');
    }

    /**
     * Store a newly created company in storage.
     *
     * @param StoreUpdateCompany $request
     * @return RedirectResponse
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
     * Display the specified company.
     *
     * @param Company $company
     * @return void
     * @todo Consider implementing this? - We have so little info the index page is sufficient at present.
     */
    public function show(Company $company) : void
    {
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param Company $company
     * @return View
     */
    public function edit(Company $company) : View
    {
        return view('companies.edit')->with('company', $company);
    }

    /**
     * Update the specified company in storage.
     *
     * @param StoreUpdateCompany $request
     * @param Company $company
     * @return RedirectResponse
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
     * Remove the specified company from storage.
     *
     * @param Company $company
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Company $company) : RedirectResponse
    {
        $company->delete();

        return redirect()->route('companies.index')->with('message', 'Successfully deleted');
    }
}
