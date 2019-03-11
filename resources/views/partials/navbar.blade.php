<header>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Teams</h5>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav> 
      @if(auth()->check())
      <a class="nav-link" href='#'>{{ auth()->user()->name }}</a>
      <a class="btn btn-outline-primary" href="{{ route('logout')}}">Logout</a>
      @else
      <a class="btn btn-outline-primary" href="{{ route('register') }}">Sign up</a>&nbsp
      <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
      @endif
  </div>
</header>