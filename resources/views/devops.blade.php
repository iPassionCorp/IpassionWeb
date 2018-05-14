@extends('layouts.app_public')
@section('title', 'Devops')
@section('header')
    <header class="content-head text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>{{ $devops[0]->title }}</strong>
              </h1>
             @if((!empty($devops[0]->description)))
              <hr class="line">
             @endif
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">
                {{ $devops[0]->description }}
              </p>
            </div>
          </div>
        </div>
      </header>
@endsection

@section('content')
{!! $devops[0]->content !!}
@endsection