@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Students') }}
                	
                </div>
                <div class="card-body">
                    <table class="table table-borderd table-striped table-condensed">
                    	<thead>
                    		<tr>
                    			<th>NO</th>
                    			<th>First Name</th>
                    			<th>Last Name</th>
                    			<th>Dipartment</th>
                    			<th>Batch</th>
                    			<th>Role</th>
                    			<th>Action</th>
                    		</tr>
{{csrf_field()}} 
			<?php $no=1; ?>
			
			@foreach ($users as $key=>$value)
				<tr class="post{{$value->id}}">
					<td>{{$no++}}</td>
					<th>{{$value->fname}}</th>
					<td>{{$value->lname}}</td>
					<td>{{$value->department}}</td>
					<td>{{$value->batch}}</td>
					<td>@if($value->role==1)
							Administrator
						@elseif($value->role==0)
							User
						@elseif($value->role==2)
							Candidate
						@endif</td>
					<td>
						<a href="/user/privilage/candidate/{{$value->id}}" onclick="return confirm('Are want to set to Candidate Mode?')" class=" btn btn-warning btn-sm">
							<i class="fa fa-plus">Set Candidate</i>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</a>
						<a href="/user/privilage/user/{{$value->id}}" onclick="return confirm('Are you want to set to User Mode?')" class=" btn btn-success btn-sm">
							<i class="fa fa-plus">Set User</i>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</a>
						<a href="/user/privilage/admin/{{$value->id}}" onclick="return confirm('Are want to set to Administrator Mode?')" class=" btn btn-danger btn-sm">
							<i class="fa fa-plus">Set Admin</i>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
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
