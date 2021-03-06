@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                Careers Form
            </h1>
        </div>
        <div class="col-sm-12">
            <table id="careersList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Job</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">CV file</th>
                            <th class="text-center">Created Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $item)
                            <tr>
                                <td class="text-center"></td>
                                <td>{{$item->job_title}}</td>
                                <td>{{$item->fullname}}</td>
                                <td class="text-center">{{$item->email}}</td>
                                <td class="text-center">{{$item->mobile}}</td>
                                <td class="text-center"><a href="{{url('/storage/cv-upload/'.$item->cv_upload)}}" target="_blank" class="text-danger"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
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
            displayDatatables('#careersList', '6', 'desc');
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
                            url: "{{url('/administrator/careers-form/delete')}}/"+id,
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