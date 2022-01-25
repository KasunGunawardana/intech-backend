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
        <h1><span class="ion-speedometer"></span>Courses List</h1>
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('courses.index') }}">Courses</a></li>
            <li><span href="courses/courses">Courses</span></li>
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
                <a class="uk-button uk-button-primary" href="{{ route('courses.create') }}">Add Course</a>
            </div>
            @if ($courses->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Course</th>
                            <th>Course Type</th>
                            {{-- <th>Description</th> --}}
                            <th>Instructor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td><div style="height: 80px; width: 80px; background-image:url({{ asset('storage') .'/'. $course->image ; }}); background-size: cover; background-position: center;"></div></td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->course_type->name }}</td>
                            {{-- <td><?php str_limit($course->meta_description, 50); ?></td> --}}
                            <td>{{ $course->instructor->name }}</td>
                            <td>
                                @if ($course->trashed())
                                <div class="d-inline-block">
                                    <form action="{{ route('restore-courses', $course->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="uk-button uk-button-primary">Restore</button>    
                                    </form> 
                                </div>                               
                                @else
                                <div class="d-inline-block">
                                    <a href="{{ route('courses.edit', $course->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                @endif
                                <div class="d-inline-block">
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="uk-button uk-button-danger" type="submit" title="Click to draft this course">
                                            {{ $course->trashed() ? 'Delete' : 'Trash' }}
                                        </button>
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
                    <p>There are no Courses available yet. Please create a one!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
