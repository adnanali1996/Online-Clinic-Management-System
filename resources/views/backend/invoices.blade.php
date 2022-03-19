@extends('backend.layouts.master_layouts')

@section('content')

<div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Invoices</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <a href="{{ route('invoice.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Create New Invoice</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Status</label>
                            <select class="select floating">
                                <option>Select Status</option>
                                <option>Pending</option>
                                <option>Paid</option>
                                <option>Partially Paid</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Invoice Number</th>
                                        <th>Patient</th>
                                        <th>Created Date</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="invoice-view.html">#INV-0001</a></td>
                                        <td>Charles Ortega</td>
                                        <td>1 Aug 2018</td>
                                        <td>7 Aug 2018</td>
                                        <td>$20</td>
                                        <td><span class="custom-badge status-green">Paid</span></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('invoice.edit', ['id'=>3])}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('invoice.view', ['id'=>5]) }}"><i class="fa fa-eye m-r-5"></i> View</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
													<a class="dropdown-item" href="{{ route('invoice.delete', ['id'=>3])}}" data-toggle="modal" data-target="#delete_invoice"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
									<tr>
                                        <td>2</td>
                                        <td><a href="invoice-view.html">#INV-0002</a></td>
                                        <td>Denise Stevens</td>
                                        <td>24 Aug 2018</td>
                                        <td>24 Aug 2018</td>
                                        <td>$6</td>
                                        <td><span class="custom-badge status-blue">Sent</span></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_invoice"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
									<tr>
                                        <td>3</td>
                                        <td><a href="invoice-view.html">#INV-0003</a></td>
                                        <td>Dennis Salazar</td>
                                        <td>1 Sep 2018</td>
                                        <td>7 Sep 2018</td>
                                        <td>$20</td>
                                        <td><span class="custom-badge status-orange">Partially Paid</span></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_invoice"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection