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
                        @foreach($users as $item)
                            <tr>
                                <td class="text-center"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    @if ($item->email == 'jirayus.p@ipassion.co.th')
                                    @else
                                        <a class="btn btn-primary" href="">Edit</a>
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
            displayDatatables('#userList', '1', 'asc');
        });
    </script>
@endsection