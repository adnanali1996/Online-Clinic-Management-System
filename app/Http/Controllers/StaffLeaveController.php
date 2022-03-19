<?php

namespace App\Http\Controllers;

use App\Models\StaffLeave;
use Illuminate\Http\Request;

class StaffLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.staff_leaves');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("backend.create_leave");
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
     * @param  \App\Models\StaffLeave  $staffLeave
     * @return \Illuminate\Http\Response
     */
    public function show(StaffLeave $staffLeave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffLeave  $staffLeave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('backend.edit_leave');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffLeave  $staffLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffLeave $staffLeave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffLeave  $staffLeave
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffLeave $staffLeave)
    {
        //
    }
}
