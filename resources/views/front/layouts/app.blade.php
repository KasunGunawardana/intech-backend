<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
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
    
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('front/images/favicon.ico') }}' />
    <!-- title tag -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/uikit.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/font-awesome/css/all.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/page.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/stylesheet.css') }}">

    @yield('css')
    
    <script src="{{ asset('front/js/uikit.min.js') }}"></script>
    <script src="{{ asset('front/js/uikit-icons.min.js') }}"></script>
    <!-- Facebook Pixel Code -->

<script>


  !function(f,b,e,v,n,t,s)
  
  
  
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  
  
  
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  
  
  
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  
  
  
  n.queue=[];t=b.createElement(e);t.async=!0;
  
  
  
  t.src=v;s=b.getElementsByTagName(e)[0];
  
  
  
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  
  
  
  'https://connect.facebook.net/en_US/fbevents.js');
  
  
  
  fbq('init', '1077709756329390');
  
  
  
  fbq('track', 'PageView');
  
  
  </script>
  
  <noscript>
  
  <img height="1" width="1"
  
  src="https://www.facebook.com/tr?id=1077709756329390&ev=PageView
  
  &noscript=1"/>
  
  </noscript>
  
  <!-- End Facebook Pixel Code -->
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>
  <div class="fixed-spinner loader">
    <div>
      <h5 class="mb-3"><span class="fw-500" data-typing="Wait..., Sending the message..., Almost there..., A moment..., Keep calm..., Bear with us..." data-type-speed="80"></span></h5>
      <span uk-spinner="ratio: 2"></span>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
    <div class="header-full">
      <div class="uk-container">
        <div class="header-row uk-flex uk-flex-middle uk-flex-between@m uk-flex-column uk-flex-row@m">
          <div>
            <a href="{{ URL::to('') }}" title="{{ $companyDetails->company_name }} | Home"><img src="{{ asset('front/images/logo.png') }}" class="" alt="{{ $companyDetails->company_name }}"></a>
          </div>
          <div>
            <nav class="uk-navbar-container" data-uk-navbar>
              <div class="uk-navbar-left">
                <div class="navbar-container" id="sidenav">
                  <a href="" class="close-nav uk-hidden@m" data-uk-close></a>
                  <ul class="uk-navbar-nav">
                      <li><a href="{{ URL::to('') }}">HOME</a></li>
                      @foreach ($showNavigationList as $showNavigationItem)
                      <li><a href="{{ URL::to('/') . '/page/' . $showNavigationItem->url }}">{{ $showNavigationItem->name }}</a></li>
                      @endforeach
                      <li><a href="{{ URL::to('all-courses') }}">ALL COURSES</a></li>
                      {{-- <li><a href="https://intech.webcocrm.com/register/" target="_blank">Register</a></li> --}}
                      @if ($blog_content->show_nav)
                      <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                      @endif
                      @if ($gallery_content->show_nav)
                      <li><a href="{{ URL::to('galleries') }}">Gallery</a></li>
                      @endif
                      <li><a href="{{ URL::to('contact') }}">CONTACT</a></li>
                      {{-- <li><a class="custom btn-round" href="http://intech.webcolms.com/" target="_blank">LOGIN &nbsp; <i class="fas fa-arrow-right" style="transform: rotate(-45deg);"></i></a></li> --}}
                  </ul>
                </div>
                <a id="toggle" class="uk-navbar-toggle uk-hidden@m" data-uk-navbar-toggle-icon ></a>
              </div>
            </nav>
            <div class="search-parent-div uk-flex uk-flex-middle">
              <div>
                  <div style="position: relative;">
                      <span class="uk-form-icon" data-uk-icon="icon: search"></span>
                      <input class="uk-input" id="searchCourses" onfocusout="clearCourseDiv()" type="text" placeholder="Search your course here...">
                  </div>
                  <div id="coursesDiv"></div>
                  {{ csrf_field() }}
              </div>
              <div>
                <a class="custom btn-round" href="https://lms.intech.edu.lk/" target="_blank">LOGIN &nbsp; <i class="fas fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @yield('content')
    <div class="contact-full">
      <div class="uk-container">
        <div data-uk-scrollspy="target: > h2: uk-animation-slide-bottom; delay: 100">
          <h2 class="uk-text-center">Join With Our <span data-provide="countup" data-from="0" data-to="1000"></span>+ Happy Students​ Today!</h2>
          <div class="uk-text-center">
            <a href="{{ URL::to('all-courses'); }}" class="common-btn btn-round">Start Learning</a>
          </div>
          <div class="uk-grid-column-small uk-grid-row-medium uk-flex-middle uk-child-width-1-2@m uk-child-width-1-4@l" data-uk-grid="">
            <div>
              <img src="{{ asset('front/images/logo-big.png') }}" alt="" style="filter: brightness(0) invert(1);">
            </div>
            <div>
              <ul class="contact">
                <li><a href="tel:{{ trim_spaces($companyDetails->telephone) }}">{{ $companyDetails->telephone }}</a></li>
                <li><a href="tel:{{ trim_spaces($companyDetails->mobile) }}">{{ $companyDetails->mobile }}</a></li>
                <li><a href="tel:{{ trim_spaces($companyDetails->additional_tel) }}">{{ $companyDetails->additional_tel }}</a></li>
                <li><a href="mailto:{{ $companyDetails->email }}">{{ $companyDetails->email }}</a></li>
              </ul>
            </div>
            <div class="uk-text-center">
              <div class="social-media">
                <a href="{{ isset($companyDetails->facebook) ? $companyDetails->facebook : '#' }}" target="_blank"><img src="{{ asset('front/images/fb-icon.png') }}" alt="facebook"></a>
                <a href="{{ isset($companyDetails->twitter) ? $companyDetails->twitter : '#' }}" target="_blank"><img src="{{ asset('front/images/insta-icon.png') }}" alt="instagram"></a>
                <a href="{{ isset($companyDetails->youtube) ? $companyDetails->youtube : '#' }}" target="_blank"><img src="{{ asset('front/images/youtube-icon.png') }}" alt="youtube"></a>
              </div>
            </div>
            <div>
              <ul class="address">
                <li><span>{{ $companyDetails->address1 }}, {{ $companyDetails->address2 }},<br>
                  {{ $companyDetails->city }}, {{ $companyDetails->country }}.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if ($companyDetails->map)
    <div class="map-container">
      {!! $companyDetails->map !!}
    </div>
    @endif
    

    <div class="footer-full">
      <div class="uk-container">
        <div class="copyright uk-text-center">
          <p>Copyright <i class="far fa-copyright"></i> <?php echo date("Y"); ?> {{ $companyDetails->company_name }} - All Rights Reserved</p>
        </div>
      </div>
    </div>

    <a id="back-to-top" class="back_to_top" href="#top" data-uk-scroll=""><span data-uk-icon="arrow-up"></span></a>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, LightBox JS -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('front/js/single.js') }}"></script>
    <script src="{{ asset('front/js/page.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>


    <!-- __________________    Christmas effect   ______________________ -->
    @if ($christmas_effect->visibility == TRUE)
    <canvas id='canv'> </canvas>
    <script src="{{ asset('front/js/snowfall.jquery.min.js') }}"></script>
    <div class="santa"><img src="{{ asset('front/images/effects/christmas-sled-source_ulp.gif') }}" alt="santa"></div>
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
  <!-- __________________    Christmas effect   ______________________ -->
    <script>
    if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)){

    } else {
        // $('.container-b-full').jarallax({ speed: 0.6 });
    }
    </script>
    <script>

        // $('.testimonial-slider').owlCarousel({
        //     loop:true,
        //     autoplay:true,
        //     nav:false,
        //     items:1,
        //     dots: true
        // });

        // ----------------- temp

        $(document).ready(function(){
            // $('a[href^="#"]').each(function(){ 
            //     var oldUrl = $(this).attr("href"); // Get current url
            //     var newUrl = oldUrl.replace("#", "#messegePopup"); // Create new url
            //     $(this).attr("href", newUrl); // Set herf value
            // });
        });
        
        // ----------------- temp

        
        // $('.about-us .accordion li:nth-child(1) a')[0].click();

        // window.addEventListener('scroll', ()=>{
        //   let accordion = document.querySelector('.about-us .accordion');
        //   let accordionAnchor = document.querySelector('.about-us .accordion li:nth-child(1) a');
        //   let accordionPosition = accordion.getBoundingClientRect().top;
        //   let screenPosition = window.innerHeight;
        //   if(accordionPosition < screenPosition) {
        //     if(!accordion.classList.contains('uk-open')) {
        //       accordionAnchor.click();
        //     }
        //   }
        // })

        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
              };
            backToTop();
            $(window).on("scroll", function() {
                backToTop();
            });
        }

        const menuToggle = document.querySelector("#toggle");
        const showcase = document.querySelector("#sidenav");
        const closeNav = document.querySelector(".close-nav");

        menuToggle.addEventListener("click", () => {
            menuToggle.classList.toggle("active");
            showcase.classList.toggle("active");
        });

        closeNav.addEventListener("click", (e) => {
            e.preventDefault();
            showcase.classList.remove("active");
        });



    </script>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1754624621254779");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    @yield('scripts')

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

// function clearCourseDiv() {
//   $('#coursesDiv').fadeOut();
// }
    </script>
  </body>
</html>