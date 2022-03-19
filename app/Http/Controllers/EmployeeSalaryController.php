<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.employee_salary');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.create_salary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeSalary $employeeSalary)
    {
        //
        return view('backend.view_salary');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeSalary $employeeSalary)
    {
        //
        return view('backend.edit_salary');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeSalary $employeeSalary)
    {
        //
    }
}
