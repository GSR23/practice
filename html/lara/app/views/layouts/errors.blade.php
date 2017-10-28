@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yeppie!!!</strong> {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if (Session::has('fail'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Oops!!!</strong> {{ Session::get('fail') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if (Session::has('auth'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Alas!!!</strong> {{ Session::get('auth') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if (Session::has('logout'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>ThankYou!!!</strong> {{ Session::get('logout') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if (count($errors) > 0)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Oops!!!</strong><br>
      @foreach ($errors->all() as $error)
        {{ $error }}<br>
      @endforeach

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
