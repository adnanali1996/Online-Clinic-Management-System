  <!--header-->
  <header id="site-header" class="header-w3l fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <a class="navbar-brand" href="index.html">
         Med<span class="sub-logo">i</span>ck</span>
        </a>
        <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item {{ Route::currentRouteNamed('home') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ Route::currentRouteNamed('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about')}} ">About</a>
            </li>
            <li class="nav-item {{ Route::currentRouteNamed('departments') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('departments') }}">Departments</a>
            </li>

            <li class="nav-item {{ Route::currentRouteNamed('doctors') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('doctors.all') }}">Doctors</a>
            </li>
                        
            <li class="nav-item {{ Route::currentRouteNamed('contactus') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
            </li>
            @if (Route::has('login'))
              @auth
                <li class="nav-item {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            @else
            <li class="nav-item {{ Route::currentRouteNamed('login') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
                @if (Route::has('register'))
                <li class="nav-item {{ Route::currentRouteNamed('register') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
                @endif
                @endauth
              @endif

            <li class="search-bar ml-lg-3 mr-lg-5 mt-lg-0 mt-4">
              <!--/search-right-->
              <form class="search position-relative">
                <input type="search" class="search__input" name="search" placeholder="Search here.."
                  onload="equalWidth()" required="">
                <span class="fa fa-search search__icon"></span>
              </form>

              <!--//search-right-->
            </li>

          </ul>

        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
</div>
  <!-- //header -->