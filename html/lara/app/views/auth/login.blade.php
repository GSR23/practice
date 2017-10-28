@extends('layouts.master')
@section('Title','| Login Page')

@section('content')
  <form action="{{ URL::to('login') }}" method="post">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">

  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Log me In</button>
</form>
@endsection
