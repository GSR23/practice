@extends('layouts.master')
@section('title', '| Create')

@section('content')
  <form action="/lara/public/blog" method="post">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
  <div class="form-group">
    <label class="col-form-label" for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
  </div>
  <label class="col-form-label" for="body">Body</label>
  <textarea class="form-control" id="body" name="body" rows="4" placeholder="Write Here...."></textarea><br>
  <button type="submit" class="btn btn-primary form-control" name="submit">Post</button>
</form>
@endsection
