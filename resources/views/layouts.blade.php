<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>Medick Medical Category Bootstrap Responsive Web Template | Home :: W3Layouts </title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/frontend/css/style-starter.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
  <div class="header-w3l">
  <!--header-->
  @include('header')
</div>
  <!-- //header -->
@yield('content')

  <!-- footer -->
    @include('footer')
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/theme-change.js')}}"></script>
  <!-- owl carousel -->
  <script src="{{asset('assets/frontend/js/owl.carousel.js')}}"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo2").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          991: {
            items: 2,
            margin: 30,
            nav: false
          },
          1080: {
            items: 3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery.countup.js')}}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    @if(Session::has('message'))
    swal("Your Message Sent Successfully!", "{{ Session::get('message') }}", "success");
    @endif

  </script>
</body>

</html>