@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Holiday</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="form-group">
                                <label>Holiday Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Holiday Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Holiday</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection