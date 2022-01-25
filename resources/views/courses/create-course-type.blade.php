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
        <h1><span class="ion-speedometer"></span>{{ (isset($course_type)) ? 'Edit Course Type' : 'Add Course Type' }}</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ URL::to('courses'); }}">Courses</a></li>
            <li><a href="{{ URL::to('course-types'); }}">Course Type</a></li>
            <li><span>{{ (isset($course_type)) ? 'Edit Course Type' : 'Add Course Type' }}</span></li>
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
            <form method="POST" action="{{ (isset($course_type)) ? route('course-types.update', $course_type->id) : route('course-types.store') }}">
                @csrf
                @if (isset($course_type))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Course Type</label>
                        <input class="uk-input" name="name" type="text" placeholder="Course Type" value="{{ (isset($course_type)) ? $course_type->name : '' }}">
                        @if (isset($course_type))
                            <div></div>
                        @else
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[Certificate, Diploma]</div>
                        @endif
                        
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($course_type)) ? 'Update' : 'Add Course Type' }}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
