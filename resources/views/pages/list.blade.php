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
        <h1><span class="ion-speedometer"></span>Page Navigation</h1>
        <ul class="uk-breadcrumb">
            <li><span>Main Navigation</span></li>
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
            <div>
                <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Drag and drop the pages to create your main navigation. Click save once you have finished making changes. If you do not save you will loose your changes.]</div>
            </div>
            <div>
                @if ($pages->count() > 0)
                <form action="{{ route('pages.nav-list-sort') }}" method="POST">
                    @csrf
                    <ul id="navigation-list">
                        @foreach ($pages as $page)
                            <li class="{{ ($page->show_nav == null) ? 'disabled' : '' }}">{{ $page->name }} &nbsp;<span uk-icon="icon: menu"></span><input name="{{ $page->url }}" type="number" class="uk-hidden" value="{{ $page->order }}" /></li>
                        @endforeach
                    </ul>
                    <div class="uk-text-right">
                        <button class="uk-button uk-button-primary" type="submit" title="Click to update">Update</button>
                    </div>
                </form>                    
                @else
                <div>
                    <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                        <p>There are no Pages available yet. Please <a href="{{ route('pages.create') }}">create a one</a>!</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

<style>
    #navigation-list li {
        cursor: pointer;
    }
</style>

@endsection

@section('scripts')

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $("#navigation-list").sortable({
        stop: function(event, ui){
            var cnt = 1;
            $(this).children('li').each(function(){
                $(this).children('input:first').val(""+cnt+"");
                cnt++;
            });
        }
    });
</script>
@endsection
