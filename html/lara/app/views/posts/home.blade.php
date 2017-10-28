@extends('layouts.master')
@section('title', '| HomePage')

@section('content')
  @foreach ($d_index as $d_index_single)

  <div class="blog-post">
    <h2 class="blog-post-title">{{ $d_index_single['title'] }}</h2>
    <p class="blog-post-meta">{{ $d_index_single['created_at']->toDayDateTimeString(); }} by <a href="#" class="text-info">Rakesh</a></p>
        @if (strlen($d_index_single['body']) > 150)
          {{ substr($d_index_single['body'],0,150).'...'; }} <a href="/lara/public/blog/{{ $d_index_single['id'] }}">read more</a>
        @else
          {{ substr($d_index_single['body'],0,150).'...'; }}
        @endif

  </div>
@endforeach

{{-- <nav class="blog-pagination">
  <a class="btn btn-outline-primary" href="#">Older</a>
  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav> --}}
  <!-- /.blog-post -->
@endsection
