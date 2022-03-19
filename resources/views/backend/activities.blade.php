@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Activities</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="activity">
                            <div class="activity-box">
                                <ul class="activity-list">
                                    @for($i=1; $i<=10; $i++)
                                    <li>
                                        <div class="activity-user">
                                            <a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                                <img alt="Lesley Grauer" src="{{ asset('assets/backend/img/user.jpg') }}" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="profile.html" class="name">Lesley Grauer</a> added new task <a href="#">Hospital Administration</a>
                                                <span class="time">4 mins ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="{{ route('activity.delete', ['id'=>3]) }}" title="Delete">&times;</a>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection