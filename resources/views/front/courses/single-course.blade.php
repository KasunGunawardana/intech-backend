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
  <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content single_course text-center">
                            <h4>{{ $course->sub_heading }}</h4>
                            <h1>{{ $course->heading }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->

  <section class="commonSection blogDetails courseDetails">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="single_blog">
                            <div class="blog_thumb">
                            <img class="" src="@if($course->image)
                                {{ asset('storage') .'/'. $course->image }}
                                @else
                                {{ asset('images/default.jpg') }}
                                @endif" alt="{{ $course->name }}">
                            </div>
                            <div class="blog_headings">
                                <h2>{{ $course->name }}</h2>
                                <p class="blog_metas">
                                    <span>By {{ $course->instructor->name }}</span>
                                </p>
                            </div>
                            <div class="blog_details">
                              {{ $course->meta_description }}
                              <hr>
                              <h3 class="">Course Details</h3>
                              {!! $course->content !!}
                              <hr>
                            <h3>Syllabus</h3>
                            <div>{!! $course->syllabus !!}</div>
                            <hr>
                            <h3>Entry requirements</h3>
                            <div>{!! $course->requirements !!}</div>
                            </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-sm-4 sidebar sticky">
                        <aside class="widget recent_posts">
                            <div class="meipaly_post_widget">
                                <div class="mpw_item">
                                  <h5>Course Duration</h5>
                                  <p>{{ $course->duration }}</p>
                                </div>
                                <div class="mpw_item">
                                  <h5>Course Price</h5>
                                  <p>Rs: {{ $course->price }}</p>
                                </div>
                                <div class="mpw_item">
                                  <h5>Course Level</h5>
                                  <p>{{ ($course->level) ? $course->level : $course->course_type->name }}</p>
                                </div>
                                <div class="mpw_item">
                                  <h5>Medium</h5>
                                  <p>{{ ($course->medium) ? $course->medium : 'Sinhala / English' }}</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Detail Section -->


        <!-- <section class="commonSection" style="padding-top: 5px">
            <div class="container">
                <div id="tabs">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


@endsection

@section('scripts')

@endsection
