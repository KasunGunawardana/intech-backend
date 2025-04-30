@extends('front.layouts.app')

@section('title')
Courses | Intech | Reinvent Your Future
@endsection

@section('meta_description')
INTECH(Indeepa college of technology) has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')

<div class="inner-banner-full text-white overflow-hidden">
    <canvas class="w-100" data-granim="#834d9b,#0091d5,#1cd8d2,#004f98"></canvas>
    <img class="banner-img" src="{{ asset('front/images/courses-banner.jpg') }}" alt="Courses">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>Courses</h1>
          <h3>BOOST UP YOUR SKILLS</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
<div class="intro-full layout overflow-hidden">
  <div class="uk-container uk-text-center">
    <div data-provide="shuffle">
      <ul class="nav nav-center nav-bold nav-uppercase nav-slash mb-7" data-shuffle="filter" uk-scrollspy="target: li;cls: uk-animation-slide-bottom; delay: 300">
        <li class="nav-item">
          <a class="nav-link active" href="#" data-shuffle="button">All Courses</a>
          {{-- <div data-uk-tooltip="Click to filter"></div> --}}
        </li>
        @foreach ($course_types as $course_type)
            <li class="nav-item">
                <a class="nav-link" href="#" data-shuffle="button" data-group="{{ remove_spaces($course_type->name) }}">{{ $course_type->name }}</a>
            </li>
        @endforeach
      </ul>


      <div class="row gap-y gap-2" data-shuffle="list" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300">

        @if ($courses->count() > 0)
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-shuffle="item" data-groups="{{ remove_spaces($course->course_type->name) }}">
                <div class="card shadow-1 course-card hover-shadow-6">
                <a class="p-2 card-img-link" href="{{ URL::to('course/' . $course->url ); }}">
                    <div class="course-img-wrapper">
                      <div style="background-image: url({{  asset('storage') .'/'. $course->image }})">
                        <img class="image-mask w-100%" src="{{  asset('front/images/course-image-mask.png') }}" alt="{{ $course->name }}">
                      </div>
                      {{-- <img class="card-img-top" src="{{  asset('storage') .'/'. $course->image }}" alt="{{ $course->name }}"> --}}
                      <span class="duration">{{ $course->duration }}</span>
                    </div>
                </a>
                <div class="card-body uk-text-left">
                    <div>
                    <a href="{{ URL::to('course/' . $course->url ); }}"><h4>{{ $course->name }}</h4></a>
                    <p><?php str_limit($course->meta_description, 110); ?></p>
                    </div>
                    {{-- <div class="">
                    <h6 class="mb-3">
                        <span class="small" href="#"><img class="avatar avatar-xxs mr-1" src="{{  asset('storage') .'/'. $course->instructor->image }}" alt="{{ $course->instructor->name }}"> {{  $course->instructor->name }}</span>
                    </h6>
                    </div>
                    <div class="flexbox">
                    <div class="rating mb-3">
                        <label class="fas fa-star"></label>
                        <label class="fas fa-star"></label>
                        <label class="fas fa-star"></label>
                        <label class="fas fa-star"></label>
                        <label class="fas fa-star"></label>
                    </div>
                    <span class="text-inherit small-2">Rs: {{ $course->price }}</span>
                    </div> --}}
                </div>
                </div>
            </div>
            @endforeach
        @else
        <div class="uk-alert-danger" uk-alert>
            <p>There are no Courses available</p>
        </div>
        @endif

        

      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $('ul.uk-navbar-nav').find('a[href^="{{ url()->current(); }}"]').addClass('uk-active');
</script>
@endsection
