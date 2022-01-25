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
                isset($post) ? 'Edit Post' : 'Add Post'
            }} 
        </h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ URL::to('posts'); }}">Posts</a></li>
            <li><span>{{
                isset($post) ? 'Edit Post' : 'Add Post'
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
            <form method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="title">Title</label>
                        <input class="uk-input" id="title" name="title" type="text" placeholder="Post Title" value="{{ (isset($post)) ? $post->title : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="description">Description</label>
                        <textarea class="uk-textarea" id="description" name="description" rows="5" placeholder="Description">{{ (isset($post)) ? $post->description : ''}}</textarea>
                        {{-- <input class="uk-input" id="description" name="description" type="text" placeholder="Description" value="{{ (isset($post)) ? $post->description : ''}}"> --}}
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[A brief explanation...]</div>
                    </div>
            
                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="content">Content</label>
                            <input type="hidden" name="content" id="content" placeholder="Content" value="{{ (isset($post)) ? $post->content : ''}}">
                            <textarea class="uk-textarea" id="contentEditor" name="content" rows="5" placeholder="Content">{{ (isset($post)) ? $post->content : ''}}</textarea>
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Full content]</div>
                        </div>
                    </div>

                    <div class="uk-margin input-wrapper">
                        <label class="uk-form-label" for="category">Category</label>
                        <div uk-form-custom="target: > * > span:first-child">
                            <select name="category" id="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    @if (isset($post))
                                        {{ ($category->id == $post->category_id)? 'selected' : '' }}
                                    @endif
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Select the category</div>
                    </div>
                    
                    <div class="uk-margin input-wrapper ">
                        @if (isset($post))
                            <label class="uk-form-label uk-margin-bottom" for="image">Image</label>
                            <img src="{{ asset('storage') .'/'. $post->image ; }}" alt="{{ $post->name }}">
                            <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Upload an Image only if you need to replace this one!]</div>
                        @else
                        <label class="uk-form-label" for="image">Upload the Image</label>
                        @endif
                        <div uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Recommended</span> Dimensions: 800 x 650 (pixels)</div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($post)) ? 'Update' : 'Add Post'}}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" />
@endsection

@section('scripts')
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
