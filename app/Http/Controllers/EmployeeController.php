<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\View\View;
use App\Company;
use App\Http\Requests\StoreUpdateEmployee;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    /**
     * Display a list of employees, optionally refining by the $company provided.
     *
     * @param $company Company
     * @return View
     */
    public function index(Company $company) : View
    {
        if (null !== $company->id) {
            $employees = Employee::where('company_id', $company->id)->simplePaginate(env('DEFAULT_PAGINATE_COUNT'));
        } else {
            $employees = Employee::simplePaginate(env('DEFAULT_PAGINATE_COUNT'));
        }

        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating an employee.
     *
     * @return View
     */
    public function create() : View
    {
        $companies = Company::all()->sortBy('name');

        return view('employees.create')->with('companies', $companies);
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param StoreUpdateEmployee $request
     * @return RedirectResponse
     */
    public function store(StoreUpdateEmployee $request) : RedirectResponse
    {
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->company_id = $request->company_id;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return redirect()->route('employees.index')->with('message', 'Successfully created');
    }

    /**
     * Display the specified employee.
     *
     * @param Employee $employee
     * @return void
     * @todo Consider implementing this? - We have so little info the index page is sufficient at present.
     */
    public function show(Employee $employee) : void
    {
    }

    /**
     * Show the form for editing the specified employee.
     *
     * @param Employee $employee
     * @return View
     */
    public function edit(Employee $employee) : View
    {
        $companies = Company::all()->sortBy('name');

        return view('employees.edit')
            ->with('companies', $companies)
            ->with('employee', $employee);
    }

    /**
     * Update the specified employee in storage.
     *
     * @param StoreUpdateEmployee $request
     * @param Employee $request
     * @return RedirectResponse
     */
    public function update(StoreUpdateEmployee $request, Employee $employee) : RedirectResponse
    {
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->company_id = $request->company_id;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->save();

        return redirect()->route('employees.index')->with('message', 'Successfully updated');
    }

    /**
     * Remove the specified employee from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Employee $employee) : RedirectResponse
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('message', 'Successfully deleted');
    }
}
