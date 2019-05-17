<?php

Route::get('/', function () {
    return redirect('home');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

/** Resource controllers */
Route::resource('companies', CompanyController::class)->middleware('auth');
Route::resource('employees', EmployeeController::class)->middleware('auth');
Route::resource('companies.employees', EmployeeController::class)->middleware('auth');