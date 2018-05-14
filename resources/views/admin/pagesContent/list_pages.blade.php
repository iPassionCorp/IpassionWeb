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
                                <td class="text-center">{{date_format($item->updated_at,"d/m/Y H:i:s")}}</td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="{{url('/administrator/pages/edit/'.$item->id)}}">Edit</a>
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
        });
    </script>
@endsection