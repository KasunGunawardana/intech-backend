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
        <h1><span class="ion-speedometer"></span>Company Details</h1>
        <ul class="uk-breadcrumb">
            <li><span>Company details form</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-card uk-card-default uk-card-body">
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
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="uk-alert-danger" data-uk-alert>
                        <a class="uk-alert-close" data-uk-close></a>
                        <p>{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('company-details.update') }}">
                @csrf
                @method('PUT')
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="company_name">Company Name</label>
                        <input class="uk-input" id="company_name" name="company_name" type="text" placeholder="Company Name" value="{{ (isset($company)) ? $company->company_name : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="description">Company Description</label>
                        <textarea class="uk-textarea" id="description" name="description" rows="5" placeholder="Company Description">{{ (isset($company)) ? $company->description : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Content you put here will be use as the meta description. ex: A breif explanation about the company.]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="email">Email Address</label>
                        <input class="uk-input" id="email" name="email" type="email" placeholder="Email Address" value="{{ (isset($company)) ? $company->email : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="telephone">Telephone</label>
                        <input class="uk-input" id="telephone" name="telephone" type="text" placeholder="telephone" value="{{ (isset($company)) ? $company->telephone : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="mobile">Mobile</label>
                        <input class="uk-input" id="mobile" name="mobile" type="text" placeholder="Mobile" value="{{ (isset($company)) ? $company->mobile : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="additional_tel">Additional Contact Number</label>
                        <input class="uk-input" id="additional_tel" name="additional_tel" type="text" placeholder="Additional Contact Number" value="{{ (isset($company)) ? $company->additional_tel : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="fax">Fax</label>
                        <input class="uk-input" id="fax" name="fax" type="text" placeholder="Fax" value="{{ (isset($company)) ? $company->fax : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="registration_number">Company Registration Number</label>
                        <input class="uk-input" id="registration_number" name="registration_number" type="text" placeholder="Company Registration Number" value="{{ (isset($company)) ? $company->registration_number : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="address1">Address Line 1</label>
                        <input class="uk-input" id="address1" name="address1" type="text" placeholder="Address Line 1" value="{{ (isset($company)) ? $company->address1 : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="address2">Address Line 2</label>
                        <input class="uk-input" id="address2" name="address2" type="text" placeholder="Address Line 2" value="{{ (isset($company)) ? $company->address2 : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="city">City</label>
                        <input class="uk-input" id="city" name="city" type="text" placeholder="City" value="{{ (isset($company)) ? $company->city : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="country">Country</label>
                        <input class="uk-input" id="country" name="country" type="text" placeholder="County" value="{{ (isset($company)) ? $company->country : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="facebook">Facebook</label>
                        <input class="uk-input" id="facebook" name="facebook" type="text" placeholder="Facebook link" value="{{ (isset($company)) ? $company->facebook : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Paste the Facebook link here]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="instagram">Instagram</label>
                        <input class="uk-input" id="instagram" name="instagram" type="text" placeholder="Instagram link" value="{{ (isset($company)) ? $company->instagram : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Paste the Instagram link here]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="youtube">Youtube</label>
                        <input class="uk-input" id="instagram" name="youtube" type="text" placeholder="Youtube link" value="{{ (isset($company)) ? $company->youtube : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Paste the Youtube link here]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="map">Map</label>
                        <textarea class="uk-textarea" id="map" name="map" rows="5" placeholder="Map">{{ (isset($company)) ? $company->map : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Get the google map location as Embed map and place here]</div>
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

@section('css')

@endsection

@section('scripts')

@endsection
