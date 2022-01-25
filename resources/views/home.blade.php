@extends('layouts.app')

@section('content')
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span> {{ __('Dashboard') }}</h1>
        <p>Dashboard</p>
        <ul class="uk-breadcrumb">
            <li><span>Home</span></li>
            <li><span>Dashboard</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        @if (session('status'))
<div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session('status') }}</p>
</div>
@endif
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
        <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
            <div>
                <a href="{{ route('courses.index') }}">
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Courses</span><br />
                        <span class="statistics-number">{{ $courses->count() }}</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('instructors.index') }}">
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Instructors</span><br />
                        <span class="statistics-number">{{ $instructors->count() }}</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('announcements.index') }}">
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Announcements</span><br />
                        <span class="statistics-number">{{ $announcements->count() }}</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('blocks.index') }}">
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Blocks</span><br />
                        <span class="statistics-number">{{ $blocks->count() }}</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
