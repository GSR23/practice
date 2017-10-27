@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">
  @foreach ($d_all as $d_p)
    @include('site.post_all')
  @endforeach

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>
</div>
@endsection
