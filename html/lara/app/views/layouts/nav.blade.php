<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Wizard's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample06">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('blog.index')}}">Wizard's Blog <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.all.posts')}}">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.create')}}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.index')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.index')}}">Contact</a>
      </li>

    </ul>

    @if (Auth::check())
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, {{ Auth::user()->username; }}!</a>
          <div class="dropdown-menu" aria-labelledby="dropdown08">
            <a class="dropdown-item" href="">Posts</a>
            <a class="dropdown-item" href="{{ URL::to('logout') }}">Logout</a>
        </div>
      </div>
      <div class="nav-item my-2 my-md-0">
        <a class="nav-link" href=""></a>
      </div>


    @else
      <div class="nav-item my-2 my-md-0">
        <a class="nav-link" href="{{ route('blog.login')}}">Login</a>
      </div>
      <div class="nav-item my-2 my-md-0">
        <a class="nav-link" href="{{ route('blog.signup')}}">SignUp</a>
      </div>

    @endif


  </div>
</nav>
