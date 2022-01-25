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
        <h1><span class="ion-speedometer"></span>Gallery Images</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('gallery.index') }}">Galleries</a></li>
            <li><span>{{ $galleryName->name }} (Gallery Name)</span></li>
            <li><span>Gallery Images</span></li>
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
            @if ($galleryImagesById->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleryImagesById as $galleryImage)
                        <tr>
                            <td>
                                <div style="height: 80px; width: 80px; background-image:url({{ asset('storage') .'/'. $galleryImage->image ; }}); background-size: cover; background-position: center;"></div>
                            </td>
                            <td>
                                <div class="d-inline-block">
                                    <form action="{{ route('gallery.single-list-view.destroy', $galleryImage->id) }}" method="GET">
                                        @csrf
                                        @method('DELETE')
                                        <button class="uk-button uk-button-danger" type="submit" title="Click to delete this image">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no images available in this gallery. Please upload!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection


@section('css')

@endsection

@section('scripts')

@endsection
