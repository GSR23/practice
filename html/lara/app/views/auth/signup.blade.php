@extends('layouts.master')
@section('Title','| Login Page')

@section('content')
<form action="{{ URL::to('signup')}}" method="post">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="name">*</span>
      <input type="text" class="form-control" placeholder=" Your Name" name="name" aria-describedby="name">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">_</span>
      <input type="text" class="form-control" placeholder="Your Username" name="username" aria-describedby="basic-addon1">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="email">@</span>
      <input type="text" class="form-control" placeholder="Your E-Mail" name="email" aria-describedby="email">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="password">#</span>
      <input type="password" class="form-control" placeholder="Your Password" name="password" aria-describedby="password">
    </div>
  </div>

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="password_con">#</span>
      <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm" aria-describedby="password_con">
    </div>
  </div>
  <div class="form-group ">
    <button type="submit" class="btn btn-primary btn-block">Sign me Up</button>
  </div>
</form>
@endsection
