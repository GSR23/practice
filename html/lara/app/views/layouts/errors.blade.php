@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yeppie!!!</strong> {{ Session::get('success') }}
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
