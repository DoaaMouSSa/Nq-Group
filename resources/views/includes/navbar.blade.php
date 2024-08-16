<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets/images/logo.jpeg')}}" width="60" height="40"> &nbsp; <span class="logo">NQ Group</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 uli" >
            <li class="nav-item">
              <a class="nav-link  p-lg-3" aria-current="page" href="{{route('home')}}" >Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle p-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" style="background-color: #f5f5f5;">
                <li><a class="dropdown-item " href="#">Consultation</a></li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Training Programs
                  </a>
                  <ul class="dropdown-menu" style="background-color: #f5f5f5;">
                    <li><a class="dropdown-item " href="#">Program 1</a></li>
                    <li><a class="dropdown-item " href="#">Program 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="{{route('contact')}}">Contact US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="{{route('about')}}">About US</a>
            </li>
          </ul>
          <div class="search ps-3 pe-3">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </div>
      </div>
    </nav>
     <!-- end navbar -->