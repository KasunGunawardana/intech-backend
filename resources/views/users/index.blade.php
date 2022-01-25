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
        <h1><span class="ion-speedometer"></span>Users</h1>
        <ul class="uk-breadcrumb">
            <li><span>Users</span></li>
            <li><span>Users</span></li>
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
            {{-- <div class="uk-text-right">
                <a class="uk-button uk-button-primary" href="{{ route('users.create') }}">Add User</a>
            </div> --}}
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <img class="uk-preserve-width uk-border-circle" style="max-width: 50px" src="{{ Avatar::create($user->email)->toBase64() }}" alt="{{ $user->name }}">
                            </td>
                            <td style="text-transform: capitalize">{{ $user->name }}</td>
                            <td style="text-transform: capitalize">{{ $user->role }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('users.edit', $user->id) }}" class="uk-button uk-button-primary">Update Password</a>
                                </div>
                                @if ($user->role == 'user')
                                <div class="d-inline-block">
                                    <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                                        @csrf
                                        <button class="uk-button uk-button-secondary" type="submit" title="Click to grant admin privilages">Make Admin</button>
                                    </form>
                                </div>
                                @endif
                                
                                @if ($user->role == 'user')
                                <div class="d-inline-block">
                                    <button class="uk-button uk-button-danger" title="Click to delete" onclick="handleDelete({{ $user->id }})">Delete</button>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="GET" id="deleteUserForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete User</h4>
            <p>Are you sure you want to delete this user?</p>
            {{-- <h5 style="margin-top: 0;"><del><span id="get-text"></span></del></h5> --}}
            <div class="uk-text-right">
                <button class="uk-button uk-button-danger" type="submit">Delete</button>
                <button class="uk-button uk-button-primary uk-modal-close" type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteUserForm');
        form.action = '/users/' + id + '/delete';
        console.log(form);
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection
