@extends('backend.layouts.settings_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <h3 class="page-title">Basic Settings</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Default Country</label>
                                        <select class="select">
                                            <option selected="selected">USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date Format</label>
                                        <select class="select">
                                            <option value="d/m/Y">15/05/2016</option>
                                            <option value="d.m.Y">15.05.2016</option>
                                            <option value="d-m-Y">15-05-2016</option>
                                            <option value="m/d/Y">05/15/2016</option>
                                            <option value="Y/m/d">2016/05/15</option>
                                            <option value="Y-m-d">2016-05-15</option>
                                            <option value="M d Y">May 15 2016</option>
                                            <option selected="selected" value="d M Y">15 May 2016</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Timezone</label>
                                        <select class="select">
                                            <option>(UTC +5:30) Antarctica/Palmer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Default Language</label>
                                        <select class="select">
                                            <option>English</option>
                                            <option selected="selected">French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Currency Code</label>
                                        <select class="select">
                                            <option selected="selected">USD</option>
                                            <option>Pound</option>
                                            <option>EURO</option>
                                            <option>Ringgit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Currency Symbol</label>
                                        <input class="form-control" readonly value="$" type="text">
                                    </div>
                                </div>
								<div class="col-sm-12 text-center m-t-20">
									<button type="button" class="btn btn-primary submit-btn">Save</button>
								</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection