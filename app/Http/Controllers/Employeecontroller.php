<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
       return view('employee.list')->with('employees',$employees);
       // return view('employee.list')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $employee=new Employee();
       $employee->name= $request->name;
       $employee->age= $request->age;
       $employee->salary= $request->salary;
       $employee->hobbies= $request->hobbies;
     $employee->save();
return redirect('/employee');
          
          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
//return view('employee.edit')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
    //   $employee=new Employee();
      // $employee->new= $request->name;
       //$employee->age= $request->age;
      // $employee->salary= $request->salary;
       //$employee->hobbies= $request->hobbies;
    // $employee->save();
    // return redirect('/employee');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       $employee->delete();
        return redirect('/employee');
  }
  }
