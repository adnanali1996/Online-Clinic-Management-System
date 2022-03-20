<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.settings.setting');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function localization()
    {
        return view("backend.settings.localization");
    }

    public function theme_setting()
    {
        return view("backend.settings.theme_setting");

    }

    public function roles_permissions()
    {
        return view("backend.settings.role_permission");

    }
    public function invoice_settings()
    {
        return view("backend.settings.invoice_setting");

    }

    public function notifications_settings()
    {
        return view("backend.settings.notifications_setting");

    }

    public function change_password()
    {
        return view("backend.settings.change_password");

    }

    public function leave_type()
    {
        return view("backend.settings.leave_type_setting");

    }

    public function leave_type_edit($id)
    {
        return view("backend.settings.edit_leave_type");

    }

    public function leave_type_destroy($id)
    {

    }

    public function leave_type_create()
    {
        return view("backend.settings.create_leave_type");

    }
    
}
