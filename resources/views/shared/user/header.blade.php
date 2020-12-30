<header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">Wordify</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{URL::to('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="category.html">Asia</a>
                    <a class="dropdown-item" href="category.html">Europe</a>
                    <a class="dropdown-item" href="category.html">Dubai</a>
                    <a class="dropdown-item" href="category.html">Africa</a>
                    <a class="dropdown-item" href="category.html">South America</a>
                  </div>

                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    @foreach($cat as $row)
                    <a class="dropdown-item" href="category.html">{{$row->name}}</a>
                    @endforeach
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                @if (isset(Auth::user()->email))
                <li class="nav-item">
                <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
                    @else
                    <li class="nav-item">
                  <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>
                @endif
              </ul>
              
            </div>
          </div>
        </nav>
      </header>