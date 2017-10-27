@extends('layouts.master')
@section('title', '| ViewPost')

@section('content')

  <div class="blog-post">
    <h2 class="blog-post-title">{{ $d_show['title'] }}</h2>
    <p class="blog-post-meta">{{ $d_show['created_at']->toDayDateTimeString(); }} by <a href="#">Rakesh</a></p>
        {{ $d_show['body'] }}
  </div>
  <form class="form-group" action="/lara/public/blog/{{ $d_show['id']}}/edit" method="put">
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="{{ route('blog.all.posts')}}"><button type="button" class="btn btn-dark" name="submit"><< All Posts</button></a>
  </form>


<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure to Delete the Post, This cant be Undone?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form class="" action="/lara/public/blog/{{ $d_show['id']}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>



  {{-- <button type="submit" class="btn btn-primary" name="submit">Edit</button><br><br> --}}
  {{-- <button type="submit" class="btn btn-danger" name="submit">Delete</button> --}}




@endsection
