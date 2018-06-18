@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header list-group-item active"><strong>{{ __('View Active Vote') }}</strong></div>

                <div class="card-body">
                    @if(session()->has('message'))
                      <div class="alert alert-info">
                          {{session()->get('message')}}
                      </div>
                    @else
                	<div class="well well-lg" ">
                          <ul class="list-group">
                            <li class="list-group-item">Vote status:{{$vote->status}}</li>
                          <li class="list-group-item">Type:{{$vote->type}}</li>
                          <li class="list-group-item">Start Date:{{$vote->startdate}}</span></li>
                          <li class="list-group-item">End Date:{{$vote->enddate}}</li>
                        </ul> 
                        <form class="form form-group" onsubmit="return confirm('Are you you wanna delete this vote?')" method="post" action="{{route('deletevote', $vote->id)}}">
                            <button class="btn btn-sm btn-danger pull-right"  type="submit">Stop</button>
                        </form>
                    </div>
                    @endif
				      </div>

				      <div class="card-footer"></div>
				  </div>
				  </div>
				  </div>
				  </div>
                  @endsection