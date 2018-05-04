@extends('layouts.app1')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>News</h1>
	</div>
</div>
<div class="row">
	<div class="table table-responsive">
		<table class="table table-bordered" id="table">
			<tr>
				<th width="150px">No</th>
				<th > Title</th>
				<th> Body</th>
				<th >created at</th>
				<th class="text-center" width="150px">
					<a href="#" id="" class="create-modal btn btn-success btn-sm">
						<i class="fa fa-plus"></i> 
					</a>
				</th>
			</tr>
			{{csrf_field()}}
			<?php $no=1; ?>
			
			@foreach ($posts as $key=>$value)
				<tr class="post{{$value->id}}">
					<td>{{$no++}}</td>
					<td>{{$value->title}}</td>
					<td>{{$value->body}}</td>
					<td>{{$value->created_at}}</td>
					<td>
						<a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
							<i class="fa fa-eye"></i>
						</a>
						<a href="#" class="show-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="#" class="show-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
							<i class="fa fa-trash "></i>
						</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>
 

 <div id="create" class="modal fade " role="dialog">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h4 class="modal-title title-center"></h4>
 				<button class="close" type="button" data-dismiss="modal">&times</button>
 				
 			</div>
 			<div class="modal-body">
 				<form class="form-horizontal" role="form">
 					<div class="form-group row add">
 						<label class="control-lable col-md-2" for="title">Title:</label>
 						<div class="col-md-10">

 							<input type="text area" class="form-control" placeholder="your title here" required="" id="title" name="title">
 							<p class="error text-center alert alert-danger hidden" hidden=""></p>
 						</div>
 					</div>
 					<div class="form-group row add">
 						<label class="control-lable col-md-2" for="body">Body:</label>
 						<div class="col-md-10">
 							<textarea class="form-control" placeholder="your body here" required="" id="body" name="body"></textarea>
 							<!-- <input type="text area" > -->
 							<p class="error text-center alert alert-danger hidden" hidden=""></p>
 						</div>
 					</div>
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button class="btn btn-warning" type="submit" id="add">
 					<span class="fa fa-plus"></span>Save Post
 				</button>
 				<button class="btn btn-warning" type="button" data-dismiss="modal">
 					<span class="fa fa-remove"></span>Close
 				</button>
 			</div>
 		</div>
 	</div>
 </div>
@endsection