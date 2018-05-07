@extends('layouts.app')
@section('title', 'Development')
@section('header')
    <header class="content-head text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>Software Product Development</strong>
              </h1>
              <hr class="line">
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                We build engaging, secure and high performance websites,products, portals and web applications using latest technologies and frameworks across platforms.
              </p>
            </div>
          </div>
        </div>
      </header>
@endsection

@section('content')
<section id="content-dev">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <h2 class="section-heading"><strong>We've Got You Covered</strong></h2>
              <hr class="line">
              <p>No one knows Artifactory and its ecosystem better than our team. We are always ready and prepared to support you, and our support contracts offer a proactive approach to maintaining the quality and integrity of your production deployment.</p>
            </div>
          </div>
          <div class="row pt-5">
              <div class="col-12 col-sm-4">
              <img src="{{ asset('/images/content/endtoend.png') }}" class="img-fluid">
              </div>
              <div class="col-12 col-sm-8">
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
              <div class="col-12 col-sm-4">
                  <img src="{{ asset('/images/content/optimize.jpg') }}" class="img-fluid">
              </div>
              <div class="col-12 col-sm-8">
                  <h4><strong>Optimization</strong></h4>
                  <p>
                      Independent testing services helping clients to improve the quality, reliability and performance of their software systems, speed time to market for your applications and minimize software testing cost.
  
  Test Consultation | Mobile App Testing | Web App Testing | Test Automation | Performance Testing
                  </p>
              </div>
          </div>
        </div>
      </section>
  
      <section id="service-offerings" class="bg-primary text-white">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h2 class="section-heading"><strong>Web Service Offerings</strong></h2>
                  <hr class="light">
                  <p>Building seamless web experiences on mobile, tablet & large screens.</p>
              </div>
              <div class="col-12 text-center">
                <span>
                    Web strategy & consultation | Web UX/UI design | Responsive website design | Website Redesign | Custom web application development  | E-commerce website development | Open source customization | Custom SaaS product development | Web automation testing  | Website marketing
                </span>
              </div>
          </div>
        </div>
      </section>
  
      <section id="web-technologies">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h2 class="section-heading"><strong>Web Technologies Focus</strong></h2>
                  <hr class="line">
              </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-4 col-md-2 mb-3">
              <h4 class="text-primary"><strong>.Net</strong></h4>
              <p class="mb-2">ASP.NET MVC 4 & 5</p>
              <p class="mb-2">ASP.NET Web Forms</p>
              <p class="mb-2">MVC: Web APIs</p>
              <p class="mb-2">Entity Framework</p>
              <p>SQL Server, MySQL</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <h4 class="text-primary"><strong>J2EE / JEE</strong></h4>
                <p class="mb-2">Spring MVC</p>
                <p class="mb-2">Custom Frameworks with MVC architecture</p>
                <p class="mb-2">Hibernate / MyBatis</p>
                <p>Build Tools: Maven, Ant</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <h4 class="text-primary"><strong>Frontend</strong></h4>
                <p class="mb-2">CSS3</p>
                <p class="mb-2">jQuery</p>
                <p class="mb-2">JavaScript</p>
                <p class="mb-2">Bootstrap</p>
                <p class="mb-2">Angluar</p>
                <p>ReactJS</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <h4 class="text-primary"><strong>Node.js</strong></h4>
                <p class="mb-2">Express for MVC</p>
                <p class="mb-2">Mongoose</p>
                <p>Build Tools: Gulp, NPM</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <h4 class="text-primary"><strong>Web Services</strong></h4>
                <p class="mb-2">JSON</p>
                <p class="mb-2">REST</p>
                <p class="mb-2">XML</p>
                <p>SOAP</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-3">
                <h4 class="text-primary"><strong>Database</strong></h4>
                <p class="mb-2">Oracle/PL SQL</p>
                <p class="mb-2">SQL Server</p>
                <p class="mb-2">Postgres</p>
                <p class="mb-2">MySQL</p>
            </div>
          </div>
        </div>
      </section>
@endsection