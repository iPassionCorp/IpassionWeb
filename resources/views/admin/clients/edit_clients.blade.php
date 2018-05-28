@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/clients')}}"><i class="fa fa-arrow-circle-left"></i></a> Edit Client : <small>{{$clients->name}}</small>
            </h1>
        </div>
        <div class="col-sm-12">
            <form id="edit-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$clients->id}}">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                            <label><strong>Sort</strong></label>
                                            <input class="form-control" type="number" id="sort" name="sort" value="{{$clients->sort}}" required>
                                        </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                            <label><strong>Careers Status</strong></label>
                                            <select class="form-control" id="published" name="published">
                                                <option value="1" {{ $clients->published == "1" ? "selected" : "" }}>Published</option>
                                                <option value="0" {{ $clients->published == "0" ? "selected" : "" }}>Hidden</option>
                                            </select>
                                        </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-12">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><strong>Client Name</strong></label>
                                            <input class="form-control" type="text" id="name" name="name" value="{{$clients->name}}" required>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-sm-12">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><strong>Url</strong></label>
                                            <input class="form-control" type="text" id="url" value="{{$clients->url}}" name="url">
                                        </div>
                                    </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                            <label><strong>Image</strong></label>
                                            <input type="file" id="image" name="image" value="{{$clients->image}}" accept="image/gif, image/jpeg, image/png">
                                        </div>
                                    <img src="{{asset('/storage/clients/'.$clients->image)}}" width="200" class="thumbnail">
                            </div>
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
                var inputData = new FormData(this);

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
                            url: "{{url('/administrator/clients/edit')}}",
                            data: inputData,
                            cache:false,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response){
                                    modalSaveSuccess();
                                    window.setTimeout(function(){
                                        window.location.href = "{{url('/administrator/clients')}}";
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