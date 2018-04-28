@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div >
            <div >
                <div >Dashboard</div>

                <div >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
          <div class="card">
            <img class="card-img-top" src="{{ asset('uploads/images/default.png') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('uploads/images/default.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{ asset('uploads/images/iphone_cover.png') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{ asset('uploads/images/default.png') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center" style="background-image: url('a-man-voting.jpg');background-position:center center;background-repeat:no-repeat;background-size:cover;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-3 mb-4 text-primary">Hero image intro</h1>
          <p class="lead mb-5">Pingendo is a HTML editor for everyone. Easy for newbies, useful for professionals.
            <br>Code quality is a must. Pingendo generates clean, battle-tested, modular Bootstrap 4 code. </p>
          <a href="#" class="btn btn-lg mx-1 btn-secondary">A claim here</a>
          <a href="#" class="btn btn-lg btn-primary mx-1">Your call to action</a>
        </div>
      </div>
    </div>
  </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
