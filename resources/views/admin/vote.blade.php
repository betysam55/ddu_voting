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
</div>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  {{ __('Setup Student Representative Vote') }}
				</button>
				<br>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
				  {{ __('Setup Student Candidate Vote') }}
				</button>
            </div>
        </div>
    </div>
</div>





<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Setup Vote</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        <form>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Start Date:</label>
				            <input type="text" class="form-control" id="recipient-name">
				          </div>
				          <div class="form-group">
				            <label for="a1" class="col-form-label">End Date</label>
				            <input type="text" class="form-control" id="a1">
				          </div>
				        </form>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Activate</button>
				      </div>

				    </div>
				  </div>
				</div>
				<!-- The Modal 2 -->
				<div class="modal fade" id="myModal1">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Setup Vote</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        <form>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Start Date:</label>
				            <input type="text" class="form-control" id="recipient-name">
				          </div>
				          <div class="form-group">
				            <label for="a1" class="col-form-label">End Date</label>
				            <input type="text" class="form-control" id="a1">
				          </div>
				        </form>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Activate</button>
				      </div>

				    </div>
				  </div>
				</div>

@endsection