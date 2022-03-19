@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Blog</h4>
                    </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a class="btn btn-primary btn-rounded float-right" href="{{ route('blog.create') }}"><i class="fa fa-plus"></i> Add Blog</a>
                    </div>
                </div>
                <div class="row">
                    @for($i=1; $i<=12; $i++)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="{{ asset('assets/backend/img/blog/blog-01.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs of Health Care?</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris.</p>
                                <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="{{ route('blog.edit',['id'=>4]) }}"><i class="fa fa-edit"></i></a> <a href="{{ route('blog.delete', ['id'=>4]) }}"><i class="fa fa-trash"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        
@endsection