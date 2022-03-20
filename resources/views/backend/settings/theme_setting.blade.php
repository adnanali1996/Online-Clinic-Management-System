@extends('backend.layouts.settings_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <h4 class="page-title">Theme Settings</h4>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Website Name</label>
                                <div class="col-lg-9">
                                    <input name="website_name" class="form-control" value="PreClinic" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Light Logo</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="file">
                                    <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                                </div>
                                <div class="col-lg-2">
                                    <div class="img-thumbnail float-right"><img src="{{ asset('assets/backend/img/logo-dark.png') }}" alt="" width="40" height="40"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Favicon</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="file">
                                    <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                                </div>
                                <div class="col-lg-2">
                                    <div class="settings-image img-thumbnail float-right"><img src="{{ asset('assets/backend/img/favicon.ico') }}" class="img-fluid" width="16" height="16" alt=""></div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection