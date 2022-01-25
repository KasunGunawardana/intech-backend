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
                isset($announcement) ? 'Edit Announcement' : 'Add Announcement'
            }} 
        </h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Recommended Dimensions for the poster/image: 1370 x 550 (pixels)</div>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('announcements.index') }}">Announcements</a></li>
            <li><span>{{
                isset($announcement) ? 'Edit Announcement' : 'Add Announcement'
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
            <form method="POST" action="{{ isset($announcement) ? route('announcements.update', $announcement->id) : route('announcements.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($announcement))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Announcement Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Announcement Name" value="{{ (isset($announcement)) ? $announcement->name : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[New year discount]</div>
                    </div>
                    
                    <div class="uk-margin input-wrapper ">
                        @if (isset($announcement))
                            <label class="uk-form-label uk-margin-bottom" for="image">Announcement Banner Image</label>
                            <img src="{{ asset('storage') .'/'. $announcement->image ; }}" alt="{{ $announcement->name }}">
                            <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Upload an Image only if you need to replace this one!]</div>
                        @else
                        <label class="uk-form-label" for="image">Upload the Announcement Image</label>
                        @endif
                        <div uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                            @if (!isset($announcement))
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Recommended</span> Dimensions: 1370 x 550 (pixels)</div>
                            @endif
                        </div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($announcement)) ? 'Update' : 'Add Announcement'}}</button>
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

@endsection
