@extends('layouts.master')
@section('title', '| EditPost')

@section('content')
  <form action="/lara/public/blog/{{ $d_edit['id'] }}" method="post">
  <div class="form-group">
    <label class="col-form-label" for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $d_edit['title'] }}">
  </div>
  <input type="hidden" name="_method" value="PUT">
  <label class="col-form-label" for="body">Body</label>
  <textarea class="form-control" id="body" name="body" rows="4" placeholder="{{ $d_edit['body'] }}"="">{{ $d_edit['body'] }}</textarea><br>
  <div class="form-group">
    <button type="submit" class="btn btn-lg btn-primary" name="submit">Update</button>
    <a href="{{ route('blog.post', [$d_edit->id])}}"><button type="button" class="btn btn-lg btn-secondary" name="submit">Cancel</button></a>
  </div>
  {{-- <form action="/lara/public/blog/{{ $d_edit['id'] }}" method="get"> --}}
  {{-- </form> --}}
</form>
@endsection
