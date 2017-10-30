@extends('layouts.master') @section('title', '| Create') @section('content')
<form action="/lara/public/blog" method="post">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
  <div class="form-group">
    <label class="col-form-label" for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
  </div>
    <label class="mr-sm-2" for="cat_select">Category</label>
    <select class="custom-select form-control mb-2 mr-sm-2 mb-sm-0" id="cat_select" name="cat_select">
        <option selected>Choose...</option>
        @foreach ($c_cat as $c_c)
          <option value="{{ $c_c['id']}}">{{ $c_c['name']}}</option>
        @endforeach
  </select>
  <label class="col-form-label" for="body">Body</label>
  <textarea class="form-control" id="body" name="body" rows="4" placeholder="Write Here...."></textarea><br>

  <br>
  <button type="submit" class="btn btn-primary form-control" name="submit">Post</button>
</form>
@endsection
