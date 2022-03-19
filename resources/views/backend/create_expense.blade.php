@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">New Expense</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Purchase From</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Purchase Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Purchased By </label>
                                        <select class="select">
                                            <option>Daniel Porter</option>
                                            <option>Roger Dixon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input placeholder="$50" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Paid By</label>
                                        <select class="select">
                                            <option>Cash</option>
                                            <option>Cheque</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="select">
                                            <option>Pending</option>
                                            <option>Approved</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Attachments</label>
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="attach-files">
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/backend/img/user.jpg') }}" alt="">
                                        <a href="#" class="fa fa-close file-remove"></a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/backend/img/user.jpg') }}" alt="">
                                        <a href="#" class="fa fa-close file-remove"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Expense</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		
@endsection