@extends('layouts.master') @section('title', '| ViewPost')


@section('content')
{{-- {{ $d_show->id }} --}}
<div class="blog-post">

  <h2 class="blog-post-title">{{ $d_show['title'] }}</h2>
  <p class="blog-post-meta">{{ $d_show['created_at']->toDayDateTimeString(); }} by <a href="#">{{ $d_show->user->name}}</a></p>
  <p><span class="blog-post-meta">Belongs To: &nbsp;</span>{{ $d_show->category->name }}</p>
  <div style="text-align:justify; text-indent:30px;">{{ $d_show['body'] }}</div>

  <div class="form-row">
    @include('comments.post_comment')
  </div>
</div>

<form class="form-group" action="/lara/public/blog/{{ $d_show['id']}}/edit" method="get">
  <button type="submit" class="btn btn-primary">Edit</button>
  <a href="{{ route('blog.all.posts')}}"><button type="button" class="btn btn-dark" name="submit"><< All Posts</button></a>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
        Delete
</button>
</form>

@include('comments.show_comments')
<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
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

@endsection
