@extends('front.layouts.app')

@section('title')
Contact | Reinvent Your Future | Intech
@endsection

@section('meta_description')
{{ $companyDetails->description }}
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')
<div class="fixed-spinner">
<div class="la-ball-circus la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
  </div>
  <!-- Page Banner -->
  <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4>Get In Touch With Us!</h4>
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->

  <!-- Contact Section -->
  <section class="commonSection ContactPage">
            <div class="container">
                <div class="row">
                  <div class="col-12">
                  
                  </div>
                    <div class="col-lg-12 text-center">
                    <h4 class="sub_title">Contact with us</h4>
                        <h2 class="sec_title">write us a message</h2>
                        <p class="sec_desc">
                        {{ $companyDetails->description }}
                        </p>
                        <div>
          @if (session('status'))
<div class="uk-alert-primary" data-uk-alert>
    <a class="uk-alert-close" data-uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
        @if(session()->has('success'))
                <div class="alert alert-success" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('success') }}. We will get back to you ASAP!</p>
                </div>
        @endif
        @if(session()->has('error'))
                <div class="alert alert-danger" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('error') }}</p>
                </div>
        @endif
        </div>
                        <!-- <div>
                <ul class="contact-detail mt-5" uk-scrollspy="target: > li; cls: uk-animation-slide-left; delay: 300">
                  <li>
                    <strong>Address</strong>
                    <span>{{ $companyDetails->address1 }}, {{ $companyDetails->address2 }},
                      {{ $companyDetails->city }}, {{ $companyDetails->country }}.</span>
                  </li>
                  <li>
                    <strong>Telephone</strong>
                    <a href="tel:{{ trim_spaces($companyDetails->telephone) }}">{{ $companyDetails->telephone }}</a>
                  </li>
  
                  <li>
                    <strong>Mobile</strong>
                    <a href="tel:{{ trim_spaces($companyDetails->mobile) }}">{{ $companyDetails->mobile }}</a><br><a href="tel:{{ trim_spaces($companyDetails->additional_tel) }}">{{ $companyDetails->additional_tel }}</a>
                  </li>
  
                  <li>
                    <strong>Email</strong>
                    <a href="mailto:{{ $companyDetails->email }}">{{ $companyDetails->email }}</a>
                  </li>
  
                  <li>
                    <strong>Find us social media</strong>
                    <div class="social social-sm social-gray social-inline mt-2">
                      <a class="social-facebook" target="_blank" href="{{ isset($companyDetails->facebook) ? $companyDetails->facebook : '#' }}"><i class="fab fa-facebook"></i></a>
                      <a class="social-twitter" target="_blank" href="{{ isset($companyDetails->twitter) ? $companyDetails->twitter : '#' }}"><i class="fab fa-instagram"></i></a>
                      <a class="social-instagram" target="_blank" href="{{ isset($companyDetails->youtube) ? $companyDetails->youtube  : '#' }}"><i class="fab fa-youtube"></i></a>
                    </div>
                  </li>
                </ul>
              </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                        <form  action="{{ route('contact.send-email') }}" method="POST" enctype="multipart/form-data" class="contactFrom">
                          @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <input class="input-form required" type="text" name="name" id="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <input class="input-form required" type="email" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <input class="input-form" type="text" name="number" id="number" placeholder="Phone Number" required>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <input class="input-form" type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="input-form required" name="message" id="message" placeholder="Write Message" required></textarea>
                                </div>
                            </div>
                            <button class="common_btn red_bg" type="submit" id="formButton"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->

@endsection

@section('scripts')

<script>
  var formButton = document.querySelector('#formButton');
  var loader = document.querySelector('.fixed-spinner');

  formButton.addEventListener('click', function(){
    // loader.classList.add('visible');
    if (document.querySelector('form.contactFrom #name').checkValidity()) {
      if (document.querySelector('form.contactFrom #email').checkValidity()) {
        if (document.querySelector('form.contactFrom #number').checkValidity()) {
          if (document.querySelector('form.contactFrom #message').checkValidity()) {
            loader.classList.add('visible');
          }
        }
      }
    }
  })
</script>

<script>
  $('ul.uk-navbar-nav').find('a[href^="{{ url()->current(); }}"]').addClass('uk-active');
</script>

@endsection