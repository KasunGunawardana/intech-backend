@extends('front.layouts.app')

@section('title')
{{ $page->meta_title }}
@endsection

@section('meta_description')
{{ $page->meta_description }}
@endsection

@section('keywords')
{{ $page->keywords }}
@endsection

@section('content')
  <!-- Page Banner -->
  <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4>{{ $page->name }}</h4>
                            <h1>{{ $page->heading }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Page Banner -->
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
  @if ($page->contained_box == null )

  {!! $page->content !!} 

  @else

      @if ($page->url == 'about')

      <section class="commonSection ab_agency">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 PR_79">
                          {!! $page->content !!} 
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="ab_img1">
                                <img src="{{ asset('front-modified/images/pages/about1.jpg') }}" alt=""/>
                            </div>
                            <div class="ab_img2">
                                <img src="{{ asset('front-modified/images/pages/about2.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Details Section -->
        <section class="commonSection service_detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <aside class="widget categories">
                            <div class="meipaly_services_help">
                                {!! App\Http\Controllers\WelcomeController::renderBlock(9); !!}
                                <!-- <h4>Our Vision</h4>
                                <p>To be the most trusted and value added education partner in Sri Lanka.</p> -->
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <aside class="widget categories">
                            <div class="meipaly_categorie_widget">
                                {!! App\Http\Controllers\WelcomeController::renderBlock(10); !!}
                                <!-- <h4>Our Mission</h4>
                                <p>To be the most trusted and value added education partner in Sri Lanka.</p> -->
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Details Section -->

    @else

    <section class="commonSection ab_agency">
                <div class="container">
                    <div class="row">
                        <div class="col-12 PR_79">
                          {!! $page->content !!} 
                        </div>
                    </div>
                </div>
            </section>
      
  @endif
  @endif

  @if ($page->url == 'about')

  <!-- Team Section -->
  <section class="commonSection team"  style="background: #f4f4f4;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">meet the team</h4>
                        <h2 class="sec_title">Our Leading Instructors</h2>
                        <!-- <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="team_slider">
            @foreach ($instructors as $instructor)
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="{{ asset('storage') . '/' . $instructor->image }}" alt="{{ $instructor->name }}">
                        <div class="tm_overlay">
                            <div class="team_social">
                              <div class="instructor-description">
                                {!! $instructor->description !!}
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>{{ $instructor->name }}</h5>
                        <h6>{{ $instructor->title }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Team Section -->
      
  @endif

@endsection

@section('scripts')
<script>
 $('.mainmenu ul').find('a[href^="{{ url()->current(); }}"]').parent().addClass('active');
</script>
@endsection
