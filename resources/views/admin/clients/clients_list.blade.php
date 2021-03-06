@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                    Our Client & Partnership
                <a class="btn btn-success pull-right mt" href="{{url('/administrator/clients/create')}}"><i class="fa fa-plus"></i> Create</a>
            </h1>
        </div>
        <div class="col-sm-12">
            <table id="clientsList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Thumbnail</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">Url</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Created Date</th>
                            <th class="text-center">Updated Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients->sortBy('sort') as $item)
                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center"><img src="{{asset('/storage/clients/'.$item->image)}}" width="100"></td>
                                <td>{{$item->name}}</td>
                                <td>
                                    @if(!empty($item->url))
                                        <a href="{{$item->url}}" target="_blank">{{$item->url}}</a>
                                    @endif
                                </td>
                                <td class="text-center">{!! $item->published == "1" ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i>' !!}</td>
                                <td class="text-center">{{date_format($item->created_at,"d/m/Y H:i:s")}}</td>
                                <td class="text-center">{{date_format($item->updated_at,"d/m/Y H:i:s")}}</td>
                                <td class="text-center">
                                    <a href="{{url('/administrator/clients/edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{$item->id}}" data-token="{{ csrf_token() }}">Delete</a>
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
            displayDatatablesDisableOrder('#clientsList');
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
                            url: "{{url('/administrator/clients/delete')}}/"+id,
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