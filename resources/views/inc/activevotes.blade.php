<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Active Vote') }}</div>

                <div class="card-body">
                	@foreach($vote as $value)
                		<p>{{$value->status}}
                		{{$value->type}}
                		{{$value->startdate}}
                		{{$value->enddate}}</p>
                		@endforeach
				      </div>

				      <div class="card-footer"></div>
				  </div>
				  </div>
				  </div>
				  </div>