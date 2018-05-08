@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Management</h1>
            <table id="userList" width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $usr)
                            <tr>
                                <td class="text-center"></td>
                                <td>{{$usr->name}}</td>
                                <td>{{$usr->email}}</td>
                                <td>{{$usr->created_at}}</td>
                                <td>{{$usr->updated_at}}</td>
                                <td>
                                    @if ($usr->email == 'jirayus.p@ipassion.co.th')
                                    @else
                                        <a class="btn btn-primary">Edit</a>
                                        <a class="btn btn-danger">Delete</a>     
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
            var t = $('#userList').DataTable({
                responsive: true,
                columnDefs: [{
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                order: [[ 1, 'asc' ]]
            });

            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            }).draw();
        });
    </script>
@endsection