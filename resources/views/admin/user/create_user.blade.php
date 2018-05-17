@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/user')}}"><i class="fa fa-arrow-circle-left"></i></a> Create User
            </h1>
        </div>
        <div class="col-sm-12 col-md-6">
            <form id="create-user" method="POST" action="{{ url('/administrator/user/create') }}">
                @csrf
                <div class="form-group">
                    <label for="name"><b>Name:</b></label>
                    <input id="name" type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email"><b>E-Mail Address:</b></label>
                    <input id="email" type="email" class="form-control {{ session()->has('error') ? ' error' : '' }}" name="email" required>
                    @if(session()->has('error'))
                        <span class="error"><b>{{ session()->get('error') }}</b></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password"><b>Password:</b></label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm"><b>Confirm Password:</b></label>
                    <input id="password_confirm" type="password" class="form-control" name="password_confirm" required>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                    <button type="reset" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#create-user').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password_confirm: {
                        equalTo: "#password"
                    }
                }
            });
    });
</script>
@endsection