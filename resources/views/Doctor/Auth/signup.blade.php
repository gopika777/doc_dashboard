@section('title','Signup')
@extends('Doctor.Layout.Auth.header')
@section('content')
<div class="card">
    <div class="card-header">
        Signup
    </div>
    <div class="card-body">
    <form action="{{route('doctor.signup.save')}}" method="post">
      @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Specialisation</label>
            <input type="text" name="spl" class="form-control" >
          </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<a href="{{route('doctor.login')}}">Login</a>
</form>
    </div>
</div>
@endsection