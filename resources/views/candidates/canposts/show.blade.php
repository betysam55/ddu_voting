@extends('layouts.app2')

@section('content')
  <div class="card">
      <div class="card-header">
      <h2>{{$canpost->title}}</h2>
      </div>
      <div class="card-body">
       <p>{!! $canpost->body !!} </p>   
      </div>
  </div>
@endsection