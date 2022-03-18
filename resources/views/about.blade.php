@extends('layouts')
@section('content')
@include('breadcrumb')
  <!-- //w3l-inner-page-breadcrumb-->
  <section class="w3l-about-ab" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="imgw3l-ab mb-md-5 mb-3">
          <img src="{{asset('assets/frontend/images/banner2.jpg')}}" alt="" class="radius-image img-fluid">
        </div>
        <div class="row">
          <div class="col-lg-5 left-wthree-img">
            <h6 class="title-subhny">About Us</h6>
            <h3 class="title-w3l mb-4">The Best Medics, Doctors & Physicians</h3>

          </div>
          <div class="col-lg-7 pl-lg-5 align-self">
            <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
              ultrices in ligula. Semper at tempufddfel. Learn more about our work!
              Lorem ipsum viverra feugiat.consectetur adipisicing dolor et amet.
            </p>
            <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
              tempufddfel. Learn more about our work! Lorem ipsum viverra feugiat.consectetur adipisicing dolor et amet.
            </p>
            <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More</a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /w3l-content-2-->
  <!-- /bottom-grids-->
  <section class="w3l-bottom-grids-6 py-5" id="services1">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Motivation is easy</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Our Core Values</h3>
      </div>
      <div class="grids-area-hny text-center row mt-lg-4">
        <div class="col-lg-4 col-md-6 grids-feature">
          <div class="area-box icon-blue">
            <span class="fa fa-lightbulb-o"></span>
            <h4><a href="#feature" class="title-head">Innavation</a></h4>
            <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed et dolor
              amet.</p>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
          <div class="area-box icon-pink">
            <span class="fa fa-handshake-o"></span>
            <h4><a href="#feature" class="title-head">Compassion</a></h4>
            <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor et
              amet.</p>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
          <div class="area-box icon-yellow">
            <span class="fa fa-podcast"></span>
            <h4><a href="#feature" class="title-head">Integrity</a></h4>
            <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor et
              amet.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //bottom-grids-->
  <!-- home page block grids -->
  <section class="w3l-two-servicses py-5" id="services2">
    <div class="container py-lg-5 py-md-4 py-2">
     
      <div class="row bottom-ab-grids">
        <div class="col-lg-6 bottom-ab-left align-self">
          <h6 class="title-subhny">What We Offer</h6>
          <h3 class="title-w3l mb-4">Our Advantages</h3>
          <p class="">Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia acere aperiam sequi optio consectetur adipisicing
            dolor et amet. </p>
          <ul class="w3l-right-book mt-4">
            <li><span class="fa fa-check"></span> Specialists and Dentists as One Team</li>
            <li><span class="fa fa-check"></span> Complimentary Consultations</li>
            <li><span class="fa fa-check"></span> All Types of Dental Services</li>
            <li><span class="fa fa-check"></span> On-site Laboratory</li>
          </ul>
        </div>
        <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5">
          <img src="{{ asset('assets/frontend/images/g4.jpg') }}" alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block grids -->
  <!-- /w3l-content-5-->
  <section class="w3l-content-5 py-5">
    <div class="content-4-main py-lg-5 py-md-4">
      <div class="container pb-5">
        <div class="title-content text-left">
          <h6 class="title-subhny">Here & Now, Every Day</h6>
          <h3 class="title-w3l two mb-sm-5 mb-4">Healing Experiences- For Everyone <br> All The Time</h3>
        </div>
        <div class="content-info-in row">
          <div class="content-left col-lg-6">
            <p class=""> We focus on the needs of every small to middle market businesses to improve and grow
              their return. lacinia id erat eu
              ullam corper. Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis doler et in.lacinia id, sunt in culpa quis. </p>
            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-md-5 mt-4">Get in touch</a>
          </div>
          <div class="content-right col-lg-6 mt-lg-0 mt-5">
            <p> We focus on the needs of every small to middle market businesses to improve and grow
              their return. lacinia id erat eu
              ullam corper. Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis. gravida felis vitae. lacinia id, sunt in
              culpa quis. Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /w3l-content-5-->
  <!--/team-sec-->
  <section class="w3l-team">
    <div class="team py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="title-content text-center">
          <h6 class="title-subhny text-center">Leading Team</h6>
          <h3 class="title-w3l mb-sm-3 text-center">Meet Our Team</h3>
        </div>
        <div class="row team-row">
          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{ asset('assets/frontend/images/team1.jpg') }}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Jennifer Foster
                </a></h3>
                <p>Associate Dentist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end team member -->


          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{ asset('assets/frontend/images/team2.jpg') }}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Dhony Abraham</a></h3>
                <p>Orthodontist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>

          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">

            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{ asset('assets/frontend/images/team3.jpg') }}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Marko Dugonji</a></h3>
                <p>Health Therapist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{ asset('assets/frontend/images/team4.jpg') }}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Rhoda Byrd</a></h3>
                <p>Implantologist</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end team member -->
        </div>
      </div>
    </div>
  </section>
  <!--//team-sec-->
@endsection