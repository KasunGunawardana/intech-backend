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
        <h1><span class="ion-speedometer"></span>Courses</h1>
        <p>Welcome back, Èrik Campobadal</p>
        <ul class="uk-breadcrumb">
            <li><span href="courses/index">Courses</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-card uk-card-default uk-card-body">
            <span class="statistics-text">New Registrations</span><br />
            <span class="statistics-number">14.164<span class="uk-label uk-label-success">8% <span class="ion-arrow-up-c"></span></span></span>
        </div>
    </div>
</div>
@endsection
