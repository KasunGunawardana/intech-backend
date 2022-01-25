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
        <h1><span class="ion-speedometer"></span>Update Password</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li><span>Update Password</span></li>
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
            <div class="uk-margin input-wrapper">
                <label class="uk-form-label"">Update the password for : <strong>{{ $user->email }}</strong></label>
            </div>
            
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <fieldset class="uk-fieldset">

                    <div class="uk-marginn-top input-wrapper ">
                        <label class="uk-form-label" for="password"></label>
                        <input class="uk-input" name="password" id="passwordField" type="password" placeholder="Password" value="">
                    </div>

                    <div class="uk-margin-bottom input-wrapper">
                        <label><input class="uk-checkbox" type="checkbox" onclick="passwordVisible()"> Show Password</label>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Be sure to remember the password]</div>
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

<script>
    function passwordVisible() {
        var x = document.getElementById("passwordField");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
