@extends('layouts.app1')

@section('content')
  <div class="card">
      <div class="card-header">
      <h2>{{$post->title}}</h2>
      </div>
      <div class="card-body">
       <p>{{$post->body}} </p>   
      </div>
  </div>
@endsection