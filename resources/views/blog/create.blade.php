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
        <h1><span class="ion-speedometer"></span>Blog Module</h1>
        <ul class="uk-breadcrumb">
            <li><span>Blog</span></li>
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
            <form method="POST" action="{{ route('blog.update', $blog->id) }}">
                @csrf
                @method('PUT')
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="show_nav">Enable Blog Module</label>
                        <div class="m-6">
                            <label class="relative">
                              <input
                                type="checkbox" name="show_nav"
                                class="w-10 h-4 transition bg-gray-300 rounded-full shadow-inner outline-none appearance-none checked:bg-blue-500 disabled:bg-gray-100"
                                @if (isset($blog))
                                    {{ ($blog->show_nav == true) ? 'checked' : '' }}
                                @else
                                    checked
                                @endif
                              />
                              <span
                                class="absolute top-0 left-0 w-4 h-4 transition-all transform scale-150 bg-white rounded-full shadow-sm"
                              ></span>
                            </label>
                        </div>                      
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Enable this to show the blog link in the main navigation]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="description_heading">Sub Heading</label>
                        <input class="uk-input" id="description_heading" name="description_heading" type="text" placeholder="Sub Heading" value="{{ (isset($blog)) ? $blog->description_heading : ''}}">
                    </div>
            
                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="description">Sub Description</label>
                            <textarea class="uk-textarea" name="description" rows="5" placeholder="Sub Description">{{ (isset($blog)) ? $blog->description : ''}}</textarea>
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Brief explanation]</div>
                        </div>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

<style>
    input:checked[type='checkbox'] + span {
        left: 1.5rem;
        top: 0;
        background-color: blue;
      }
      input:checked[type='checkbox']:disabled {
        background-color: rgba(25, 21, 255, 0.5);
      }
      input:checked[type='checkbox']:disabled + span {
        background-color: rgb(93, 91, 233);
        box-shadow: none;
      }
      input[type='checkbox']:disabled + span {
        background-color: rgb(214, 211, 211);
        box-shadow: none;
      }

      input[type='checkbox'] {
        cursor: pointer;
      }

      img {
          display: inline;
        }
 
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script>
    flatpickr("#published_at", {
        enableTime: true
    });

    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script> --}}
@endsection
