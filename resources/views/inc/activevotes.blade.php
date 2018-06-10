@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('View Active Vote') }}</strong></div>

                <div class="card-body">
                    @if(session()->has('message'))
                      <div class="alert alert-info">
                          {{session()->get('message')}}
                      </div>
                    @else
                	<div class="well well-lg well-success text-success" style="background-color:Lightgrey;">
                		<center><strong><h5>Vote status:{{$vote->status}}<br>
                        Type:{{$vote->type}}<br>
                        Start Date:{{$vote->startdate}}<br>
                        End Date:{{$vote->enddate}}<br></h5></strong></center>
                		
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