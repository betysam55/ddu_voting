@extends ('layouts.app1')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Setup Vote') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    	<div class="col-md-12 col-lg-4">
                    		<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">{{ __('Setup Student Representative Vote') }}
							</button>
						</div>
						<div class="col-md-12 col-lg-4 ">
							<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">{{ __('Setup Student Candidate Vote') }}
							</button>
						</div>
							<div class="col-md-12 col-lg-4"><button type="button" class="btn btn-info pull-right " data-toggle="collapse" data-target="#demo2">{{ __('Active vote') }}
							</button>
						</div>
						
                    </div>
                    
				


            </div>
            <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>


<div id="demo1" class="collapse">
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Setup Student Candidate Vote') }}</div>

                <div class="card-body">
                	<form action="{{route('activate')}}" method="post">
				       		
				          <div id="defaultDeltaExample" class="form-group">
				          	<input type="hidden" name="type" value="student candidate vote">
				          	<input type="hidden" id="status" name="status" value="Active">
				            <label for="recipient-name" class="col-form-label">Start Date:</label>
				            <input type="text" id="startdate" name="startdate" class="form-control date end" >
				          </div>
				          <div id="defaultDeltaExample" class="form-group">
				            <label for="a1"  class="col-form-label">End Date</label>
				           <input type="text" id="enddate" name="enddate" class="form-control date end">
				           
				          </div>
				          <input type="hidden" name="_token" value="{{csrf_token()}}">
				       <button type="submit" class="btn btn-primary" name="privote">Activate</button>
				    </form>  
				      </div>

				      <div class="card-footer"></div>
				  </div>
				  </div>
				  </div>
				  </div>
				  </div>
				      <div id="demo" class="collapse">
				       	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Setup Student Representative Vote') }}</div>

                <div class="card-body">
				       		<form action="{{route('activate')}}" method="post">
				       		
				          <div id="defaultDeltaExample" class="form-group">
				          	<input type="hidden" name="type" value="Student Representative Vote">
				          	<input type="hidden" id="status" name="status" value="Active">
				            <label for="recipient-name" class="col-form-label">Start Date:</label>
				            <input type="text" id="startdate" name="startdate" class="form-control date end" >
				          </div>
				          <div id="defaultDeltaExample" class="form-group">
				            <label for="a1"  class="col-form-label">End Date</label>
				           <input type="text" id="enddate" name="enddate" class="form-control date end">
				           
				          </div>
				          <input type="hidden" name="_token" value="{{csrf_token()}}">
				       <button type="submit" class="btn btn-primary" name="privote">Activate</button>
				    </form> 
				      <div class="card-footer"></div>
				  </div>
				  </div>
				  </div>
				  </div>
				  </div>
				      </div>
<div id="demo2" class="collapse">
	@include('inc.activevotes')
				  </div>
@endsection
@section('script')
<!-- include input widgets; this is independent of Datepair.js -->
<link rel="styleshee" type="text/css" href="{{asset('css/jquery.timepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.css')}}" />
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.timepicker.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/datepair.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.datepair.js')}}"></script>


<script>
    // initialize input widgets first
    $('#jqueryExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    $('#jqueryExample .date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    // initialize datepair
    $('#jqueryExample').datepair();
</script>
<script>
                $('#defaultDeltaExample .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#defaultDeltaExample .date').datepicker({
                    'format': 'm/d/yyyy',
                    'autoclose': true
                });

                var defaultDeltaExampleEl = document.getElementById('defaultDeltaExample');
                var defaultDeltaDatepair = new Datepair(defaultDeltaExampleEl, {
                    'defaultDateDelta': 1,
                    'defaultTimeDelta': 7200000
                });
            </script>
@endsection