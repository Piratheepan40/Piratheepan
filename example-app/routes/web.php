<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Designation;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function () {

    $employees=Employee::all();
    return view ('employee.index', compact('employees'));
});


  Route::get('/employee/{id}', function ($id) {
    $employee=Employee::find($id);
    return view('employee.show',['employee'=>$employee]);
  });

  Route::get('/designations', function () {
    $designations = Designation::all();
    return view('designation.index', compact('designations'));
});

Route::get('/designation/{id}', function ($id) {
    $designation=Designation::find($id);
    return view('designation.show',['designation'=>$designation]);
  });


