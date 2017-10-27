@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
  <div class="blog-post">
    <h2 class="blog-post-title">{{ $d_one->title }}</h2>
    <p class="blog-post-meta">{{ $d_one->created_at->toDayDateTimeString() }}</p>
    {{ $d_one->data }}
  </div>
</div>
@endsection
