@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Invoice</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row custom-invoice">
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <img src="{{ asset('assets/backend/img/logo-dark.png') }}" class="inv-logo" alt="">
                                        <ul class="list-unstyled">
                                            <li>PreClinic</li>
                                            <li>3864 Quiet Valley Lane,</li>
                                            <li>Sherman Oaks, CA, 91403</li>
                                            <li>GST No:</li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Invoice #INV-0001</h3>
                                            <ul class="list-unstyled">
                                                <li>Date: <span>October 12, 2017</span></li>
                                                <li>Due date: <span>November 25, 2017</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 m-b-20">
										
											<h5>Invoice to:</h5>
											<ul class="list-unstyled">
												<li>
													<h5><strong>Barry Cuda</strong></h5>
												</li>
												<li><span>Global Technologies</span></li>
												<li>5754 Airport Rd</li>
												<li>Coosada, AL, 36020</li>
												<li>United States</li>
												<li>888-777-6655</li>
												<li><a href="#">barrycuda@example.com</a></li>
											</ul>
										
                                    </div>
                                    <div class="col-sm-6 col-lg-6 m-b-20">
										<div class="invoices-view">
											<span class="text-muted">Payment Details:</span>
											<ul class="list-unstyled invoice-payment-details">
												<li>
													<h5>Total Due: <span class="text-right">$288.2</span></h5>
												</li>
												<li>Bank name: <span>Profit Bank Europe</span></li>
												<li>Country: <span>United Kingdom</span></li>
												<li>City: <span>London E1 8BF</span></li>
												<li>Address: <span>3 Goodman Street</span></li>
												<li>IBAN: <span>KFH37784028476740</span></li>
												<li>SWIFT code: <span>BPT4E</span></li>
											</ul>
										</div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ITEM</th>
                                                <th>DESCRIPTION</th>
                                                <th>UNIT COST</th>
                                                <th>QUANTITY</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Full body checkup</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$150</td>
                                                <td>1</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Blood Test</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$12</td>
                                                <td>1</td>
                                                <td>$12</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>General checkup</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$100</td>
                                                <td>1</td>
                                                <td>$100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="row invoice-payment">
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="m-b-20">
                                                <h6>Total due</h6>
                                                <div class="table-responsive no-border">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td class="text-right">$262</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax: <span class="text-regular">(10%)</span></th>
                                                                <td class="text-right">$26.2</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td class="text-right text-primary">
                                                                    <h5>$288.2</h5>
																</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-info">
                                        <h5>Other information</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection