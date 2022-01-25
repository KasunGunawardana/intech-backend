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
        <h1><span class="ion-speedometer"></span>Add User</h1>
        <ul class="uk-breadcrumb">
            <li><a>Users</a></li>
            <li><span>Add User</span></li>
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
            {{-- <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Name</label>
                        <input class="uk-input" name="name" type="text" placeholder="Name" value="">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="email">Email</label>
                        <input class="uk-input" name="email" type="email" placeholder="Email" value="">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="password">Password</label>
                        <input class="uk-input" name="password" type="password" placeholder="Name" value="">
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">Add User</button>
                    </div>
            
                </fieldset>
            </form> --}}
        </div>
    </div>
</div>
@endsection
