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
              <div class="accordion" id="accordionCaree">
                <div class="card">
                  <div class="card-header" id="heading1">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        QA Tester
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionCaree">
                    <div class="card-body">
                      <p><strong>RESPONSIBILITIES</strong></p>
                      <ul>
                        <li>Draft test plans with a strategic selection of test methods and approach </li>
                        <li>Develop test suites, cases, estimations, and report on durations </li>
                        <li>Execute test, document test results, and measure impact </li>
                        <li>Report on the user experience and test results, escalating when necessary </li>
                        <li>Understand design tenets and be an oracle of knowledge for a component, system, or feature </li>
                        <li>Ensure test tool data is high quality, fully traceable, and updated daily </li>
                        <li>Document and maintain all necessary testware </li><li>Other duties as assigned </li>
                      </ul>
                      <p><strong>REQUIREMENTS</strong></p>
                      <ul>
                        <li>Bachelor’s degree in related field or equivalent experience </li>
                        <li>2-3 years Software testing experience </li>
                        <li>Black Box testing experience </li>
                      </ul>
                      <p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#careeModal">Apply Now</button>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Java Developer
                      </button>
                    </h5>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionCaree">
                    <div class="card-body">
                      <p><strong>RESPONSIBILITIES</strong></p>
                      <ul>
                        <li>Translate business requirements into technical specifications </li>
                        <li>Work closely with business and technical teams on the product from initial analysis through implementation </li><li>Develop and maintain Java/J2EE applications in the development and test environments with minimal supervision from the Senior Software Engineering Staff. </li>
                        <li>Develop updates, corrections, or enhancements including Business Logic in Java &amp; SQL. </li>
                        <li>Provide analysis and recommendations for external J2EE technologies which could enhance and improve products to meet business needs. </li>
                        <li>Work with Operations Team on Application Deployment Issues. </li>
                      </ul>
                      <p><strong>REQUIREMENTS</strong></p>
                      <ul>
                        <li>Java, Spring or Hibernate. J2EE experience is preferred.&nbsp; </li>
                        <li>Hands-on experience with relational databases or other database type development </li>
                        <li>Hands-on experience with automated testing, continuous integration, and automated deployments </li>
                        <li>Ability to innovate and present new ideas/solutions </li>
                        <li>Ability to work collaboratively </li>
                        <li>Strong experience working with Agile development </li>
                        <li>Bachelor's Degree in Computer Science or equivalent </li>
                      </ul>
                      <p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#careeModal">Apply Now</button>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  <!-- Modal -->
    <div class="modal fade" id="careeModal" tabindex="-1" role="dialog" aria-labelledby="careeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="#">
              <div class="modal-header">
                  <h5 class="modal-title" id="careeModalLabel"><strong>Apply Job</strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Mobile Number">
                  </div>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload_cv">
                        <label class="custom-file-label" for="upload_cv">CV Upload</label>
                      </div>
                  </div>
                  <small class="text-warning">* File Types : PDF, Doc</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
          </form>
        </div>
      </div>
    </div>
@endsection