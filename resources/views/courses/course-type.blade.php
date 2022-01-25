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
        <h1><span class="ion-speedometer"></span>Course Type</h1>
        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>If the delete action is not available, that means the relevant course type is assigned to one or more courses. Unassign them if you want to delete a relevant course type.</div>
        <ul class="uk-breadcrumb">
            <li><a href="courses">Courses</a></li>
            <li><span href="courses/course-type">Course Type</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('course-types.create') }}">Add Course Type</a>
            </div>
            @if ($course_types->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Course Type</th>
                            <th>Courses (Count)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course_types as $course_type)
                        <tr>
                            <td>{{ $course_type->name }}</td>
                            <td>{{ $course_type->courses->count() }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('course-types.edit', $course_type->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                @if (!$course_type->courses->count() > 0)
                                <div class="d-inline-block">
                                    <button class="uk-button uk-button-danger" onclick="handleDelete({{ $course_type->id }})">Delete</button>
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
                    <p>There are no Course Types available yet. Please create a one!</p>
                </div>
            </div>
            @endif
            
        </div>
        <br>
        @if ($course_types->count() > 1)
        <div class="uk-card uk-card-default uk-card-body">
            <div class="">
                <h3>Course Types Order</h3>
                <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Drag and drop the course types in the order you want. Click save once you have finished making changes. If you do not save you will loose the changes.]</div>
            </div>
            <div>
                <form action="{{ route('course-type-sort') }}" method="POST">
                    @csrf
                    <ul id="navigation-list">
                        @foreach ($course_types as $course_type)
                            <li>{{ $course_type->name }} &nbsp;<span uk-icon="icon: menu"></span><input name="{{ $course_type->id }}" type="number" class="uk-hidden" value="{{ $course_type->type_order }}" /></li>
                        @endforeach
                    </ul>
                    <div class="uk-text-right">
                        <button class="uk-button uk-button-primary" type="submit" title="Click to update">Update</button>
                    </div>
                </form>
            </div>
            
        </div>
        @endif
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="POST" id="deleteTypeForm">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Course Type</h4>
            <p>Are you sure you want to delete this course type?</p>
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
    #navigation-list li {
        cursor: pointer;
    }
</style>

@endsection

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteTypeForm');
        form.action = '/course-types/' + id;
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

