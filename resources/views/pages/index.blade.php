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
        <h1><span class="ion-speedometer"></span>Pages</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>If the delete action is not available, that means the relevant page is a static page. You're only authorize to edit such pages. If you need to delete a static page, Please contact admin.</div>
        <ul class="uk-breadcrumb">
            <li><span>Pages</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('pages.create') }}">Add Page</a>
            </div>
            @if ($pages->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Banner Image</th>
                            <th>Page name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                        <tr>
                            <td>
                                @if ($page->image)
                                    <div style="height: 80px; width: 80px; background-image:url({{ asset('storage') .'/'. $page->image ; }}); background-size: cover; background-position: center;"></div>
                                @else
                                <div style="height: 80px; width: 80px; background: #ccc; background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center;"><span style="font-size: 13px; font-weight: 600;">No Image</span></div>
                                @endif
                            </td>
                            <td>{{ $page->name }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('pages.edit', $page->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                @if (!$page->static)
                                <div class="d-inline-block">
                                    <a class="uk-button uk-button-danger" onclick="handleDelete({{ $page->id }})">Delete</a>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no Pages available yet. Please create a one!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="GET" id="deletePageForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Page</h4>
            <p>Are you sure you want to delete this page?</p>
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
        var form = document.getElementById('deletePageForm');
        form.action = '/pages/' + id + '/delete';
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection
