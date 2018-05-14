@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/clients')}}"><i class="fa fa-arrow-circle-left"></i></a> Create Clients
            </h1>
        </div>
        <div class="col-sm-12">
            <form method="POST" action="{{url('/administrator/clients/create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                            <label><strong>Sort</strong></label>
                                            <input class="form-control" type="number" id="sort" name="sort" value="0" required>
                                        </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                            <label><strong>Status</strong></label>
                                            <select class="form-control" id="published" name="published">
                                                <option value="1">Published</option>
                                                <option value="0">Hidden</option>
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
                                        <input class="form-control" type="text" id="name" name="name" required>
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-12">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><strong>Url</strong></label>
                                        <input class="form-control" type="text" id="url" name="url">
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                                <div class="form-group">
                                        <label><strong>Image</strong></label>
                                        <input type="file" id="image" name="image" accept="image/gif, image/jpeg, image/png" required>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                    <button type="reset" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection