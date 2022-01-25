@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span>Effects</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Choose the effect you want and click 'Update' to push it to the live site.</div>
        <ul class="uk-breadcrumb">
            <li><span>Effects</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        @if(session()->has('success'))
                <div class="uk-alert-success" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('success') }}</p>
                </div>
        @endif
        @if(session()->has('error'))
                <div class="uk-alert-danger" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('error') }}</p>
                </div>
        @endif
        <div class="uk-card uk-card-default uk-card-body">
            <form method="POST" action="{{ route('effects.update') }}">
                @csrf
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper">
                        <label class="uk-form-label" for="effect">Effects</label>
                        <div uk-form-custom="target: > * > span:first-child">
                            <select name="effect" id="effect">
                                @foreach ($effects as $effect)
                                <option value="{{ $effect->id }}" 
                                        {{ ($effect->visibility) ? 'selected' : '' }}
                                    >{{ $effect->name }}</option>
                                @endforeach
                            </select>
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Just choose 'none' and click 'Update' to remove the current effect.</div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">Update</button>
                    </div>
            
                </fieldset>
            </form>           
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection

