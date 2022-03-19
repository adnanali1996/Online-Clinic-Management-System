<?php

namespace App\Http\Controllers;

use App\Models\StaffAttendence;
use Illuminate\Http\Request;

class StaffAttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.attendence');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\StaffAttendence  $staffAttendence
     * @return \Illuminate\Http\Response
     */
    public function show(StaffAttendence $staffAttendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffAttendence  $staffAttendence
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffAttendence $staffAttendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffAttendence  $staffAttendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffAttendence $staffAttendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffAttendence  $staffAttendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffAttendence $staffAttendence)
    {
        //
    }
}
