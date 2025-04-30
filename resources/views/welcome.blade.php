@extends('front.layouts.app')

@section('title')
{{ $companyDetails->company_name }} | Discover the World With Study
@endsection

@section('meta_description')
{{ $companyDetails->description }}
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')
<!-- Revolution Slider -->
<section class="rev_slider">
            <div class="rev_slider_wrapper">
                <div id="rev_slider_1" class="rev_slider" data-version="5.4.5">
                    <ul>
                        <!-- MINIMUM SLIDE STRUCTURE -->
                        <li data-transition="random" data-masterspeed="1000">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('front-modified/images/slider/1_1.jpg') }}" alt="Sky" class="rev-slidebg">
                            <div class="tp-caption tp-resizeme normalWraping layer_1 hidden-sm" 

                                 data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-x="center" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['-124', '-110', '-100', '-50']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-fontsize="20"
                                 data-lineheight="36"
                                 data-fontweight="400"
                                 data-letterspacing="2"
                                 data-color="#FFF"
                                 data-textAlign="center"
                                 >WELCOME TO {{ $companyDetails->company_name }}</div>
                            <div class="tp-caption tp-resizeme normalWraping layer_2 hidden-sm" 

                                 data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                                 data-x="center" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['12', '20', '10', '25']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-word-wrap="['normal']"
                                 data-white-break="['break-all']"
                                 data-fontsize="['110', '70', '60', '40']"
                                 data-lineheight="['112', '80', '65', '50']"
                                 data-fontweight="700"
                                 data-letterspacing="['4.4', '4.4', '2', '1']"
                                 data-color="#FFF"
                                 data-textAlign="center"
                                 >Your Revolution<br> Starts Here.</div>
                            <div class="tp-caption tp-resizeme normalWraping layer_3 hidden-sm"

                                 data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-x="center"
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['212', '200', '150', '140']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-fontsize="16"
                                 data-lineheight=""
                                 data-fontweight="400"
                                 data-textAlign="center"
                                 ><a href="{{ URL::to('all-courses') }}" class="common_btn"><span>Read More</span></a></div>
                        </li>
                        <li data-transition="random" data-masterspeed="1000">
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{ asset('front-modified/images/slider/1_2.jpg') }}" alt="Sky" class="rev-slidebg">
                            <div class="tp-caption tp-resizeme normalWraping layer_1 hidden-sm" 

                                 data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-x="center" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['-124', '-110', '-100', '-50']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-fontsize="20"
                                 data-lineheight="36"
                                 data-fontweight="400"
                                 data-letterspacing="2"
                                 data-color="#FFF"
                                 data-textAlign="center"
                                 >WELCOME TO {{ $companyDetails->company_name }}</div>
                            <div class="tp-caption tp-resizeme normalWraping layer_2 hidden-sm" 

                                 data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                                 data-x="center" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['12', '20', '10', '25']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-word-wrap="['normal']"
                                 data-white-break="['break-all']"
                                 data-fontsize="['110', '70', '60', '40']"
                                 data-lineheight="['112', '80', '65', '50']"
                                 data-fontweight="700"
                                 data-letterspacing="['4.4', '4.4', '2', '1']"
                                 data-color="#FFF"
                                 data-textAlign="center"
                                 >Your Revolution<br> Starts Here.</div>
                            <div class="tp-caption tp-resizeme normalWraping layer_3 hidden-sm"

                                 data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-x="center"
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['212', '200', '150', '140']" 
                                 data-width="100%"
                                 data-height="['auto]"
                                 data-whitesapce="['normal']"
                                 data-fontsize="16"
                                 data-lineheight=""
                                 data-fontweight="400"
                                 data-textAlign="center"
                                 ><a href="{{ URL::to('all-courses') }}" class="common_btn"><span>Read More</span></a></div>
                        </li>
                    </ul><!-- END SLIDES LIST -->
                </div>
            </div>
        </section>
        <!-- Revolution Slider -->

         <!-- Ready Section -->
         <section class="commonSection ready_2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        {!! App\Http\Controllers\WelcomeController::renderBlock(1); !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Ready Section -->

        <!-- Services Section -->
        <section class="service_section_2 commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- <h4 class="sub_title">welcome to smart meipaly web agency</h4>
                        <h2 class="sec_title">We design digital products that<br> help grow businesses.</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service<br> while offering our employees the best training.
                        </p> -->
                        {!! App\Http\Controllers\WelcomeController::renderBlock(2); !!}
                        <br />
                    </div>
                </div>
                <div class="row d-sm-flex-wrap">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="icon_box_2 text-center">
                            {!! App\Http\Controllers\WelcomeController::renderBlock(3); !!}
                            <div class="iconWrap">
                              <img src="{{ asset('front-modified/images/icons/graphic-design.png') }}" class="img-responsive d-inline-block" alt="graphic design">
                            </div>
                            <a class="learnM" href="{{ URL::to('all-courses') }}">discover more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="icon_box_2 text-center">
                            {!! App\Http\Controllers\WelcomeController::renderBlock(4); !!}
                            <div class="iconWrap">
                              <img src="{{ asset('front-modified/images/icons/video-editing.png') }}" class="img-responsive d-inline-block" alt="video editing">
                            </div>
                            <a class="learnM" href="{{ URL::to('all-courses') }}">discover more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mx-sm-auto">
                        <div class="icon_box_2 text-center">
                            {!! App\Http\Controllers\WelcomeController::renderBlock(5); !!}
                            <div class="iconWrap">
                              <img src="{{ asset('front-modified/images/icons/3d-modeling.png') }}" class="img-responsive d-inline-block" alt="3d modeling">
                            </div>
                            <a class="learnM" href="{{ URL::to('all-courses') }}">discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->

        <!-- About Agency Section -->
        <!-- <section class="commonSection ab_agency">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 PR_79">
                        <h4 class="sub_title">welcom to smart meipaly web agency</h4>
                        <h2 class="sec_title MB_45">We are the Best Website agency in The World</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while offering our employees the best training. 
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the
                            industry's standard dummy text ever since the 1500s.
                        </p>
                        <a class="common_btn red_bg" href="#"><span>Learn More</span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="ab_img1">
                            <img src="{{ asset('front-modified/images/home_1/2.jpg') }}" alt=""/>
                        </div>
                        <div class="ab_img2">
                            <img src="{{ asset('front-modified/images/home_1/1.jpg') }}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- About Agency Section -->
        <!-- What We Do Section -->
        <section class="commonSection what_wed" style="background: #f4f4f4;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      {!! App\Http\Controllers\WelcomeController::renderBlock(6); !!}
                      <br />
                      {!! App\Http\Controllers\WelcomeController::renderBlock(7); !!}
                      <!-- <div class="serviceArea">
                        <ul>
                          <li><i class="fa fa-check-square"></i>Computers provided for each student</li>
                          <li><i class="fa fa-check-square"></i>Internet facilities and Air Conditioned lecture halls</li>
                          <li><i class="fa fa-check-square"></i>Unlimited time for practical training</li>
                          <li><i class="fa fa-check-square"></i>Industry-focused curriculum</li>
                          <li><i class="fa fa-check-square"></i>Registered in the tertiary and vocational education commission</li>
                          <li><i class="fa fa-check-square"></i>Faculty panel completed with university professors and industry professionals</li>
                          <li><i class="fa fa-check-square"></i>Basic knowledge not required to enroll in courses</li>
                          <li><i class="fa fa-check-square"></i>Ability to pay course fees in installments</li>
                        </ul>
                      </div> -->
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="videoWrap">
                            <img src="{{ asset('front-modified/images/home_1/3.jpg') }}" alt="">
                            <div class="play_video">
                                <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i class="fa fa-play"></i></a>
                                <h2>Watch Video</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5 col-md-4">
                        <h4 class="sub_title">don’t miss out our latest updates</h4>
                        <h2 class="sec_title">Subscribe us</h2>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-8">
                        <form action="#" method="post" class="subscribefrom">
                            <input type="email" placeholder="Enter your email" name="email">
                            <button class="common_btn red_bg" type="submit" name="submit"><span>Subscribe now</span></button>
                        </form>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- What We Do Section -->

        <!-- FunFact Section -->
        <section class="commonSection funfact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 noPadding BR">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="100" class="timer"><span class="countSpan">100</span></h1>
                            <h3>Students</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 noPadding BR">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="{{ $courses_count }}" class="timer"><span class="countSpan"></span>{{ $courses_count }}</h1>
                            <h3>Courses</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 noPadding">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="100" class="timer"><span class="countSpan">100</span></h1>
                            <h3>SATISFACTION(%)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FunFact Section -->

        <!-- Trust Clients Section -->
        <section class="commonSection trustClient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="CL_content">
                            <img src="{{ asset('front-modified/images/home_1/4.jpg') }}" alt="">
                            <div class="abc_inner">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5 col-md-5">
                                    </div>
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <div class="abci_content">
                                          {!! App\Http\Controllers\WelcomeController::renderBlock(11); !!}
                                            <a class="common_btn red_bg" href="{{ URL::to('/page/about') }}"><span>Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trust Clients Section -->

        <!-- Blog Section -->
        <!-- <section class="commonSection blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">our news & articles</h4>
                        <h2 class="sec_title">latest blog posts</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="latestBlogItem">
                            <div class="lbi_thumb">
                                <img src="{{ asset('front-modified/images/blog/1.jpg') }}" alt="">
                            </div>
                            <div class="lbi_details">
                                <a href="#" class="lbid_date">26 NOV</a>
                                <h2><a href="blog_single.html">basic rules of running web  agency business</a></h2>
                                <a class="learnM" href="blog_single.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="latestBlogItem">
                            <div class="lbi_thumb">
                                <img src="{{ asset('front-modified/images/blog/2.jpg') }}" alt="">
                            </div>
                            <div class="lbi_details">
                                <a href="#" class="lbid_date">20 NOV</a>
                                <h2><a href="blog_single.html">Become the best sale marketer</a></h2>
                                <a class="learnM" href="blog_single.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs"></div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="latestBlogItem">
                            <div class="lbi_thumb">
                                <img src="{{ asset('front-modified/images/blog/3.jpg') }}" alt="">
                            </div>
                            <div class="lbi_details">
                                <a href="#" class="lbid_date">16 NOV</a>
                                <h2><a href="blog_single.html">Introducing latest mopaly features</a></h2>
                                <a class="learnM" href="blog_single.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Blog Section -->

@endsection

@section('css')
<style>


@media (min-width: 640px) and (max-width: 1199px) {
  
}
@media (max-width: 640px) {
  
}
</style>
@endsection

@section('scripts')
<script>
  $('.mainmenu ul li:first-child').addClass('active');
</script>
@endsection
