@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/user')}}"><i class="fa fa-arrow-circle-left"></i></a> Edit User
            </h1>
        </div>
        <div class="col-sm-12 col-md-6">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            <form id="edit-form" method="POST" action="{{url('/administrator/user/edit')}}">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$user->id}}">
                <div class="form-group">
                    <label for="name"><b>Name:</b></label>
                    <input id="name" type="text" name="name" class="form-control" value="{{$user->name}}" required>
                </div>
                <div class="form-group">
                    <label>E-Mail Address:</label>
                    <input type="text" disabled value="{{$user->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label><b>Current Password:</b></label>
                    <input id="current_password" type="password" class="form-control" name="current_password">
                </div>
                <div class="form-group">
                    <label><b>New Password:</b></label>
                    <input id="new_password" type="password" class="form-control" name="new_password">
                </div>
                <div class="form-group">
                    <label><b>Confirm Password:</b></label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
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

{{-- @section('js')
<script>
    $(document).ready(function(){
        $('#edit-form').submit(function(e){
			e.preventDefault();
                var inputData = $("#edit-form").serialize();
            swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true,
                closeOnCancel: true 
            },
            function(isConfirm) {
                if (isConfirm) {
                    	$.ajax({
                            type: "POST",
                            url: "{{url('/administrator/user/edit')}}",
                            data: inputData,
                            async: true,
                            success: function(response){
                                if(response){
                                    modalSaveSuccess();
                                    window.setTimeout(function(){
                                        window.location.href = "{{url('/administrator/user')}}";
                                    }, 2000);
                                }                    
                            }
                        });
                }
            }
            );
		});
    });
</script>
@endsection --}}