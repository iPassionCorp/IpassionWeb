@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="login-panel text-center">
                  <img src="{{ asset('/images/logo.png') }}" width="100" id="logo">
                  <br><br>
              </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                              <label for="email">{{ __('E-Mail Address') }}</label>
                              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email..." required autofocus>
                              @if ($errors->has('email'))
                                <span class="invalid-feedback text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="password">{{ __('Password') }}</label>
                              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="Enter Password..." required>
                              @if ($errors->has('password'))
                                <span class="invalid-feedback text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection