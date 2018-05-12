@extends('admin.layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                <a href="{{url('administrator/careers')}}"><i class="fa fa-arrow-circle-left"></i></a> Create Careers
            </h1>
        </div>
        <div class="col-sm-12">
            <form method="POST" action="{{url('/administrator/careers/create')}}">
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
                                            <label><strong>Careers Status</strong></label>
                                            <select class="form-control" id="published" name="published">
                                                <option value="1">Published</option>
                                                <option value="0">Hidden</option>
                                            </select>
                                        </div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><strong>Job Title</strong></label>
                        <input class="form-control" type="text" id="job_title" name="job_title" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><strong>Job Detail</strong></label>
                        <textarea class="form-control" id="detail" name="detail"></textarea>
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