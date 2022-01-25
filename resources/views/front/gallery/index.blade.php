@extends('front.layouts.app')

@section('title')
Gallery | Intech | Reinvent Your Future
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
    <img class="banner-img" src="{{ asset('front/images/gallery-banner.jpg') }}" alt="Gallery">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>Gallery</h1>
          <h3>{{ $gallery->sub_heading }}</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->
  
<section class="layout-full layout overflow-hidden">
    <div class="container">
        {{-- <div class="row gap-y align-items-center">

            <div class="col-12">
              <h2>Intech E-Sports Championship</h2>
              <p class="mb-0">This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!! This is a dummy gallery !!!</p>
            </div>
    
            <div class="col-lg-12">
                <div>
                    <p><strong>Click on images to enlarge</strong></p>
                </div>
                <div class="row" data-uk-lightbox="animation: slide">
                    <div class="col-md-4">
                        <a class="uk-inline mb-5" href="{{ asset('front/images/gallery/1.jpg') }}" data-caption="E-Sports">
                            <div class="gallery-img">
                              <img src="{{ asset('front/images/gallery/1.jpg') }}" class="img-fluid" alt="E-Sports">
                              <svg xmlns="http://www.w3.org/2000/svg" width="650px" height="400px" fill="none"></svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="uk-inline mb-5" href="{{ asset('front/images/gallery/2.jpg') }}" data-caption="E-Sports">
                            <div class="gallery-img">
                              <img src="{{ asset('front/images/gallery/2.jpg') }}" class="img-fluid" alt="E-Sports">
                              <svg xmlns="http://www.w3.org/2000/svg" width="650px" height="400px" fill="none"></svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="uk-inline mb-5" href="{{ asset('front/images/gallery/3.jpg') }}" data-caption="E-Sports">
                            <div class="gallery-img">
                              <img src="{{ asset('front/images/gallery/3.jpg') }}" class="img-fluid" alt="E-Sports">
                              <svg xmlns="http://www.w3.org/2000/svg" width="650px" height="400px" fill="none"></svg>
                            </div>
                        </a>
                    </div>
                </div>                      
            </div>
    
        </div> --}}

        @if ($galleries->count() > 0)
          @foreach ($galleries as $singleGallery)

          <div class="row gallery-section-div gap-y align-items-center">

            <div class="col-12">
              <h2>{{ $singleGallery->name }}</h2>
              <p class="mb-0">{!! $singleGallery->content !!}</p>
            </div>

            @if (App\Http\Controllers\GalleriesController::renderGalleryImages($singleGallery->id)->count() > 0)
            <div class="col-lg-12">
              <div>
                  <p><strong>Click on images to enlarge</strong></p>
              </div>
              <div class="row" data-uk-lightbox="animation: slide">
                @foreach (App\Http\Controllers\GalleriesController::renderGalleryImages($singleGallery->id) as $item)
                <div class="col-md-4">
                  <a class="uk-inline mb-5" title="Click to view" href="{{ asset('storage') .'/'. $item->image }}" data-caption="{{ $singleGallery->name }}">
                      <div class="gallery-img">
                        <div style="background-image: url({{ asset('storage') .'/'. $item->image }})">
                          <img class="image-mask w-100%" src="{{  asset('front/images/gallery-image-mask.png') }}" alt="{{ $singleGallery->name }}">
                        </div>
                      </div>
                  </a>
              </div>
                @endforeach
              </div>                      
          </div>
            @endif
        </div>
              
          @endforeach
        @else

        <div class="uk-alert-danger" uk-alert>
          <p>There are no galleries available</p>
        </div>
            
        @endif
    </div>
</section>

@endsection

@section('scripts')
<script>
  $('ul.uk-navbar-nav').find('a[href^="{{ url()->current(); }}"]').addClass('uk-active');
</script>
@endsection
