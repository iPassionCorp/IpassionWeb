@extends('layouts.app_public')
@section('title', 'Devops')
@section('header')
    <header class="content-head text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>DevOps - CI / CD</strong>
              </h1>
              <hr class="line">
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                  Quali's CloudShell cloud sandbox software allows you to to automate the creation of full-stack, multi-cloud sandbox environments to speed continuous integration, continuous testing, and continuous delivery. Integrating Cloud Sandboxes into your CI/CD pipeline will help you to speed up product release cycles without sacrificing quality.
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
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading"><strong>Angsana Testing for DevOps Automation and CI/CD</strong></h2>
          <hr class="line">
        </div>
      </div>
      <div class="row pt-5">
          <div class="col-12 col-sm-6 col-md-2 text-center">
              <img src="{{ asset('/images/content/dev1.png') }}" class="img-fluid">
          </div>
          <div class="col-12 col-sm-6 col-md-4">
              <h4 class="text-primary"><strong>INTEGRATE WITH CI/CD AND RELEASE AUTOMATION TOOLS</strong></h4>
              <p>
                  Our software integrates with CI/CD and release automation tools to allow them to easily deploy complex, full-stack, hybrid app environments for each stage of the application release pipeline ensuring that you can mimic production early and often, dramatically reduce your release cycles, and eliminate costs associated with managing dev/test infrastructure.
              </p>
          </div>
          <div class="col-12 col-sm-6 col-md-2 text-center">
              <img src="{{ asset('/images/content/dev2.png') }}" class="img-fluid">
          </div>
          <div class="col-12 col-sm-6 col-md-4">
              <h4 class="text-primary"><strong>DEPLOY FULL STACK APP ENVIRONMENTS</strong></h4>
              <p>
                  Across all the stages of your release pipeline, Our enables you to automatically replicate the production infrastructure – physical, virtual, and cloud – as well as all of the key elements of the environment that are essential for testing, including production data, virtual services, test tools and load generators.
              </p>
          </div>
      </div>
      <div class="row pt-5">
          <div class="col-12 col-sm-6 col-md-2 text-center">
              <img src="{{ asset('/images/content/dev3.png') }}" class="img-fluid">
          </div>
          <div class="col-12 col-sm-6 col-md-4">
              <h4 class="text-primary"><strong>RAPID ENVIRONMENT MODELLING</strong></h4>
              <p>
                  Our visual based application environment modelling tool allows your architects and admins to quickly and easily create application sandbox blueprints simply by dragging and dropping application and infrastructure components into a sandbox canvas. Publish those blueprints for consumption by your teams and CI/CD tools.
              </p>
          </div>
          <div class="col-12 col-sm-6 col-md-2 text-center">
              <img src="{{ asset('/images/content/dev4.png') }}" class="img-fluid">
          </div>
          <div class="col-12 col-sm-6 col-md-4">
              <h4 class="text-primary"><strong>DASHBOARDS AND REPORTING FOR DEVOPS TEAMS</strong></h4>
              <p>
                  We are designed to provide resource sharing for entire teams of developers and testers. It provides a complete Business Intelligence database with results of all Sandbox usage. Managers have access to a comprehensive set of reports and dashboards summarizing activity in dev/test labs for showback and planning.
              </p>
          </div>
      </div>
    </div>
  </section>
@endsection