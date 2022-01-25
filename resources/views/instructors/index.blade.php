@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span>Instructors</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>If the delete action is not available, that means the relevant instructor is assigned to one or more courses. Unassign them, if you want to delete a relevant instructor.</div>
        <ul class="uk-breadcrumb">
            <li><span>Instructors</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('instructors.create') }}">Add Instructor</a>
            </div>
            @if ($instructors->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Assign Courses (Count)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructors as $instructor)
                        <tr>
                            <td><img class="uk-preserve-width uk-border-circle" style="max-width: 50px" src="{{ asset('storage') .'/'. $instructor->image ; }}" alt="{{ $instructor->name }}"></td>
                            <td>{{ $instructor->name }}</td>
                            <td>{{ $instructor->courses->count() }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('instructors.edit', $instructor->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                @if (!$instructor->courses->count() > 0)
                                    <div class="d-inline-block">
                                        <button class="uk-button uk-button-danger" onclick="handleDelete({{ $instructor->id }})">Delete</button>
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
                    <p>There are no Instructors available yet.</p>
                </div>
            </div>
            @endif
            
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="POST" id="deleteInstructorForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Instructor</h4>
            <p>Are you sure you want to delete this instructor? Make sure there are no courses assigned to him/her.</p>
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
        var form = document.getElementById('deleteInstructorForm');
        form.action = '/instructors/' + id;
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection

