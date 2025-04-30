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

  <section class="section ">
    <div class="container">
      <div class="row gap-y" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 500">

        <div class="col-md-12 mr-md-auto">
            {!! $page->content !!} 
        </div>

      </div>
    </div>
  </section>
      
  @endif

  @if ($page->url == 'about')

  <section class="section wave_bg_xxl">
    <div class="container">
      <header class="section-header" uk-scrollspy="target: > h2,hr,p; cls: uk-animation-slide-bottom; delay: 300">
        <h2>Meet the Team</h2>
        <hr>
        <p class="lead">Our Leading Instructors.</p>
      </header>


      <div class="row">
        <div class="col-lg-10 mx-auto">
          <ol class="timeline">
            @foreach ($instructors as $instructor)
                <li class="timeline-item" data-uk-scrollspy="target: > h4, p, div; cls: uk-animation-slide-left; delay: 100">
                <h4 class="mb-4">{{ $instructor->name }}</h4>
                {{-- <p class="small-2 mb-3">{{ $instructor->title }}</p> --}}
                <p><img class="rounded shadow-3 mb-3 uk-border-circle" src="{{ asset('storage') . '/' . $instructor->image }}" alt="..."></p>
                <div class="instructor-description">
                  {!! $instructor->description !!}
                </div>
                {{-- <p><i class="fas fa-file-alt text-success mr-2"></i><span>Bsc. (Honors in Computing from university of East london uk.)</span></p>
                <p><i class="fas fa-file-alt text-success mr-2"></i><span>Film and video Production from Cavendish Collage, London UK</span></p> --}}
                {{-- <div class="social social-brand mt-2">
                    @if (!$instructor->facebook == null)
                        <a class="social-facebook" href="{{ $instructor->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                    @endif
                    @if (!$instructor->twitter == null)
                    <a class="social-twitter" href="{{ $instructor->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if (!$instructor->instagram == null)
                    <a class="social-gplus" href="{{ $instructor->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    @endif
                </div> --}}
              </li>
            @endforeach
          </ol>

        </div>
      </div>

    </div>
  </section>
      
  @endif

@endsection

@section('scripts')
<script>
 $('ul.uk-navbar-nav').find('a[href^="{{ url()->current(); }}"]').addClass('uk-active');
</script>
@endsection
