@extends('front.layouts.app')

@section('title')
Content not found
@endsection

@section('meta_description')
INTECH(Indeepa college of technology) has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.
@endsection

@section('keywords')
404
@endsection

@section('content')

<div class="inner-banner-full text-white overflow-hidden">
    <canvas class="w-100" data-granim="#834d9b,#0091d5,#1cd8d2,#004f98"></canvas>
    <img class="banner-img" src="{{ asset('images/courses-banner.jpg') }}" alt="">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>Page Not Found!</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
  <section class="section" id="section-open-positions">
    <div class="main-div" style=" text-align: center; padding: 2% 0; color: rgb(68, 68, 68); font: normal 14px/20px Arial, Helvetica, sans-serif; ">
        <p class="para-1" style=" font-size: 150px; line-height: 150px; font-weight: bold; margin: 0px;">404</p>
        <p class="para-2" style="margin-top: 20px; font-size: 30px; margin: 0px;">Not Found</p>
        <p class="para-3">The resource requested could not be found on this server!</p>
        <a href="{{ URL::to('/' ); }}" title="Click to visit">Return to the homepage</a>
    </div>
  </section>

@endsection

@section('scripts')

@endsection
