@extends('layouts.master')
@section('title', '| All Posts')
@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach ($d_show_posts as $d_show_post)
    <tbody>
      <tr>


        <th scope="row">{{ $d_show_post['id'] }}</th>
        <td><a href="/lara/public/blog/{{ $d_show_post['id'] }}">{{ $d_show_post['title'] }}</a></td>

        <td>{{ substr($d_show_post['body'],0,100).'...'; }}</td>
        <td>
          User
        </td>

    </tr>
    @endforeach
    </tbody>
</table>

{{ $d_show_posts->links() }}

@endsection
