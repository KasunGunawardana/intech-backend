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
  <div class="inner-banner-full text-white overflow-hidden">
    <canvas class="w-100 h-500" data-granim="#834d9b,#0091d5,#1cd8d2,#004f98"></canvas>
    <img class="banner-img" src="{{ asset('front/images/contact-banner.jpg') }}" alt="contact">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1,h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>Contact Us</h1>
          <h3>Get In Touch With Us!</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
  <div class="intro-full layout overflow-hidden">
    <div class="uk-container">
        <div>
          @if (session('status'))
<div class="uk-alert-primary" data-uk-alert>
    <a class="uk-alert-close" data-uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
        @if(session()->has('success'))
                <div class="uk-alert-success" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('success') }}</p>
                </div>
        @endif
        @if(session()->has('error'))
                <div class="uk-alert-danger" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('error') }}</p>
                </div>
        @endif
        </div>
      <div class="uk-flex-middle" uk-grid>
        <div class="uk-width-2-3@m">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31674.347902832706!2d79.990344!3d7.091939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x612116336c8032e2!2sIndeepa%20College%20of%20Technology%20(Pvt)%20Ltd!5e0!3m2!1sen!2sus!4v1629489335346!5m2!1sen!2sus" height="500" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="uk-width-1-3@m">
            <div class="overflow-hidden">
              {{-- <div uk-scrollspy="target: > h5,p; cls: uk-animation-slide-left; delay: 300">
                <h5>Contact detail</h5>

                <p>{{ $companyDetails->description }}</p>
              </div> --}}
              <div>
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
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-gray py-7">
    <div class="uk-container">
      <header class="section-header" uk-scrollspy="target: > h5,h2,hr,p; cls: uk-animation-slide-bottom; delay: 300">
        <h5 class="light-black">Contact</h5>
        <h2 class="">Send a message</h2>
        <hr>
        <p class="lead">We will get back to you ASAP!</p>
      </header>

      <form class="form-row input-border" action="{{ route('contact.send-email') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-sm-6 col-xl-3">
          <input class="form-control form-control-lg" type="text" id="name" name="name" placeholder="Name" required>
        </div>

        <div class="form-group col-sm-6 col-xl-3">
          <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group col-sm-6 col-xl-3">
          <input class="form-control form-control-lg" type="text" id="number" name="number" placeholder="Number" required>
        </div>

        <div class="form-group col-sm-6 col-xl-3">
          <input class="form-control form-control-lg" type="text" name="subject" placeholder="Subject">
        </div>


        <div class="form-group col-12">
          <textarea class="form-control form-control-lg" rows="4" id="message" placeholder="Message" name="message" required></textarea>
        </div>

        <div class="text-center">
          <!-- <button class="btn btn-xl btn-block btn-primary" type="submit">Submit Inquiry</button> -->
          <button id="formButton" class="btn btn-xl btn-block btn-primary" type="submit">Submit Inquiry</button>
        </div>
      </form>
      

    </div>
  </div>

@endsection

@section('scripts')

<script>
  var formButton = document.querySelector('form.form-row #formButton');
  var loader = document.querySelector('.fixed-spinner.loader');

  formButton.addEventListener('click', function(){
    // loader.classList.add('visible');
    if (document.querySelector('form.form-row #name').checkValidity()) {
      if (document.querySelector('form.form-row #email').checkValidity()) {
        if (document.querySelector('form.form-row #number').checkValidity()) {
          if (document.querySelector('form.form-row #message').checkValidity()) {
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