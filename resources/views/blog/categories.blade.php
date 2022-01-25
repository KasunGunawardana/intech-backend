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
        <h1><span class="ion-speedometer"></span>Category</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>If the delete action is not available, that means the relevant category is assigned to one or more posts. Unassign them if you want to delete a relevant category.</div>
        <ul class="uk-breadcrumb">
            <li><span>Category</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('categories.create') }}">Add Category</a>
            </div>
            @if ($categories->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Posts (Count)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->posts->count() }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                @if (!$category->posts->count() > 0)
                                <div class="d-inline-block">
                                    <button class="uk-button uk-button-danger" onclick="handleDelete({{ $category->id }})">Delete</button>
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
                    <p>There are no Categories available yet. Please create a one!</p>
                </div>
            </div>
            @endif
            
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="POST" id="deleteCategoryForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Category</h4>
            <p>Are you sure you want to delete this category?</p>
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
        var form = document.getElementById('deleteCategoryForm');
        form.action = '/categories/' + id;
        console.log(form);
        UIkit.modal('#modal-close-default').show();
    }
    
</script>
@endsection

