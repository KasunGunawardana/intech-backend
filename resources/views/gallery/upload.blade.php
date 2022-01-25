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
        <h1><span class="ion-speedometer"></span>Gallery Images</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('gallery.index') }}">Galleries</a></li>
            <li><span>Upload Images to gallery: <strong>{{ $gallery->name }}</strong></span></li>
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
            <form method="POST" id="upload" action="{{ route('gallery.image-upload', $gallery->id) }}" enctype="multipart/form-data">
                @csrf
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="file">Choose images from here</label>
                        <input class="" id="file" name="file[]" type="file" multiple>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[You can select and upload multiple images]</div>
                    </div>

                    {{-- <div class="uk-margin input-wrapper ">
                        <div id="message"></div>
                    </div> --}}
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">Upload</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('scripts')
{{-- <script>
    var form = document.getElementById('upload');
    var request = new XMLHttpRequest();
    
    form.addEventListener('submit', function(e){
        e.preventDefault();
        var formdata = new FormData(form);
    
        request.open('post', "{{ route('gallery.image-upload', $gallery->id) }}");
        request.addEventListener("load", transferComplete);
        request.send(formdata);
    
    });
    
    function transferComplete(data){
        response = JSON.parse(data.currentTarget.response);
        if(response.success){
            document.getElementById('message').innerHTML = "Successfully Uploaded Files!";
        }
    }
    </script> --}}
@endsection
