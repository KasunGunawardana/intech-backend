@extends('front.layouts.app')

@section('title')
{{ $course->meta_title }}
@endsection

@section('meta_description')
{{ $course->meta_description }}
@endsection

@section('keywords')
{{ $course->keywords }}
@endsection

@section('content')
<div class="inner-banner-full text-white overflow-hidden">
    <canvas class="w-100" data-granim="#834d9b,#0091d5,#1cd8d2,#004f98"></canvas>
    <img class="banner-img" src="{{ asset('images/courses-banner.jpg') }}" alt="">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>{{ $course->heading }}</h1>
          <h3>{{ $course->sub_heading }}</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
  <section class="section" id="section-open-positions">
    <div class="container">
        <div>
          <h2 class="special">{{ $course->name }}</h2>
          <br class="d-none d-sm-block">
        </div>
      <div class="row">
        <div class="col-md-6 align-self-center pb-7 overflow-hidden">
          <div uk-scrollspy="target: > h2,p; cls: uk-animation-slide-left; delay: 300">
            <h2>Brief Description</h2>
            <p>{{ $course->meta_description }}</p>
          </div>

          {{-- <div class="row mt-5">
            <div class="col-12" uk-scrollspy="target: > h4; cls: uk-animation-slide-left; delay: 300">
              <h4 class="mb-3">This course includes:</h4>
            </div>
            <div class="col-6 mb-3 col-xs-12">
              <ul class="contact-detail mt-2" uk-scrollspy="target: > li; cls: uk-animation-slide-left; delay: 300">
                <li><span uk-icon="icon: file-pdf; ratio: 1"></span> &nbsp;Certificate of completion</li>
                <li><span uk-icon="icon: file-text; ratio: 1"></span> &nbsp;Assignments</li>
              </ul>
            </div>

            <div class="col-6 mb-3 col-xs-12">
              <ul class="contact-detail mt-2" uk-scrollspy="target: > li; cls: uk-animation-slide-left; delay: 300">
                <li><span uk-icon="icon: check; ratio: 1"></span> &nbsp;Money-Back Guarantee</li>
                <li><span uk-icon="icon: future; ratio: 1"></span> &nbsp;Full lifetime access</li>
              </ul>
            </div>
          </div> --}}

          {{-- <div class="row mt-5">
            <div class="col-12" uk-scrollspy="target: > h4; cls: uk-animation-slide-left; delay: 300">
              <h4 class="mb-3">Instructor</h4>
            </div>
            <div class="col-12 mb-3 col-xs-12">
              <h6 class="mb-3">
                <span class="small" href="#"><img class="avatar avatar-xxs mr-1" src="{{  asset('storage') .'/'. $course->instructor->image }}" alt="{{ $course->instructor->name }}"> {{ $course->instructor->name }}</span>
              </h6>
            </div>
          </div> --}}

        </div>

        <div class="col-md-6 text-center order-md-first">
          <img class="mr-40 w-100" src="
          @if($course->image)
          {{ asset('storage') .'/'. $course->image }}
          @else
          {{ asset('images/default.jpg') }}
          @endif
          " alt="{{ $course->name }}">
        </div>

      </div>
    </div>
    <br>
    <div class="container">
      <div class="row mt-7 uk-text-center" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 300">
        <div class="col-md-3 mb-3 col-xs-12">
          <p class="text-danger lead-7"><span uk-icon="icon: clock; ratio: 2"></span></p>
          <h5>Course Duration</h5>
          <p>{{ $course->duration }}</p>
        </div>

        <div class="col-md-3 mb-3 col-xs-12">
          <p class="text-danger lead-7"><span uk-icon="icon: credit-card; ratio: 2"></span></p>
          <h5>Course Price</h5>
          <p>Rs: {{ $course->price }}</p>
        </div>
        <div class="col-md-3 mb-3 col-xs-12">
          <p class="text-danger lead-7"><span uk-icon="icon: bookmark; ratio: 2"></span></p>
          <h5>Course Level</h5>
          <p>{{ ($course->level) ? $course->level : $course->course_type->name }}</p>
        </div>

        <div class="col-md-3 mb-3 col-xs-12">
          <p class="text-danger lead-7"><span uk-icon="icon: comments; ratio: 2"></span></p>
          <h5>Medium</h5>
          <p>{{ ($course->medium) ? $course->medium : 'Sinhala / English' }}</p>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <header class="section-header" uk-scrollspy="target: > h2,hr; cls: uk-animation-slide-bottom; delay: 300">
        <h2 class="mt-0 mt-sm-3">Course Details</h2>
        <hr>
      </header>
      <div uk-scrollspy="target: > p; cls: uk-animation-slide-bottom; delay: 300">
        {!! $course->content !!}
      </div>
      <br>


      <div class="accordion accordion-connected shadow-5" id="accordion-job" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 300">

        <div class="card">
          <h6 class="card-title">
            <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-1">
              <strong class="mr-auto">Syllabus</strong>
              <span uk-icon="icon: thumbnails"></span>
            </a>
          </h6>

          <div id="collapse-job-1" class="collapse" data-parent="#accordion-job">
            <div class="card-body syllabus">{!! $course->syllabus !!}</div>
          </div>
        </div>


        <div class="card">
          <h6 class="card-title">
            <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-2">
              <strong class="mr-auto">Entry requirements</strong>
              <span uk-icon="icon: thumbnails"></span>
            </a>
          </h6>

          <div id="collapse-job-2" class="collapse" data-parent="#accordion-job">
            <div class="card-body">
                {!! $course->requirements !!}
            </div>
          </div>
        </div>

      </div>


    </div>
    <div class="mt-6">
      <p class="text-center"><a class="btn btn-lg btn-primary" href="https://lms.intech.edu.lk/" target="_blank">Apply Now</a></p>
    </div>
  </section>

@endsection

@section('scripts')

@endsection
