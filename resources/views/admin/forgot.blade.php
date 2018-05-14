@extends('admin.layout')

@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form>
          <div class="form-group">
            <input class="form-control" id="email" type="email" placeholder="Enter email address...">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        </form>
        <div class="text-center pt-3">
          <a class="d-block small" href="{{ url('/administrator') }}"><< Back to Login Page</a>
        </div>
      </div>
    </div>
  </div>
@endsection