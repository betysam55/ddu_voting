<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <i class="image"><img src="{{asset('uploads/images/ddu_logo.png')}}"></i>
        <b>{{ config('app.name', 'Laravel') }}</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/news">
              <i class="fa d-inline fa-lg fa-bookmark-o"></i> News</a>
          </li>
        
          <li class="nav-item">
            
            <a class="nav-link" href="#">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Notification</a>
            
          </li>
           <li class="nav-item">
            
            <a class="nav-link" href="/campaign/post">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Campaign Post</a>
            
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
        @guest
        @if(!route('login'))
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="{{ route('login') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
          @endif
          @if(!route('register'))
          <a class="btn navbar-btn ml- text-white btn-secondary" href="{{ route('register') }}">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i> Register</a>
          @endif
        @else
        

  <div class="btn-group">
            <button class="btn navbar-btn ml-2 text-white btn-secondary dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span> </button>
            <div class="dropdown-menu">
              @if(session()->has('message'))
          <p></p>
           @else
              @if($latest->status=='Active')
              @if($latest->type=='Student Representative Vote')
              <a v-pre class="dropdown-item" role="button" aria-haspopup="true" aria-expanded="false" href="#" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('repvote-form').submit();">
                                        <i class="fa fa-btn fa-thumbs-up"></i>{{ __(' Representative Vote') }}
                                    </a>
                                     <form id="repvote-form" action="{{ route('posts') }}" method="Get" style="display: none;">
                                        @csrf
                                    </form>
              <div class="dropdown-divider"></div>
              @endif
              @endif

              @if($latest->status=='Active')
              @if($latest->type=='student candidate vote')
              <a v-pre class="dropdown-item" role="button" aria-haspopup="true" aria-expanded="false" href="#" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('prevote-form').submit();">
                                        <i class="fa fa-btn fa-thumbs-up"></i>{{ __(' President Vote') }}
                                    </a>
                                     <form id="prevote-form" action="{{ route('pposts') }}" method="Get" style="display: none;">
                                        @csrf
                                    </form>
              <div class="dropdown-divider"></div>
              @endif
              @endif
              @endif
              <a v-pre class="dropdown-item"  href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        <i class="fa d-inline fa-lg fa-user-circle-o"></i>{{ __(' Profile') }}</a>
             <form id="profile-form" action="home/profile/{{Auth::user()->id }}" method="POST" style="display: none;">
                        @csrf
            </form>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out"></i>Logout
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          
            </div>
          </div>               
          
          
          @endguest


      </div>
    </div>
</nav>