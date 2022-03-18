    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">
          @if(Route::currentRouteNamed('about')) About
          @elseif(Route::currentRouteNamed('departments')) Departments
          @elseif(Route::currentRouteNamed('doctors')) Doctors
          @elseif(Route::currentRouteNamed('contactus')) Contact Us
          @endif
        </h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>
          @if(Route::currentRouteNamed('about')) About
          @elseif(Route::currentRouteNamed('departments')) Departments
          @elseif(Route::currentRouteNamed('doctors')) Doctors
          @elseif(Route::currentRouteNamed('contactus')) Contact Us
          @endif
        </li>
        </ul>
      </div>
    </div>
  <!--//breadcrumb-bg-->
  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->