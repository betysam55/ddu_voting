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
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont.woff2') }}" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
            <a class="nav-link" href="#">
              <i class="fa d-inline fa-lg fa-bookmark-o"></i> Bookmarks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Contacts</a>
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
        @guest
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ route('login') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
          <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ route('register') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Register</a>
        @else
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{route('home')}}">
          <i class="fa d-inline fa-lg fa-home-circle-o"></i> Home</a>

 <div class="btn-group">
            <button class="btn navbar-btn ml-2 text-white btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fa d-inline fa-lg fa-user-circle-o"></i> {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span> </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item"  href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('Profile') }}</a>
             <form id="profile-form" action="home/profile/{{Auth::user()->id }}" method="POST" style="display: none;">
                        @csrf
            </form>
          
            </div>
          </div>               
          <a class="btn navbar-btn ml-2 text-white btn-secondary" role="button" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out"></i>Logout
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          @endguest
      </div>
    </div>
  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"  crossorigin="anonymous"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
</html>
