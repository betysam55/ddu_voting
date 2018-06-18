<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont.woff2') }}" type="text/css">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/countdown.demo.css') }}" type="text/css">
         <link rel="stylesheet" href="{{ asset('css/chart.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">
        /* code that is here, until the first @media block, will apply to any screen size */
#somethingorother {
  width: 800px ;
}

@media screen and (max-width: 320px) {
  /* comes into effect for screens less than or equal to 320 pixels */
  #somethingorother {
    width: 120px ;
  }
}
@media screen and (min-width: 321px) and (max-width: 480px) {
  /* comes into effect for screens between 321 and 480 pixels (inclusive) */
  #somethingorother {
    width: 320px ;
  }
}
@media screen and (min-width: 481px) {
  /* comes into effect for screens larger than or equal to 481 pixels */
  #somethingorother {
    width: 480px ;
  }
}

/* code that is here will apply to any screen size */
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
        <i class="image"><img src="{{asset('uploads/images/ddu_logo.png')}}"></i>
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
          <li class="nav-item">
            
            <a class="nav-link" href="/campaign/post">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Campaign Post</a>
            
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
            @if($latest->status=='Active')
           <div class="well well-lg">
               <h3> Vote Progress</h3>
                    <table class="table table-bordered"">
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th width="400px">Result</th>
                            <th width="100px">Vote</th>
                        </tr>
                        @foreach($candidate as $value)
                        <tr>
                                <td>{{ $value->fname }}</td>
                                <td>{{ $value->lname }}</td>
                                <td>{{ $value->department }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-sm progress-bar-striped progress-bar-animated" style="width:<?php 
                                   $id=$value->ratingPercent(100);
                                   echo $id;  ?>%">{{$value->ratingPercent(100)}}</div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('pposts.show',$value->id) }}" class="btn btn-primary btn-sm">View</a>
                                </td>
                              </tr>
                        @endforeach

                      </table>
                      </div>
@endif
                      <br></div>
        </div>
         @if(Request:: is ('home'))
               @include('inc.showcase')
               @endif
             @if(Request:: is ('home'))
                @include('inc.slideshow')
             @endif

         <h3><b>የድሬዳዋ ዩኒቨርሲቲ የተማሪዎች ህብረት</b></h3>
      <p>የድሬዳዋ ዩኒቨርሲቲ የተማሪዎች ህብረት በ2001 ዓ.ም ፓርላሚነተሬ  የአመራረጥ ስነ-ሥርአት የተቋቋመ ሲሆን እኛ የድሬዳዋ ዩኒቨርስቲ ተማሪዎች በሀገራችን እየተሰጠ ያለው ትምህርትና ስልጠና የሀገራችንን የተማረ የሰው ሃይል ችግር ያገናዘበና ዘላቂ መፍትሄ የሚያስገኝ እንዲሆን በተናጠል ሳይሆን ተደራጅተን ከምን ጊዜውም በላይ የበኩላችንን አስተዋጽኦ የምናበርክትና የዜግነት ድርሻችንን ምንወጣበት ጊዜ አሁን እንደሆነ ስለተገነዘብን፤ 
          <a class="btn btn-primary btn-sm" href="/news" role="button">View Details >></a>
       </p>
      <br><br>


       <h3><b>የመማር ማስተማር ሂደቱ</b></h3>
           <p>የመማር ማስተማር ሂደቱ ሆነ ሀገራችን በምትከተለው የትምህርት ፖሊሲና የት/ትጥራት ማረጋገጫ ነጥቦች ላይ በተማሪው የተወከለ አካል ቀጥተኛ ተሳታፊ ቢሆን ውጤታማነቱ የላቀ እንዲሆን ስለታመነ፤በኢትዮጵያ የዴሞክራሲ፤ የልማትና የሰላም ስትራተጂዎችና ፕሮግራሞች እንቅስቃሴ በመሳተፍ ለውጥ ለማምጣት፤ የአገር ተቆርቋሪነትና የአንድነት ስሜት ለማዳበር፤ የሀገራችን የረጅም ዘመን አብሮና ተቻችሎ የመኖር ባህል በበለጠ ለማጠናከር፤ለፈጣን ዕድገት አዎንታዊ ሁኔታዎችን በመፍጠር ረገድ እኛ የከፍተኛ ትምህርት ተቋማት ተማሪዎች ከፍተኛ ድርሻና የማይተካ ሚና እንዳለን ስለምናምን፤

             <a class="btn btn-primary btn-sm" href="/news" role="button">View Details >></a>
           </p>
    </div>

@include('layouts.chart')
      </div>
    </div>
  </div>
  <div style=" background: #111;
  font-family: 'Trebuchet MS', 'Lucida Grande', Verdana, Arial, Sans-Serif;
  width: 500px;
    margin: 0 auto 100px auto;">
    <h1 class="alt-1">2d 1h 59m 50s</h1>
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
  <script src="{{ asset('js/jquery.countdown.js') }}" ></script>
  <script src="{{ asset('vue.min.js') }}" type="text/javascript"></script>
<script>
        window.jQuery(function ($) {
            "use strict";

            $('time').countDown({
                with_separators: false
            });
            $('.alt-1').countDown({
                css_class: 'countdown-alt-1'
            });
            $('.alt-2').countDown({
                css_class: 'countdown-alt-2'
            });

        });
        </script>
    </body>
</html>
