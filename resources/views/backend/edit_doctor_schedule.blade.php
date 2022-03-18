@extends('backend.layouts.master_layouts')
@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap-datetimepicker.min.css') }}">

@endpush

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Schedule</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<label>Doctor Name</label>
										<select class="select">
											<option>Select</option>
											<option>Cristina Groves</option>
											<option>Marie Wells</option>
										</select>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label>Available Days</label>
										<select class="select" multiple>
											<option>Select Days</option>
											<option selected>Sunday</option>
											<option selected>Monday</option>
											<option>Tuesday</option>
											<option>Wednesday</option>
											<option>Thursday</option>
											<option>Friday</option>
											<option>Saturday</option>
										</select>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Schedule Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
									<label class="form-check-label" for="product_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
									<label class="form-check-label" for="product_inactive">
									Inactive
									</label>
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
@push('js')
<script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap-datetimepicker.min.js') }}"></script>

<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
	 <script>
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>
@endpush