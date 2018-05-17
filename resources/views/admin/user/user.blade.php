@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                User Management
                <a class="btn btn-success pull-right mt" href="{{url('/administrator/user/create')}}"><i class="fa fa-plus"></i> Create</a>
            </h1>
        </div>
        <div class="col-sm-12">
            <table id="userList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Create Date</th>
                            <th class="text-center">Update Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $item)
                            <tr>    
                                <td class="text-center"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td class="text-center">
                                    @if($item->email == 'admin@ipassion.co.th')
                                    @else
                                        <a class="btn btn-primary" href="{{url('/administrator/user/edit/'.$item->id)}}">Edit</a>
                                        @if($item->email == Auth::user()->email) 
                                        @else
                                        <a href="#" class="btn btn-danger delete" data-id="{{$item->id}}" data-token="{{ csrf_token() }}">Delete</a>
                                        @endif
                                    @endif    
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
            displayDatatables('#userList', '3', 'asc');
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
                            url: "{{url('/administrator/user/delete')}}/"+id,
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