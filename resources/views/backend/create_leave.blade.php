@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Leave</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="form-group">
                                <label>Leave Type <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select Leave Type</option>
                                    <option>Casual Leave 12 Days</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
                                </select>
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" value="12" type="text">
									</div>
								</div>
							</div>
                            <div class="form-group">
                                <label>Leave Reason <span class="text-danger">*</span></label>
                                <textarea rows="4" cols="5" class="form-control"></textarea>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Send Leave Request</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
@endsection