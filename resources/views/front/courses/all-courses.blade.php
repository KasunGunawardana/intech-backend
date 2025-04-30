@extends('front.layouts.app')

@section('title')
Courses | {{ $companyDetails->company_name }}
@endsection

@section('meta_description')
{{ $companyDetails->company_name }} has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')

<!-- Page Banner -->
<section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4>BOOST UP YOUR SKILLS</h4>
                            <h1>Courses</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->

  <section class="commonSection porfolioPage">
            <div class="container">
            @if ( $course_types->count() > 1)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="folio_mixing">
                            <ul>
                                <li class="filter active" data-filter="all">All</li>  
                                @foreach ($course_types as $course_type)
                                    <li class="filter" data-filter="{{ remove_spaces($course_type->name) }}">{{ $course_type->name }}</li>  
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row" id="Grid">
                    <div class="custom">
                    @if ($courses->count() > 0)
                      @foreach ($courses as $course)
                      <div class="col-lg-4 col-sm-6 col-md-4 mix logos {{ remove_spaces($course->course_type->name) }}">
                        <a class="p-2 card-img-link" href="{{ URL::to('course/' . $course->url ); }}">
                            <div class="course-card latestBlogItem">
                              <div class="course-img-wrapper lbi_thumb">
                                <div style="background-image: url({{  asset('storage') .'/'. $course->image }})">
                                  <img class="image-mask w-100%" src="{{  asset('front-modified/images/course-image-mask.png') }}" alt="{{ $course->name }}">
                                </div>
                                <!-- <span class="duration">{{ $course->duration }}</span> -->
                              </div>
                              <div class="lbi_details">
                                <div>
                                <span class="lbid_date">{{ $course->duration }}</span>
                                  <a href="{{ URL::to('course/' . $course->url ); }}"><h4>{{ $course->name }}</h4></a>
                                  <p><?php str_limit($course->meta_description, 110); ?></p>
                                  <a class="learnM" href="{{ URL::to('course/' . $course->url ); }}">Learn More</a>
                                </div>
                              </div>
                            </div>
                        </a>
                        </div>
                      @endforeach
                  @else
                  <div class="uk-alert-danger" uk-alert>
                      <p>There are no Courses available</p>
                  </div>
                  @endif
                </div>
            </div>
        </section>
        <!-- Portfolio Section -->

@endsection

@section('scripts')
<script>
  $('.mainmenu ul').find('a[href^="{{ url()->current(); }}"]').parent().addClass('active');
</script>
@endsection
