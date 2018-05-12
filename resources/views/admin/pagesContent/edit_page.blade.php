@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/pages')}}"><i class="fa fa-arrow-circle-left"></i></a> Edit Pages: <small>{{$pages->page}}</small>
            </h1>
        </div>
        <div class="col-sm-12">
            <form id="edit-form">
                    {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$pages->id}}">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><strong>Page</strong></label>
                        <input class="form-control" type="text" id="page" name="page" value="{{$pages->page}}" required>
                    </div>
                    <div class="form-group">
                        <label><strong>Title</strong></label>
                        <input class="form-control" type="text" id="title" name="title" value="{{$pages->title}}" required>
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="5"  required>{{$pages->description}}</textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                        <label><strong>Content</strong></label>
                        <textarea class="form-control" id="content" name="content">{!!$pages->content!!}</textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save changes</button>
                    <button type="reset" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
@section('js')
    <script>
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
                            url: "{{url('/administrator/pages/edit')}}",
                            data: inputData,
                            dataType: "html",
                            async: true,
                            success: function(response){
                                if(response){
                                    modalSaveSuccess();
                                    window.setTimeout(function(){
                                        window.location.href = "{{url('/administrator/pages')}}";
                                    }, 2000);
                                }                    
                            }
                        });
                }
            }
            );
		});
    </script>
@endsection