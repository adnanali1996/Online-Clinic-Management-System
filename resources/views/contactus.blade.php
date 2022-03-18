@extends('layouts')
@section('content')
@include('breadcrumb')
    <!-- banner bottom shape -->
    <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <!--/contact-->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="contact-grids d-grid">
        <div class="contact-left">
          <h6 class="title-subhny mb-1">Get in Touch</h6>
          <h3 class="title-w3l mb-2">Contact Us</h3>
          <p>{{ $contact->description }}</p>
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Our Address</h6>
                <p>{{ $contact->address }}</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+1(21) 234 4567">{{ $contact->contactnumber }}</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">{{ $contact->contactemail }}</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-life-ring"></span>
              </div>
              <div class="cont-right">
                <h6>Customer Support</h6>
                <p><a href="mailto:info@support.com" class="mail">{{ $contact->customersupport }}</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="{{ route('sendmessage') }}" method="post" class="signin-form">
            @csrf
            <div class="input-grids">
              <input type="text" name="name" id="name" placeholder="Your Name*" class="contact-input"
                required="" />
                @error('name')
                <span class="text-danger"> {{ $message }}
                @enderror
              <input type="email" name="email" id="email" placeholder="Your Email*" class="contact-input"
                required="" />
                @error('email')
                <span class="text-danger"> {{ $message }}
                @enderror
                <input type="text" name="contactno" id="contactno" placeholder="Your Contact No*" class="contact-input"
                required="" />
                @error('contactno')
                <span class="text-danger"> {{ $message }}
                @enderror
              <input type="text" name="subject" id="subject" placeholder="Subject*" class="contact-input"
                required="" />
                @error('subject')
                <span class="text-danger"> {{ $message }}
                @enderror            </div>
            <div class="form-input">
              <textarea name="message" id="message" placeholder="Type your message here*" required=""></textarea>
            </div>
                @error('message')
                <span class="text-danger"> {{ $message }}
                @enderror 
            <div class="w3l-submit text-lg-right">
            <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- /map-->
  <div class="map-iframe">
    <iframe
      src="{{ $contact->map }}"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
  <!-- //map-->
  <!-- /contact -->
@endsection