@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">

  <h1>Create a Post</h1>
  <form method="post" action="/myblog/public/Site">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="post">Post</label>
      <textarea class="form-control" name="data"></textarea>
    </div>
    @include('layouts.errors')
  </form>
</div>
@endsection
