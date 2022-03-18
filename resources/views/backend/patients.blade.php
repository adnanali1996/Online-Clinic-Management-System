@extends('backend.layouts.master_layouts')
@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/dataTables.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{ route('patient.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Age</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    @for($i=1; $i<=12; $i++)
									<tr>
										<td><img width="28" height="28" src="{{ asset('assets/backend/img/user.jpg') }}" class="rounded-circle m-r-5" alt=""> Jennifer Robinson</td>
										<td>35</td>
										<td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
										<td>(207) 808 8863</td>
										<td>jenniferrobinson@example.com</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ route('patient.edit', ['id' => 2]) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="{{ route('patient.delete', ['id' =>3]) }}" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
@push('js')
<script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/dataTables.bootstrap4.min.js') }}"></script>
@endpush