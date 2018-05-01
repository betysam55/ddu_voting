@extends('layouts.app1')

@section('content')
  <div class="p-1 w-100 h-100 mx-1">
    <div class="container-fluid w-100 h-100">
      <div class="row">
        <div class="col-md-12 w-100 h-100 py-3">
          <div class="row">
            <div class="col-3 bg-success py-2">
              <ul class="nav nav-pills flex-column w-100 h-100 py-5 border">
                 <li class="nav-item text-uppercase">
                  <a href="" class="active nav-link" data-toggle="pill" data-target="#tabone">News</a>
                </li>

                <li class="nav-item text-uppercase">
                  <a class="nav-link" href="" data-toggle="pill" data-target="#tabtwo">Notification</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">Setup voting</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">organization structure</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">Students</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">Generate report</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">Generate report</a>
                </li>
              </ul>
            </div>
            <div class="col-9 w-100 h-100 bg-light">
              <div class="tab-content w-100 h-100 py-5">
                <div class="tab-pane fade" role="tabpanel"></div>
                <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                  <p class="lead w-100 h-100"><main>
  

  <div class="grid-container">
    <div class="content grid-width-100">
    
      <textarea id="content" class="form-control" name="konten" rows="10" cols="50"></textarea>
    </div>
  </div>
</main></p>
                </div>
                <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                  <p class="">Tab pane two. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="tab-pane fade" id="tabthree" role="tabpanel">
                  <p class="">Tab pane three. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="tab-pane fade" role="tabpanel">
                  <ul class="breadcrumb" style="margin-bottom:0px;margin-top:0px">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Link</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

@endsection
