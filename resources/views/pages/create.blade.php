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
                isset($page) ? 'Edit Page' : 'Add Page'
            }} 
        </h1>
        @if (isset($page))
            @if($page->static)
            {{-- <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Since this is a  static page, you may see some.</div>     --}}
            @endif
        @endif
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('pages.index') }}">Pages</a></li>
            <li><span>{{
                isset($page) ? 'Edit Page' : 'Add Page'
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
            <form method="POST" action="{{ isset($page) ? route('pages.update', $page->id) : route('pages.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($page))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Page Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Page Name" value="{{ (isset($page)) ? $page->name : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[About Us]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="heading">Heading</label>
                        <input class="uk-input" id="heading" name="heading" type="text" placeholder="Page Heading" value="{{ (isset($page)) ? $page->heading : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[About Us...]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="url">URL Slug</label>
                        <input class="uk-input" id="url" name="url" type="text" placeholder="URL Slug" value="{{ (isset($page)) ? $page->url : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[about-us,testimonials...]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="meta_title">Meta Title</label>
                        <input class="uk-input" id="meta_title" name="meta_title" type="text" placeholder="Meta Title" value="{{ (isset($page)) ? $page->meta_title : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[ Page Name | Reinvent Your Future | INTECH ]<div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="meta_description">Meta Description (Max word count: 400)</label>
                        <textarea class="uk-textarea" id="meta_description" name="meta_description" rows="5" placeholder="Meta Description">{{ (isset($page)) ? $page->meta_description : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[A brief explanation]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="keywords">Keywords (Separate each keyword by a comma)</label>
                        <textarea class="uk-textarea" id="keywords" name="keywords" rows="5" placeholder="Keywords">{{ (isset($page)) ? $page->keywords : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Words used to find information when searching</div>
                    </div>
            
                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="content">Content</label>
                            @if (isset($page))
                                @if(!$page->contained_box)
                                <div class="uk-margin-small-top uk-margin-small-bottom small-note"><span class="uk-badge">Note</span>Content of the Pages without contained boxes will appear differently in the editor, since the  styles for them are written on front-end stylesheets. Keep in mind!</div>    
                                @endif
                            @endif
                            {{-- <input type="hidden" name="content" id="content" placeholder="Content" value="{{ (isset($page)) ? $page->content : ''}}"> --}}
                            {{-- <trix-editor input="content">Content</trix-editor> --}}
                            <textarea class="uk-textarea" id="contentEditor" name="content" rows="5" placeholder="Content">{{ (isset($page)) ? $page->content : ''}}</textarea>
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Full explanation]</div>
                        </div>
                        <div class="uk-alert-primary" data-uk-alert>
                            <label><input class="uk-checkbox" name="contained_box" type="checkbox" 
                                @if (isset($page))
                                    {{ ($page->contained_box == true) ? 'checked' : '' }}
                                @else
                                    checked
                                @endif
                                    > Contained-Box </label>
                                <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[This option allows you to align and center your page content (Content will be placed inside a container). Untick this if you don't want to wrap the content inside a container. We recommend to tick this.]</div>
                        </div>
                    </div>

                    {{-- <div class="uk-margin-bottom input-wrapper">
                        
                    </div> --}}
                    
                    <div class="uk-margin input-wrapper ">
                        @if (isset($page))
                            <label class="uk-form-label uk-margin-bottom" for="image">Banner Image</label>
                            @if ($page->image)
                            <img src="{{ asset('storage') .'/'. $page->image ; }}" alt="{{ $page->name }}">
                            <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Upload an Image only if you need to replace this one!]</div>
                            @else
                            <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[No image found. If you didn't upload an image, the default banner image will be displayed]</div>
                            @endif
                            
                        @else
                        <label class="uk-form-label" for="image">Upload the Banner Image</label>
                        @endif
                        <div data-uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                            @if (!isset($page))
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[If you didn't upload an image, the default banner image will be displayed]</div>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin-bottom input-wrapper">
                        <label><input class="uk-checkbox" name="show_nav" type="checkbox" 
                        @if (isset($page))
                            {{ ($page->show_nav == true) ? 'checked' : '' }}
                        @else
                            checked
                        @endif
                            > Show in navigation</label>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Untick this if you don't want to show this page in the main navigation]</div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($page)) ? 'Update' : 'Add Page'}}</button>
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
