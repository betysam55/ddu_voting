@extends('layouts.app2')
@section('content')
<div class="container">

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
          <a class="btn btn-primary btn-sm" href="#" role="button">View Details >></a>
       </p>
      <br><br>


       <h3><b>Vote Details</b></h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             <a class="btn btn-primary btn-sm" href="/su_vote" role="button">View Details >></a>
           </p>
    </div>
@endsection