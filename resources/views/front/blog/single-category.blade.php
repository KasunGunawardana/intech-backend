@extends('front.layouts.app')

@section('title')
{{ $category->name }} | Reinvent Your Future
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
    <img class="banner-img" src="{{ asset('front/images/blog-banner.jpg') }}" alt="{{ $category->name }}">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>Category - {{ $category->name }}</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid></div> -->

  <main class="main-content">
    <div class="section bg-gray">
      <div class="container">
        <div class="row">


          <div class="col-md-8 col-xl-9">
            <div class="row gap-y">

                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                    <div class="col-md-6">
                        <div class="card border hover-shadow-6 mb-6 d-block">
                          <a  href="{{ URL::to('blog/post/' . $post->url ); }}"><img class="card-img-top" src="{{  asset('storage') .'/'. $post->image }}" alt="{{ $post->title }}"></a>
                          <div class="p-6">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{ URL::to('blog/category/' . $post->category->id ); }}">{{ $post->category->name }}</a></p>
                            <h5 class="mb-3"><a class="text-dark" href="{{ URL::to('blog/post/' . $post->url ); }}">{{ $post->title }}</a></h5>
                            <p class="mb-3"><?php str_limit($post->description, 150); ?></p>
                            <div class=""><span class="small-5">{{ date('d-m-Y', strtotime($post->created_at)); }}</span></div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                @else
                <div class="uk-alert-danger" uk-alert>
                    <p>There are no posts available with this category yet.</p>
                </div>
                @endif

            </div>


            {{ $posts->links() }}
          </div>



          <div class="col-md-4 col-xl-3">
            @include('front.blog.side-bar')
          </div>

        </div>
      </div>
    </div>
  </main>

@endsection

@section('scripts')

@endsection
