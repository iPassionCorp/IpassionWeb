@extends('layouts.app_public')
@section('title', 'Careers')
@section('header')
    <header class="content-head text-center text-white d-flex">
        <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase mb-5">
                <strong>careers</strong>
            </h1>
            </div>
        </div>
        </div>
    </header>
@endsection

@section('content')
<section id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <h2 class="section-heading"><strong>Current Openings</strong></h2>
              <hr class="line">
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
              @endif   
            </div>
            <div class="col-12">
              <div class="accordion" id="accordionCareers">
                @foreach($careers as $key=>$item)
                <div class="card">
                  <div class="card-header" id="heading{{$item->id}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                        {{$item->job_title}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapse{{$item->id}}" class="{{ $loop->first ? "collapse show" : "collapse" }}" aria-labelledby="heading{{$item->id}}" data-parent="#accordionCareers">
                    <div class="card-body">
                        {!!$item->detail!!}
                      <p>
                        <br>
                        <button type="button" class="btn btn-primary apply-modal" data-toggle="modal" data-target="#careeModal" data-job="{{$item->job_title}}">Apply Now</button>
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
  
  <!-- Modal -->
    <div class="modal fade" id="careeModal" tabindex="-1" role="dialog" aria-labelledby="careeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="apply-job" method="POST" action="{{url('/careers')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" id="job_title" name="job_title">
              <div class="modal-header">
                  <h5 class="modal-title" id="careeModalLabel"><strong>Apply Job:</strong> <span id="job-txt"></span></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" required>
                  </div>
                  <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                  </div>
                  <div class="form-group">
                      <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" required>
                  </div>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="cv_upload" name="cv_upload" required>
                        <label id="filename" class="custom-file-label" for="cv_upload">CV Upload</label>
                      </div>
                  </div>
                  <small class="text-warning">* Only PDF file</small>
                  <div id="txtpdf"></div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
                </div>
          </form>
        </div>
      </div>
    </div>
@endsection

@section('js')
  <script>
   $(document).ready(function() {
     
      $('.apply-modal').on('click', function(){
        var job = $(this).data('job');
        $('#job_title').val(job);
        $('#job-txt').text(job);
      });  
      $('#cv_upload').on('change', function() {
        var file = $('#cv_upload')[0].files[0].name;
        $('label#filename').text(file);
      });
      $('.close-modal').on('click', function(){
        clearApplyForm('apply-job');
      }); 
      $('#apply-job').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
              required: true
            },
            mobile: {
              required: true
            },
            cv_upload: {
              required: true,
              extension: "pdf"
            }
        },
        errorPlacement: function(error, element) {
            if(element.attr("name") === "cv_upload") {
                error.insertAfter("#txtpdf");
            } else {
                error.insertAfter(element);
            }
        }
    });

    });
  </script>
</script>
@endsection