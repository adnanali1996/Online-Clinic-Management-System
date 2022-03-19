@extends('backend.layouts.master_layouts')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">Leave Request</h4>
                    </div>
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="{{ route('leave.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Leave</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Leave Type</label>
                            <select class="select floating">
                                <option> -- Select -- </option>
                                <option>Casual Leave</option>
                                <option>Medical Leave</option>
                                <option>Loss of Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Leave Status</label>
                            <select class="select floating">
                                <option> -- Select -- </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Rejected </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Leave Type</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>No of Days</th>
                                        <th>Reason</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i=1; $i<=12; $i++)
                                    <tr>
                                        <td>
                                            <a href="profile.html" class="avatar">R</a>
                                            <h2><a href="#">Albina Simonis <span>Nurse</span></a></h2>
                                        </td>
                                        <td>Casual Leave</td>
                                        <td>8 Aug 2018</td>
                                        <td>8 Aug 2018</td>
                                        <td>2 days</td>
                                        <td>Family Function</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    New
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">New</a>
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('leave.edit', ['id'=> 44]) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('leave.delete', ['id'=> 44]) }}" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection