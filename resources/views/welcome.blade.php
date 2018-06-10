<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont.woff2') }}" type="text/css">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/chart.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">
          .star-rating__checkbox {
  position: absolute;
  overflow: hidden;
  clip: rect(0 0 0 0);
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
}

.star-rating__star {
  display: inline-block;
  padding: 3px;
  vertical-align: middle;
  line-height: 1;
  font-size: 1.5em;
  color: #ABABAB;
  transition: color .2s ease-out;
}

.star-rating__star:hover {
  cursor: pointer;
}

.star-rating__star.is-selected {
  color: #FFD700;
}

.star-rating__star.is-disabled:hover {
  cursor: default;
}

        </style>
    </head>
    <body>
          <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b> DDU Student Union Voting System</b>
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
            <a class="nav-link" href="/news">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Notification</a>
          </li>
        </ul>
        @guest
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ route('login') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
        @else
          <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{route('home')}}">
          <i class="fa d-inline fa-lg fa-home-circle-o"></i> Home</a>
            <a class="btn navbar-btn ml-2 text-white btn-secondary" role="button" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out"></i>{{ __('Logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          @endguest
      </div>
    </div>
  </nav>
  @guest
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <!-- <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Bootstrap 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">HTML/SASS</a>
          </li>
        </ul> -->
        <a class="ml-3 btn navbar-btn btn-primary" href="{{ route('register') }}">Register now</a>
      </div>
    </div>
  </nav>
  @else
  @endguest
  @if(session()->has('message'))
                      <div class="alert alert-primary ">
                          <center><strong>{{session()->get('message')}}</strong></center>
                      </div>
                                        @else
   @if($latest->status=='Active')
            @include('inc.votestatus')
          @endif
          @endif
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3 text-primary">Welcome To DDU Student Union Official Page</h1>
          <p class="">
          <p class="lead">This page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transfer</p></p><div class="clear-fix"></div>
        </div>
         @if(Request:: is ('home'))
               @include('inc.showcase')
               @endif
             @if(Request:: is ('home'))
                @include('inc.slideshow')
             @endif



         <h3><b>Vote News</b></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          <a class="btn btn-primary btn-sm" href="/news" role="button">View Details >></a>
       </p>
      <br><br>


       <h3><b>Vote Details</b></h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             <a class="btn btn-primary btn-sm" href="/news" role="button">View Details >></a>
           </p>
    </div>

@include('layouts.chart')
      </div>
    </div>
  </div>
  <div class="pt-5 text-white bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center my-5">
          <h1 class="display-1">Web intro</h1>
          <p class="lead">This page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transfer</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="{{ asset('uploads/images/iphone_cover.png') }}"> </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <!-- <div class="container">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 border border-secondary"></div>
      </div>
    </div> -->
  </div>
  
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

  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"  crossorigin="anonymous"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
  <script src="{{ asset('vue.min.js') }}" type="text/javascript"></script>

    </body>
</html>
