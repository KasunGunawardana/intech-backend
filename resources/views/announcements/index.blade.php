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
        <h1><span class="ion-speedometer"></span>Announcements</h1>
        <ul class="uk-breadcrumb">
            <li><span>Announcements</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('announcements.create') }}">Add Announcement</a>
            </div>
            @if ($announcements->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                        <tr>
                            <td>
                                @if ($announcement->image)
                                    <div style="height: 80px; width: 80px; background-image:url({{ asset('storage') .'/'. $announcement->image ; }}); background-size: cover; background-position: center;"></div>
                                @else
                                <div style="height: 80px; width: 80px; background: #ccc; background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center;"><span style="font-size: 13px; font-weight: 600;">No Image</span></div>
                                @endif
                            </td>
                            <td>{{ $announcement->name }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('announcements.edit', $announcement->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                <div class="d-inline-block">
                                    <button class="uk-button uk-button-danger" onclick="handleDelete({{ $announcement->id }})">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no Announcements available yet. Please create a one!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="POST" id="deleteAnnouncementForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Announcement</h4>
            <p>Are you sure you want to delete this announcement?</p>
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
        var form = document.getElementById('deleteAnnouncementForm');
        form.action = '/announcements/' + id;
        console.log(form);
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection
