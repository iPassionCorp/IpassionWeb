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
             @if((!empty($home[0]->description)))
              <hr class="line">
             @endif
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
{!! $home[0]->content !!}
@if($clients->count() > 0)
    <section id="clients">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading"><strong>Our Client & Partnership</strong></h2>
                <hr class="line my-4">
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
                <div id="clients-carousel">
                    @foreach($clients as $item)
                    <div class="slide">
                        <img src="{{asset('/storage/clients/'.$item->image)}}" class="w-100">
                        <p class="pt-2 text-center"><strong>{{$item->name}}</strong></p>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
      </div>
    </section>
@else

@endif
@endsection

@section('js')
<link rel="stylesheet" type="text/css" href="http://www.imancreative.com/iq-reviewer/assets/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="http://www.imancreative.com/iq-reviewer/assets/lib/slick/slick-theme.css">
<script type="text/javascript" src="http://www.imancreative.com/iq-reviewer/assets/lib/slick/slick.min.js"></script>

<script>
    $( document ).ready(function() {
            $('#clients-carousel').slick({
                autoplay:true,
                autoplaySpeed:2000,
                dots: false,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    }
                ]
            });
    });
</script>
@endsection