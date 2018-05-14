@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/pages')}}"><i class="fa fa-arrow-circle-left"></i></a> Create Pages
            </h1>
        </div>
        <div class="col-sm-12">
            <form method="POST" action="{{url('/administrator/pages/create')}}">
                @csrf
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><strong>Page</strong></label>
                        <input class="form-control" type="text" id="page" name="page" required>
                    </div>
                    <div class="form-group">
                        <label><strong>Title</strong></label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                        <label><strong>Content</strong></label>
                        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
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
@section('js')
    <script>
        
    </script>
@endsection