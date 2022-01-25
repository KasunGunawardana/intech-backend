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
        <h1><span class="ion-speedometer"></span>Add Logo</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Recommended Dimensions for the logo: 350 x 250 (pixels)</div>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('logo-slider.index') }}">Logo Slider</a></li>
            <li><span>Add Logo</span></li>
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
            <form method="POST" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                @csrf
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Name" value="">
                    </div>
                    
                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="image">Upload the Logo Image</label>
                        <div uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Recommended</span> Dimensions: 350 x 250 (pixels)</div>
                        </div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">Add Logo</button>
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
