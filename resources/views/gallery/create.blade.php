@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="uk-alert-primary" data-uk-alert>
    <a class="uk-alert-close" data-uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span>
            {{
                isset($gallery) ? 'Edit Gallery' : 'Add Gallery'
            }} 
        </h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('gallery.index') }}">Galleries</a></li>
            <li><span>{{
                isset($gallery) ? 'Edit Gallery' : 'Add Gallery'
            }} </span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-card uk-card-default uk-card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="uk-alert-danger" data-uk-alert>
                        <a class="uk-alert-close" data-uk-close></a>
                        <p>{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ isset($gallery) ? route('gallery-list.update', $gallery->id) : route('gallery.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($gallery))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Gallery Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Gallery Name" value="{{ (isset($gallery)) ? $gallery->name : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[Our New Year Event]</div>
                    </div>
            
                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="content">Gallery Description</label>
                            <textarea class="uk-textarea" id="contentEditor" name="content" rows="5" placeholder="Gallery Description">{{ (isset($gallery)) ? $gallery->content : ''}}</textarea>
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Full explanation]</div>
                        </div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($gallery)) ? 'Update' : 'Add Gallery'}}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/ral8p4hy4ishwzv1wk48exml6bzfgnjhdhczm1tsfyk9suaa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('js/tinymce_image_upload.js') }}"></script>
<script>
    function removeTinyMCEWatermark() {
        var detectFroalaMark = document.querySelector('.tox-statusbar__branding');
        detectFroalaMark.style.display = 'none';
    }

    window.onload = function() {
        removeTinyMCEWatermark();
    };
</script>
@endsection
