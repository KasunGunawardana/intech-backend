@extends('front.layouts.app')

@section('title')
{{ $post->title }} | Reinvent Your Future
@endsection

@section('meta_description')
<?php str_limit($post->description, 320); ?>
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')
<div class="inner-banner-full text-white overflow-hidden">
    <canvas class="w-100" data-granim="#834d9b,#0091d5,#1cd8d2,#004f98"></canvas>
    <img class="banner-img" src="{{ asset('front/images/blog-banner.jpg') }}" alt="{{ $post->title }}">
    <div class="banner-wrapper">
      <div class="uk-container uk-text-center">
        <div uk-scrollspy="target: > h1, h3; cls: uk-animation-slide-bottom; delay: 300">
          <h1>{{ $post->title }}</h1>
          <h3>- {{ $post->category->name }} -</h3>
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
                    <div class="col-md-12">
                        <div class="mb-6 d-block">
                          <img class="card-img-top mb-5" src="{{  asset('storage') .'/'. $post->image }}" alt="{{ $post->title }}">
                            <p class="mb-2"><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{ URL::to('blog/category/' . $post->category->id ); }}">{{ $post->category->name }}</a></p>
                            <h2 class="mb-5">{{ $post->title }}</h2>
                            <p class="mb-3">{!! $post->content !!}</p>
                            <hr>
                            <div class=""><span class="small-5">{{ date('d-m-Y', strtotime($post->created_at)); }}</span></div>
                        </div>
                    </div>

            </div>
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
