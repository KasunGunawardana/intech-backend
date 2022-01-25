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
                isset($block) ? 'Edit Block' : 'Add Block'
            }} 
        </h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('blocks.index') }}">Pages</a></li>
            <li><span>{{
                isset($block) ? 'Edit Block' : 'Add Block'
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
            <form method="POST" action="{{ isset($block) ? route('blocks.update', $block->id) : route('blocks.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($block))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="title">Title</label>
                        <input class="uk-input" id="title" name="title" type="text" placeholder="Title" value="{{ (isset($block)) ? $block->title : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="content">Content</label>
                            <textarea class="uk-textarea" id="contentEditor" name="content" rows="5" placeholder="Content">{{ (isset($block)) ? $block->content : ''}}</textarea>
                        </div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($block)) ? 'Update' : 'Add Block'}}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css"> --}}
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')

{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
<script>
    new FroalaEditor('#contentEditor', {
    // Set the image upload parameter.
    imageUploadParam: 'upload',

    // Set the image upload URL.
    imageUploadURL: "{{ route('ck.upload') }}",

    // Set request type.
    imageUploadMethod: 'POST',

    // Set max image size to 3MB.
    imageMaxSize: 3 * 1024 * 1024,

    height: 500,

    // Additional upload params.
    imageUploadParams: {
        froala: 'true',
        _token: '{{ csrf_token() }}'
    },

    // Allow to upload PNG and JPG.
    imageAllowedTypes: ['jpeg', 'jpg', 'png'],
  })
</script>

<script>
    function removeFroalaMark() {
        var detectFroalaMark = document.querySelector('.second-toolbar #logo');
        detectFroalaMark.style.opacity = 0;
    }

    window.onload = function() {
        removeFroalaMark();
    };
</script> --}}
{{-- <script>
    flatpickr("#published_at", {
        enableTime: true
    });

    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script> --}}
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