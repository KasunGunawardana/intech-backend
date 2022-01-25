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
        <h1><span class="ion-speedometer"></span>{{ (isset($category)) ? 'Edit Category' : 'Add Category' }}</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ URL::to('categories'); }}">Category</a></li>
            <li><span>{{ (isset($category)) ? 'Edit Category' : 'Add Category' }}</span></li>
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
            <form method="POST" action="{{ (isset($category)) ? route('categories.update', $category->id) : route('categories.store') }}">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Name</label>
                        <input class="uk-input" name="name" type="text" placeholder="Category Name" value="{{ (isset($category)) ? $category->name : '' }}">
                        @if (isset($category))
                            <div></div>
                        @else
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[News, Events]</div>
                        @endif
                        
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($category)) ? 'Update' : 'Add Category' }}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
