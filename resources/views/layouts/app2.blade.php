<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/adm/theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont.woff2') }}" type="text/css">
         <link rel="stylesheet" href="{{ asset('fonts/glyphicons-halflings-regular.woff2') }}" type="text/css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
      <script src="{{ asset('ck/ckeditor.js') }}"></script>
  
  <script src="{{ asset('ck/config.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        @include('inc.nav')
        <main class="py-4">
           <div class="p-1 w-100 h-100 mx-1">
    <div class="container-fluid w-100 h-100">
      <div class="row">
        <div class="col-md-12 w-100 h-100 py-3">
          <div class="row">
            <div class="col-3 bg-success py-2">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="{{route('home')}}" class="active nav-link">
                    <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{route('canposts.index')}}">Post Campaign</a>
                </li>
                <li class="nav-item">
                  <a href="/result" class="nav-link">View result</a>
                </li>
              </ul>
            </div>
            <div class="col-9 w-100 h-100 bg-light">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

            
        </main>
    </div>
    <footer>
      <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Student Union</h2>
          <p class="text-white">A r you may need, from website prototyping to publishing</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">About us</a>
            <br>
            <a href="#" class="text-white">Vote</a>
            <br>
            <a href="#" class="text-white">Events</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+994" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-phone"></i>+251 - 111 111 111</a>
          </p>
          <p>
            <a href="mailto:info@ddustudentunion.com" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@ddustudentunion.com</a>
          </p>
          <p>
            <a href="#" class="text-white" target="_blank">
              <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>ddu</a>
          </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Subscribe</h2>
          <form>
            <fieldset class="form-group text-white">
              <label for="exampleInputEmail1">Get our newsletter</label>
              <input type="email" class="form-control" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 DDU Student Union - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
    </footer>
</body>
  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"  crossorigin="anonymous"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
<script src="{{asset('ck/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("body");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
<script type="text/javascript">
  $(document).on('click','.create-modal',function(){
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Add Post');

  });
  
</script>
<!-- <script type="text/javascript">
  // function to add (save)
  $('#add').click(function(){
    $ajax({
      type='POST',
      url='addpost',
      data={
        '_token':$('input[name=_token]').val(),
        'title':$('input[name=title]').val(),
        'body':$('input[name=body]').val(),
      },
      success:function (data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.error').text(data.errors.title);
          $('.error').text(data.errors.body);
        }
        else{
          $('.error').remove();
          $('#table').append("<tr class='post" + data.id +"'>"+
            "<td>" + data.id + "</td>"+
            "<td>" + data.title + "</td>"+
            "<td>" + data.body + "</td>"+
            "<td>" + data.created_at +"</td>"+
            "<td><a class='show-modal btn btn-info btn-sm' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
            "<i class='fa fa-eye'></i></a>"+
            "<a class='edit-modal btn btn-warning btn-sm' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
            "<i class='fa fa-pencil'></i></a>"+
            "<a class='delete-modal btn btn-danger btn-sm' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
            "<i class='fa fa-trash'></i></a>"+
            "</td>"+
            "</tr>");
      }
    }
    )}
    
  })
    
  
  
</script> -->
 @yield('script')
</html>
