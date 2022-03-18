@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{ route('appointment.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Appointment ID</th>
										<th>Patient Name</th>
										<th>Age</th>
										<th>Doctor Name</th>
										<th>Department</th>
										<th>Appointment Date</th>
										<th>Appointment Time</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    @for($i=1; $i<=12; $i++)
									<tr>
										<td>APT0001</td>
										<td><img width="28" height="28" src="{{ asset('assets/backend/img/user.jpg') }}" class="rounded-circle m-r-5" alt=""> Denise Stevens</td>
										<td>35</td>
										<td>Henry Daniels</td>
										<td>Cardiology</td>
										<td>30 Dec 2018</td>
										<td>10:00am - 11:00am</td>
										<td><span class="custom-badge status-red">Inactive</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ route('appointment.edit', ['id' =>43]) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="{{ route('appointment.delete', ['id'=>3]) }}" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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