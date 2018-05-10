@extends('layouts.app_public')
@section('title', 'Contact us')
@section('header')
    <header class="content-head text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>CONTACT US</strong>
              </h1>
              <hr class="line">
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                  Are you a Startup, SME, Enterprise, or an Investor looking for technology partners?
              </p>
            </div>
          </div>
        </div>
    </header>
@endsection

@section('content')
    <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-8">
              <form method="POST" action="{{url('/contact-us')}}">
                {{ csrf_field() }}
                <h3 class="text-primary"><strong>Let's work together</strong></h3>
                <p>We're collaborating with some of the largest brands in the world, as well as with startups. We’d love to learn your needs, vision and explore how we can assist exceeding your goals.</p>
                <div class="row">
                  <div class="col-12">
                      @if(session()->has('success'))
                          <div class="alert alert-success">
                              {{ session()->get('success') }}
                          </div>
                      @elseif(session()->has('fail'))
                          <div class="alert alert-danger">
                              {{ session()->get('fail') }}
                          </div>
                      @endif                  
                  </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label><strong>Subject</strong> <span class="text-danger">*</span></label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Your Subject..." required>
                          </div>
                    </div>
                  <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <label><strong>Full Name</strong> <span class="text-danger">*</span></label>
                          <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Full Name..." required>
                        </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <label><strong>Email</strong> <span class="text-danger">*</span></label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Your Email..." required>
                        </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <label><strong>Contact Name</strong> <span class="text-danger">*</span></label>
                          <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Your Contact Name..." required>
                        </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <label><strong>Mobile</strong> <span class="text-danger">*</span></label>
                          <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Your Mobile..." required>
                        </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label><strong>Line ID:</strong></label>
                            <input type="text" id="line_id" name="line_id" class="form-control" placeholder="Your Line ID...">
                          </div>
                    </div>
                  <div class="col-12">
                      <div class="form-group">
                          <label><strong>Message:</strong> <span class="text-danger">*</span></label>
                          <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message..." required></textarea>
                        </div>
                  </div>
                  <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 pt-3">
              <h5 class="text-primary"><strong>Write to us</strong></h5>
              <p><strong>Business:</strong> business@ipassion.co.th</p>
              <p><strong>Information:</strong>info@ipassion.co.th</p>
              <p><strong>Career:</strong> jobs@ipassion.co.th</p>
              <h5 class="text-primary"><strong>Location:</strong></h5>
              <p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3873.130000893319!2d100.39155700000002!3d13.891174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28e33b3ceb62d%3A0x5e8e44df48d9035!2zNzkg4LiX4Liy4LiH4Lir4Lil4Lin4LiH4LiK4LiZ4Lia4LiXIOC4meC4meC4l-C4muC4uOC4o-C4tSAxMDA5IOC4leC4s-C4muC4pSDguYDguKrguLLguJjguIfguKvguLTguJkg4Lit4Liz4LmA4Lig4LitIOC4muC4suC4h-C5g-C4q-C4jeC5iCDguJnguJnguJfguJrguLjguKPguLUgMTExNDAg4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4Lii!5e0!3m2!1sth!2sus!4v1525425533884" width="100%" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
              </p>
            </div>
          </div>
        </div>
    </section>
@endsection