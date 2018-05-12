@extends('layouts.app_public')

@section('header')
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>
                    {{ $home[0]->title }}
                  </strong>
              </h1>
              <hr class="line">
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                  {{ $home[0]->description }}
              </p>
            </div>
          </div>
        </div>
    </header>
@endsection
@section('content')
{!!htmlspecialchars_decode($home[0]->content, ENT_QUOTES)!!}
    <section id="team">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading"><strong>Our Client & Partnership</strong></h2>
                <hr class="line my-4">
              </div>
          </div>
      </div>
    </section>
@endsection