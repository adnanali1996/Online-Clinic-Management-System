@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">Assets</h4>
                    </div>
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="{{ route('asset.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Asset</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
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
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Asset User</th>
                                        <th>Asset Name</th>
                                        <th>Asset Id</th>
                                        <th>Purchase Date</th>
                                        <th>Warrenty</th>
                                        <th>Warrenty End</th>
                                        <th>Amount</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>
                                            <strong>Anaesthetic machine</strong>
                                        </td>
                                        <td>#AST-0001</td>
                                        <td>22 Jun 2018</td>
                                        <td>4 Years</td>
                                        <td>22 Jun 2022</td>
                                        <td>$62480</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Pending
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Returned</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('asset.edit', ['id'=>3])}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('asset.delete', ['id'=>3])}}" data-toggle="modal" data-target="#delete_asset"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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