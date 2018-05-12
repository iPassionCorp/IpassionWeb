@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/careers')}}"><i class="fa fa-arrow-circle-left"></i></a> Edit Careers : <small>{{$careers->job_title}}</small>
            </h1>
        </div>
        <div class="col-sm-12">
            <form id="edit-form">
                @csrf
                <input type="hidden" name="id" value="{{$careers->id}}">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                            <label><strong>Sort</strong></label>
                                            <input class="form-control" type="number" id="sort" name="sort" value="{{$careers->sort}}" required>
                                        </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                            <label><strong>Careers Status</strong></label>
                                            <select class="form-control" id="published" name="published">
                                                <option value="1" {{ $careers->published == "1" ? "selected" : "" }}>Published</option>
                                                <option value="0" {{ $careers->published == "0" ? "selected" : "" }}>Hidden</option>
                                            </select>
                                        </div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><strong>Job Title</strong></label>
                        <input class="form-control" type="text" id="job_title" name="job_title" value="{{$careers->job_title}}" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><strong>Job Detail</strong></label>
                        <textarea class="form-control" id="detail" name="detail">{!!$careers->detail!!}</textarea>
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
                            url: "{{url('/administrator/careers/edit')}}",
                            data: inputData,
                            async: true,
                            success: function(response){
                                if(response){
                                    modalSaveSuccess();
                                    window.setTimeout(function(){
                                        window.location.href = "{{url('/administrator/careers')}}";
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