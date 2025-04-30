<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from layerdrops.com/meipaly/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 09:02:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @yield('title')
    </title>
    <meta name="keywords" content="
    @yield('keywords')
    " >
    <meta name="description" content="
    @yield('meta_description')
    " >

        <!-- Include All CSS here-->
        <link rel="stylesheet" href="{{ asset('front-modified/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/owl.carousel.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/owl.theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/animate.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/magnific-popup.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/settings.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/slick.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/icons.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/preset.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/presets/color1.css') }}" id="colorChange"/>
        <link rel="stylesheet" href="{{ asset('front-modified/css/custom.css') }}"/>

        @yield('css')
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel='shortcut icon' type='image/x-icon' href="{{ asset('front-modified/images/favicon.ico') }}" />

        <style>
            canvas#canv {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }
            .santa {
                position: fixed;
                bottom: 30px;
            }
            a, p, h1, h2, h3, h4, h5, h6 {
                position: relative;
                z-index: 5;
            }
        </style>
    </head>
    <body>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-circus la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        @if ($christmas_effect->visibility == TRUE)
    <canvas id='canv'> </canvas>
    @endif

        <!-- Header 01 -->
        <header class="header_01" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="logo">
                            <a href="{{ URL::to('') }}"><img src="{{ asset('front-modified/images/logo.png') }}" alt="{{ $companyDetails->company_name }}"/></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-8">
                        <nav class="mainmenu text-right">
                            <ul>
                                <li>
                                    <a href="{{ URL::to('') }}">home</a>
                                </li>
                                @foreach ($showNavigationList as $showNavigationItem)
                                <li><a href="{{ URL::to('/') . '/page/' . $showNavigationItem->url }}">{{ $showNavigationItem->name }}</a></li>
                                @endforeach
                                <li><a href="{{ URL::to('all-courses') }}">All Courses</a></li>
                                @if ($blog_content->show_nav)
                                <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                                @endif
                                @if ($gallery_content->show_nav)
                                <li><a href="{{ URL::to('galleries') }}">Gallery</a></li>
                                @endif
                                
                                <li style="padding-right: 0;"><a href="{{ URL::to('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-md-1 col-xs-12">
                        <div class="navigator text-right">
                            <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass" style="text-shadow: 0 0 1px #fff;"></i></a>
                            <!-- <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a> -->
                            <a id="open-overlay-nav" class="menu hamburger hidden-md hidden-lg" href="javascript:void(0);"><i class="mei-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header 01 -->

        <!-- Search From -->
        <div class="searchFixed popupBG">
            <div class="container-fluid">
                <a href="#" id="sfCloser" class="sfCloser"></a>
                <div class="searchForms">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <!-- <form method="post" action="#">
                                    <input type="text" name="s" class="searchField" placeholder="Search here..."/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form> -->
                                <div>
                                    <div style="position: relative;">
                                        <!-- <span class="uk-form-icon" data-uk-icon="icon: search"></span> -->
                                        <input class="searchField" autocomplete="off" id="searchCourses" onfocusout="
                                        ()" type="text" placeholder="Search your course here...">
                                    </div>
                                    <div id="coursesDiv"></div>
                                    {{ csrf_field() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search From -->

        <!-- PopUP Menu -->
        <div class="popup popup__menu">
            <a href="#" id="close-popup" class="close-popup"></a>
            <div class="container mobileContainer">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="logo2">
                            <a href="{{ URL::to('') }}"><img src="{{ asset('front-modified/images/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                    <li>
                                        <a href="{{ URL::to('') }}">home</a>
                                    </li>
                                    @foreach ($showNavigationList as $showNavigationItem)
                                    <li><a href="{{ URL::to('/') . '/page/' . $showNavigationItem->url }}">{{ $showNavigationItem->name }}</a></li>
                                    @endforeach
                                    <li><a href="{{ URL::to('all-courses') }}">All Courses</a></li>
                                    @if ($blog_content->show_nav)
                                    <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                                    @endif
                                    @if ($gallery_content->show_nav)
                                    <li><a href="{{ URL::to('galleries') }}">Gallery</a></li>
                                    @endif
                                    
                                    <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts text-left">
                            <li>Phone: <a href="tel:{{ trim_spaces($companyDetails->telephone) }}">{{ $companyDetails->telephone }}</a></li>
                            <li>Mobile: <a href="tel:{{ trim_spaces($companyDetails->mobile) }}">{{ $companyDetails->mobile }}</a></li>
                            <li>Email: <a href="mailto:{{ $companyDetails->email }}">{{ $companyDetails->email }}</a></li>
                            <!-- <li>{{ $companyDetails->address1 }}, {{ $companyDetails->address2 }}, {{ $companyDetails->city }}, {{ $companyDetails->country }}</li> -->
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="popUp_social text-right">
                            <ul>
                                <li><a href="{{ isset($companyDetails->instagram) ? $companyDetails->instagram : '#' }}" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                <li><a href="{{ isset($companyDetails->facebook) ? $companyDetails->facebook : '#' }}" target="_blank"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li><a href="{{ isset($companyDetails->youtube) ? $companyDetails->youtube : '#' }}" target="_blank"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PopUP Menu -->

        @yield('content')

        <!-- Footer Section -->
        <footer class="footer_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 col-md-5">
                        <aside class="widget aboutwidget">
                            <a href="{{ URL::to('') }}"><img src="{{ asset('front-modified/images/logo.png') }}" alt="{{ $companyDetails->company_name }} "></a>
                            {!! App\Http\Controllers\WelcomeController::renderBlock(8); !!}
                        </aside>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <aside class="widget contact_widgets">
                            <h3 class="widget_title">contact</h3>
                            <!-- <p>
                            {{ $companyDetails->address1 }}, {{ $companyDetails->address2 }},<br>
                  {{ $companyDetails->city }}, {{ $companyDetails->country }}.
                            </p> -->
                            <p>Phone: <a href="tel:{{ trim_spaces($companyDetails->telephone) }}">{{ $companyDetails->telephone }}</a></p>
                            <p>Mobile: <a href="tel:{{ trim_spaces($companyDetails->mobile) }}">{{ $companyDetails->mobile }}</a></p>
                            <p>Email: <a href="mailto:{{ $companyDetails->email }}">{{ $companyDetails->email }}</a></p>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-2 col-md-3">
                        <aside class="widget social_widget">
                            <h3 class="widget_title">social</h3>
                            <ul>
                                <li><a href="{{ isset($companyDetails->instagram) ? $companyDetails->instagram : '#' }}" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                <li><a href="{{ isset($companyDetails->facebook) ? $companyDetails->facebook : '#' }}" target="_blank"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li><a href="{{ isset($companyDetails->youtube) ? $companyDetails->youtube : '#' }}" target="_blank"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="copyright">
                            <p>Copyright © <?php echo date("Y"); ?> {{ $companyDetails->company_name }} - All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section -->

        <!-- Bact To To -->
        <a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>
        <!-- Bact To To -->

        <!-- Include All JS -->
        <script src="{{ asset('front-modified/js/jquery.js') }}"></script>
        <script src="{{ asset('front-modified/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/modernizr.custom.js') }}"></script>
        <script src="{{ asset('front-modified/js/gmaps.js') }}"></script>
        <script src="{{ asset('front-modified/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/jquery.themepunch.tools.min.js') }}"></script>
        <!-- Rev slider Add on Start -->
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('front-modified/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- Rev slider Add on End -->
        <script src="{{ asset('front-modified/js/dlmenu.js') }}"></script>
        <script src="{{ asset('front-modified/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('front-modified/js/mixer.js') }}"></script>
        <script src="{{ asset('front-modified/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('front-modified/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('front-modified/js/slick.js') }}"></script>
        <script src="{{ asset('front-modified/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('front-modified/js/theme.js') }}"></script>

        @yield('scripts')

        @if ($christmas_effect->visibility == TRUE)
    <script src="{{ asset('front-modified/js/snowfall.jquery.min.js') }}"></script>
    <div class="santa"><img src="{{ asset('front-modified/images/effects/christmas-sled-source_ulp.gif') }}" alt="santa"></div>
    <script>
      jQuery(function($) {

          var windowWidth = $(document).width();
          var windowWidth = window.innerWidth;
          var santa = $('.santa');
          santa_right_pos = windowWidth + santa.width();
          santa.right = santa_right_pos;


          function movesanta() {
              santa.animate({
                  right: windowWidth + santa.width()
              }, 15000, function() {
                  santa.css("right", "-500px");
                  setTimeout(function() {
                      movesanta();
                  }, 10000);
              });
          }
          movesanta();
          var c = document.getElementById('canv'),
              $ = c.getContext("2d");
          var w = c.width = window.innerWidth - 18,
              h = c.height = window.innerHeight - 5;

          Snowy();

          function Snowy() {
              var snow, arr = [];
              var num = 600,
                  tsc = 1,
                  sp = 1;
              var sc = 1.3,
                  t = 0,
                  mv = 20,
                  min = 1;
              for (var i = 0; i < num; ++i) {
                  snow = new Flake();
                  snow.y = Math.random() * (h + 50);
                  snow.x = Math.random() * w;
                  snow.t = Math.random() * (Math.PI * 2);
                  snow.sz = (100 / (10 + (Math.random() * 100))) * sc;
                  snow.sp = (Math.pow(snow.sz * .8, 2) * .15) * sp;
                  snow.sp = snow.sp < min ? min : snow.sp;
                  arr.push(snow);
              }
              go();

              function go() {
                  window.requestAnimationFrame(go);
                  $.clearRect(0, 0, w, h);
                  $.fillRect(0, 0, w, h);
                  $.fill();
                  for (var i = 0; i < arr.length; ++i) {
                      f = arr[i];
                      f.t += .05;
                      f.t = f.t >= Math.PI * 2 ? 0 : f.t;
                      f.y += f.sp;
                      f.x += Math.sin(f.t * tsc) * (f.sz * .3);
                      if (f.y > h + 50) f.y = -10 - Math.random() * mv;
                      if (f.x > w + mv) f.x = -mv;
                      if (f.x < -mv) f.x = w + mv;
                      f.draw();
                  }
              }

              function Flake() {
                  this.draw = function() {
                      this.g = $.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.sz);
                      this.g.addColorStop(0, 'hsla(255,255%,255%,1)');
                      this.g.addColorStop(1, 'hsla(255,255%,255%,0)');
                      $.moveTo(this.x, this.y);
                      $.fillStyle = this.g;
                      $.beginPath();
                      $.arc(this.x, this.y, this.sz, 0, Math.PI * 2, true);
                      $.fill();
                  }
              }
          }
          /*________________________________________*/
          window.addEventListener('resize', function() {
              c.width = w = window.innerWidth;
              c.height = h = window.innerHeight;
          }, false);
      });
  </script>
    @endif

    <script>
      $(document).ready(function(){

$('#searchCourses').keyup(function(){ 
       var query = $(this).val();
       if(query != '')
       {
        var _token = $('input[name="_token"]').val();
        $.ajax({
         url:"{{ route('autocomplete-course.fetch') }}",
         method:"POST",
         data:{courses:query, _token:_token},
         success:function(data){
          $('#coursesDiv').fadeIn();  
          $('#coursesDiv').html(data);
         }
        });
       }
   });

});
    </script>
        <!-- Include All JS -->
    </body>

<!-- Mirrored from layerdrops.com/meipaly/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 09:02:31 GMT -->
</html>