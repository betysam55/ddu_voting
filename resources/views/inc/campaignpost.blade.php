<div class="container text-success">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($campaignpost as $data)
            <div class="card text-primary">
                <div class="card-header text-primary">Title:{!!$data->title!!}</div>

                <div class="card-body text-success">

					{!!$data->body!!}

				</div>
                <div class="card-footer text-info">
                	<div class="pull-right">
                		{!!$data->created_at->diffForHumans()!!}
                	</div>
                	
                </div>
                </div>
                <br>@endforeach
                </div>
                </div>
                </div>