@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                Pages Management
            </h1>
        </div>
        <div class="col-sm-12">
            <table id="pagesList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Page</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Update Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $item)
                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">{{$item->page}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{date_format($item->updated_at,"d/m/Y H:i:s")}}</td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="{{url('/administrator/pages/edit/'.$item->id)}}">Edit</a>
                                    {{-- <a href="#" class="delete" data-id="{{$item->id}}" data-token="{{ csrf_token() }}">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            displayDatatablesDisable('#pagesList');
            $('.delete').on('click', function(e){
                e.preventDefault();
                var id = $(this).data('id');
                var token = $(this).data('token');
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
                            type: "DELETE",
                            url: "{{url('/administrator/pages/delete')}}/"+id,
                            data: { 
                                "id": id,
                                "_token": token,
                             },
                            async: true,
                            success: function(response){
                                if(response){
                                    modalDeleteSuccess();
                                    window.setTimeout(function(){
                                        location.reload();
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
@endsection