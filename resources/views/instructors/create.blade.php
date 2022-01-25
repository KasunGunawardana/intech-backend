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
                isset($instructor) ? 'Edit Instructor' : 'Add Instructor'
            }} 
        </h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('instructors.index') }}">Instructors</a></li>
            <li><span>{{
                isset($instructor) ? 'Edit Instructor' : 'Add Instructor'
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
            <form method="POST" action="{{ isset($instructor) ? route('instructors.update', $instructor->id) : route('instructors.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($instructor))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Instructor Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Instructor Name" value="{{ (isset($instructor)) ? $instructor->name : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="title">Instructor's Title</label>
                        <input class="uk-input" id="title" name="title" type="text" placeholder="Instructor's Title/Post" value="{{ (isset($instructor)) ? $instructor->title : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[General Manager, Graphic Designer]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="description">Description / Qualifications (Specify as list items)</label>
                            <input type="hidden" name="description" id="description" placeholder="Description/Qualifications" value="{{ (isset($instructor)) ? $instructor->description : ''}}">
                            <trix-editor input="description">Content</trix-editor>
                            {{-- <textarea class="uk-textarea" id="requirements" name="requirements" rows="5" placeholder="Entry Requirements"></textarea> --}}
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Bsc. (Honors in Computing)]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="tel">Telephone</label>
                        <input class="uk-input" id="tel" name="tel" type="text" placeholder="Telephone Number" value="{{ (isset($instructor)) ? $instructor->tel : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="additional_contact">Additional Contact</label>
                        <input class="uk-input" id="additional_contact" name="additional_contact" type="text" placeholder="Additional Contact Number" value="{{ (isset($instructor)) ? $instructor->additional_contact : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="address">Address</label>
                        <input type="hidden" name="address" id="address" placeholder="Address" value="{{ (isset($instructor)) ? $instructor->address : ''}}">
                            <trix-editor input="address">Address</trix-editor>
                    </div>
                    
                    <div class="uk-margin input-wrapper ">
                        @if (isset($instructor))
                            <label class="uk-form-label uk-margin-bottom" for="image">Image</label>
                            @if ($instructor->image)
                                <img src="{{ asset('storage') .'/'. $instructor->image ; }}" alt="{{ $instructor->name }}">
                                <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Upload an Image only if you need to replace this one!]</div>
                            @else
                                <img src="{{ asset('storage/instructors/default.jpg') }}" alt="{{ $instructor->name }}">
                            @endif
                        @else
                        <label class="uk-form-label" for="image">Upload the Image</label>
                        @endif
                        <div uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                        </div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($instructor)) ? 'Update' : 'Add Instructor'}}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script>
    flatpickr("#published_at", {
        enableTime: true
    });

    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script> --}}
@endsection
