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
        <h1><span class="ion-speedometer"></span>Logo Slider</h1>
        <ul class="uk-breadcrumb">
            <li><span>Logo Slider</span></li>
        </ul>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[You must add at least 3 logos to appear the logo slider on the homepage]</div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
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
        <div class="uk-card uk-card-default uk-card-body">
            
            <form method="POST" action="{{ route('logo-slider.update', $logoslider->id) }}">
                @csrf
                @method('PUT')
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="visiblity">Enable Logo Slider</label>
                        <div class="m-6">
                            <label class="relative">
                              <input
                                type="checkbox" name="visiblity"
                                class="w-10 h-4 transition bg-gray-300 rounded-full shadow-inner outline-none appearance-none checked:bg-blue-500 disabled:bg-gray-100"
                                @if (isset($logoslider))
                                    {{ ($logoslider->visiblity == true) ? 'checked' : '' }}
                                @else
                                    checked
                                @endif
                              />
                              <span
                                class="absolute top-0 left-0 w-4 h-4 transition-all transform scale-150 bg-white rounded-full shadow-sm"
                              ></span>
                            </label>
                        </div>                      
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Enable this to show the logo slider in the front page]</div>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">Update</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
        <br>
        @if ($logoslider->visiblity)
        <div class="uk-card uk-card-default uk-card-body">
            <div class="uk-text-right">
                <a class="uk-button uk-button-primary" href="{{ route('logo.create') }}">Add a Logo</a>
            </div>
            <div class="">
                <h3>Logos</h3>
                <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Drag and drop the logos in the order you want. Click save once you have finished making changes. If you do not save you will loose the changes.]</div>
            </div>
            <div>
                <form action="{{ route('logos-sort') }}" method="POST">
                    @csrf
                    <ul id="navigation-list">
                        @foreach ($logo_images as $logo_image)
                            <li><span style="width: 112px; height: 80px; background-image:url({{ asset('storage') .'/'. $logo_image->image ; }}); background-size: cover; background-position: center;"></span> {{ $logo_image->name }} &nbsp;<span uk-icon="icon: menu"></span><input name="{{ $logo_image->id }}" type="number" class="uk-hidden" value="{{ $logo_image->logo_order }}" />
                                <span class="icon-close" title="Click to delete this logo" onclick="handleDelete({{ $logo_image->id }})">
                                    <span data-uk-icon="icon:close; ratio: 0.5"></span>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="uk-text-right">
                        <button class="uk-button uk-button-primary" type="submit" title="Click to update">Update the order</button>
                    </div>
                </form>
            </div>
            
        </div>
        @endif
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="POST" id="deleteLogoForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Logo</h4>
            <p>Are you sure you want to delete this logo?</p>
            {{-- <h5 style="margin-top: 0;"><del><span id="get-text"></span></del></h5> --}}
            <div class="uk-text-right">
                <button class="uk-button uk-button-danger" type="submit">Delete</button>
                <button class="uk-button uk-button-primary uk-modal-close" type="button">Cancel</button>
            </div>
        </form>
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

      #navigation-list li {
        max-width: 450px;
        cursor: pointer;
        position: relative;
        margin-bottom: 15px
    }

    .icon-close {
        border: 1px solid #b70909;
        border-radius: 50%;
        position: absolute;
        top: 0;
        right: -18px;
        transform: translate(-50%,-50%);
        line-height: 0;
        padding: 3px;
    }

    .icon-close .uk-icon {
        color: #b70909;
    }
 
</style>
@endsection

@section('scripts')

<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteLogoForm');
        form.action = '/logo-slider/' + id + '/delete';
        console.log(form);
        UIkit.modal('#modal-close-default').show();
    }
    
</script>

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
