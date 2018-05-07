@extends('layouts.app')

@section('header')
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>
                    Software Product <br> Development Partner
                  </strong>
              </h1>
              <hr class="line">
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                  Building Integrated Technology Solutions AcrossMobile, <br>Web & Cloud For Global Startups  Companies
              </p>
            </div>
          </div>
        </div>
    </header>
@endsection
@section('content')
<section id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading"><strong>Our Service</strong></h2>
              <hr class="line my-4">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-bar-chart text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Strategy</h3>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-laptop text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Development</h3>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-pencil text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Design</h3>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-lock text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Security</h3>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-cogs text-primary mb-3 sr-icons"></i>
                  <h3 class="mb-3">Maintenance</h3>
                  <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                  <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">consultant</h3>
                    <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  </div>
            </div>
          </div>
        </div>
      </section>

    <section id="about" class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading"><strong>Integrated Services To Build Digital Solutions & Manage Product Lifecycle</strong></h2>
            <hr class="line">
          </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-sm-6">
                <img src="{{ asset('/images/content/endtoend.png') }}" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6">
                <h4><strong>End-To-End Product Engineering</strong></h4>
                <p>
                    Our software development experts believe that software outsourced product development must SOLVE problem(s). We partner with startups & businesses of all size to build end-to-end product across platforms leveraging disruptive technologies.
                </p>
            </div>
            <div class="col-12">
              <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="{{ asset('/images/content/quality.png') }}" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6">
                <h4><strong>Quality Assurance</strong></h4>
                <p>
                    Independent testing services helping clients to improve the quality, reliability and performance of their software systems, speed time to market for your applications and minimize software testing cost.

Test Consultation | Mobile App Testing | Web App Testing | Test Automation | Performance Testing
                </p>
            </div>
            <div class="col-12">
              <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="{{ asset('/images/content/security.jpg') }}" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6">
                <h4><strong>Software Security</strong></h4>
                <p>
                    Protection solutions from iPassion, you get a comprehensive firewall and security service that’s designed to fully secure your business’s network and systems, so using the Internet can be truly worry-free – and best of all, we’ll manage the entire solution for you.
                </p>
            </div>
        </div>
      </div>
    </section>

    <section id="team">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading"><strong>Our Team</strong></h2>
                <hr class="line my-4">
              </div>
          </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="portfolio-box">
              <img src="{{ asset('images/content/avatar.png') }}" class="w-100">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    <i class="fa fa-linkedin"></i>&nbsp;
                    <i class="fa fa-envelope"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center pt-2 pb-3">
              <h5 class="m-0"><strong>Staff Name</strong></h5>
              <span>Founder</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="portfolio-box">
                <img src="{{ asset('images/content/avatar.png') }}" class="w-100">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-name">
                      <i class="fa fa-linkedin"></i>&nbsp;
                      <i class="fa fa-envelope"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center pt-2 pb-3">
                <h5 class="m-0"><strong>Staff Name</strong></h5>
                <span>CEO</span>
              </div>
            </div>
        </div>
      </div>
    </section>
@endsection