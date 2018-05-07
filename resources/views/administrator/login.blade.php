@extends('administrator.layout')

@section('content')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header text-center">
                <img src="{{ asset('/images/logo.png') }}" width="70">
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" placeholder="Enter Email..." required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Enter Password..." required>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Remember me</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center">
                <br>
                <a class="d-block small" href="{{ url('forgot-password') }}">Forgot Password?</a>
            </div>
          </div>
        </div>
    </div>
@endsection