<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap-glyphicons.css') }}" type="text/css"> -->
    
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="{{ asset('css/bootstrap-iso.css') }}" rel="stylesheet">
    <link href="{{ asset('css/star-rating.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/star-rating.js') }}" type="text/javascript"></script>
</head>
<body>
    <div id="app">
        


        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>{{ config('app.name', 'Laravel') }} </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/news">
              <i class="fa d-inline fa-lg fa-bookmark-o"></i> News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Notification</a>
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
        @guest
        @if(!route('login'))
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ route('login') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
          @endif
          @if(!route('register'))
          <a class="btn navbar-btn ml- text-white btn-secondary" href="{{ route('register') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Register</a>
          @endif
        @else
        

 <div class="btn-group">
            <button class="btn navbar-btn ml-2 text-white btn-secondary dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span> </button>
            <div class="dropdown-menu">
              <a v-pre class="dropdown-item" role="button" aria-haspopup="true" aria-expanded="false" href="#" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('repvote-form').submit();">
                                        <i class="fa fa-btn fa-thumbs-up"></i>{{ __(' Representative Vote') }}
                                    </a>
                                     <form id="repvote-form" action="{{ route('posts') }}" method="Get" style="display: none;">
                                        @csrf
                                    </form>
              <a v-pre class="dropdown-item" role="button" aria-haspopup="true" aria-expanded="false" href="#" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('prevote-form').submit();">
                                        <i class="fa fa-btn fa-thumbs-up"></i>{{ __(' President Vote') }}
                                    </a>
                                     <form id="prevote-form" action="{{ route('pposts') }}" method="Get" style="display: none;">
                                        @csrf
                                    </form>
              <div class="dropdown-divider"></div>
              <a v-pre class="dropdown-item"  href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        <i class="fa d-inline fa-lg fa-user-circle-o"></i>{{ __(' Profile') }}</a>
             <form id="profile-form" action="home/profile/{{Auth::user()->id }}" method="POST" style="display: none;">
                        @csrf
            </form>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out"></i>Logout
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          
            </div>
          </div>               
          
          
          @endguest


      </div>
    </div>
  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
      <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Student Union</h2>
          <p class="text-white">A r you may need, from website prototyping to publishing</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">About us</a>
            <br>
            <a href="#" class="text-white">Our services</a>
            <br>
            <a href="#" class="text-white">Stories</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+994" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-phone"></i>+251 - 111 111 111</a>
          </p>
          <p>
            <a href="mailto:info@ddustudentunion.com" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@ddustudentunion.com</a>
          </p>
          <p>
            <a href="#" class="text-white" target="_blank">
              <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>ddu</a>
          </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Subscribe</h2>
          <form>
            <fieldset class="form-group text-white">
              <label for="exampleInputEmail1">Get our newsletter</label>
              <input type="email" class="form-control" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 DDU Student Union - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
    </footer>
</body>
  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"  crossorigin="anonymous"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
  @yield('script')
</html>
