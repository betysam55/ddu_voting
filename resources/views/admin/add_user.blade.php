@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('New Students') }}
                	<button class="btn btn-info pull-right">Load</button>
                </div>
                <div class="card-body">
                    <table class="table table-borderd table-striped table-condensed">
                    	<thead>
                    		<tr>
                    			<th></th>
                    			<th>NO</th>
                    			<th>ID</th>
                    			<th>First Name</th>
                    			<th>Last Name</th>
                    			<th>Dipartment</th>
                    			<th>Batch</th>
                    			<th>Action</th>
                    		</tr>
{{csrf_field()}}
			<?php $no=1; ?>
			
			@foreach ($users as $key=>$value)
				<tr class="post{{$value->id}}">
					<td><input type="checkbox" name="checkbox[]" value="<? php echo $value->id; ?>"</td>
					<td>{{$no++}}</td>
					<td>{{$value->student_id}}</td>
					<th>{{$value->fname}}</th>
					<td>{{$value->lname}}</td>
					<td>{{$value->department}}</td>
					<td>{{$value->batch}}</td>
					<td>
						<a href="/add/new/student/{{$value->id}}"  class="btn btn-info btn-sm" type="submit">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Approved" value="Approved">
							<i class="fa fa-thick">Approve</i>
						</a>
                        <a href="/add/new/student/deny/{{$value->id}}"  class="btn btn-danger btn-sm" type="submit" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Deny" value="Deny">
                            <i class="fa fa-close">Deny</i>
                        </a>
					</td>
					
				</tr>
			@endforeach
                    	</thead>
                    </table>
                </div>
                
          </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script type="text/javascript">
	$('#read-data').on('click',function(){
		$.get("{{URL::to('add/new/student/read-data')}}",function(data){
			$('#student_info').empty()html(data);
		})
	})
</script>

@endsection
