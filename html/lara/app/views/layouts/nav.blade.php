<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
        <div class="dropdown-menu" aria-labelledby="dropdown08">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <div class="nav-item dropup my-2 my-md-0">
      <!--Login Modal -->
      <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="modal" data-target="#Login">Login</a>
      <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Login">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="#">
                <div class="form-group">
                  <label for="InputEmail1">Email address</label>
                  <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                        Remember Me
                  </label>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-item dropup my-2 my-md-0">
      {{-- SignUp Modal --}}
      <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="modal" data-target="#SignUp">SignUp</a>
      <div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SignUp">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#">
                <div class="form-group">
                  <label for="InputEmail1">Email address</label>
                  <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember Me
                  </label>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
