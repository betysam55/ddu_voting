@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('News') }}</div>

                <div class="card-body">
                	@foreach($posts as $news)
<h3><b>{{$news->title}}</b></h3>
      <p>{!! $news->body !!}</p>
      <br><br>
@endforeach

       <h3><b>Vote Details</b></h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             
           </p>
    </div>


</div></div></div></div></div></div>
@endsection