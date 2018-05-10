@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                Pages Management
            </h1>
        </div>
        <div class="col-sm-12">
            <table id="contactList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Subject</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Contact Name</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Line ID</th>
                            <th class="text-center">Message</th>
                            <th class="text-center">Created Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $item)
                            <tr>
                                <td class="text-center"></td>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->fullname}}</td>
                                <td class="text-center">{{$item->email}}</td>
                                <td>{{$item->contact_name}}</td>
                                <td class="text-center">{{$item->mobile}}</td>
                                <td class="text-center">{{$item->line_id}}</td>
                                <td>{{$item->message}}</td>
                                <td class="text-center">{{date_format($item->created_at,"d/m/Y H:i:s")}}</td>
                                <td class="text-center">
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
            displayDatatables('#contactList', 'desc');
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
                            url: "{{url('/administrator/contact-form/delete')}}/"+id,
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