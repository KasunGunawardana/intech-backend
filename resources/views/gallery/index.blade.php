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
        <h1><span class="ion-speedometer"></span>Galleries</h1>
        <ul class="uk-breadcrumb">
            <li><span>Galleries List</span></li>
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
            <div class="uk-text-right">
                <a class="uk-button uk-button-primary" href="{{ route('gallery.create') }}">Add Gallery</a> <a class="uk-button uk-button-secondary" href="{{ route('gallery.list') }}">Update Gallery Order</a>
            </div>
            @if ($galleries->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Gallery name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->name }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ route('gallery.upload', $gallery->id) }}" class="uk-button uk-button-secondary">Upload Images</a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ route('gallery.single-list-view', $gallery->id) }}" class="uk-button uk-button-default">Image List</a>
                                </div>
                                <div class="d-inline-block">
                                    <a class="uk-button uk-button-danger" onclick="handleDelete({{ $gallery->id }})">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no Galleries available yet. Please create a one!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="GET" id="deleteGalleryForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Gallery</h4>
            <p>Are you sure you want to delete this gallery?</p>
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

<style>
    .section.text-white h4,
    .section.text-white p {
        color: #fff!important;
    }
</style>

@endsection

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteGalleryForm');
        form.action = '/gallery/' + id + '/delete';
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection
