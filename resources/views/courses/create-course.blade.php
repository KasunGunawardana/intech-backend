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
        <h1><span class="ion-speedometer"></span>
            {{
                isset($course) ? 'Edit Course' : 'Add Course'
            }} 
        </h1>
        <ul class="uk-breadcrumb">
            <li><a href="courses">Courses</a></li>
            <li><a href="{{ URL::to('courses'); }}">Courses</a></li>
            <li><span>{{
                isset($course) ? 'Edit Course' : 'Add Course'
            }} </span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-card uk-card-default uk-card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="uk-alert-danger" data-uk-alert>
                        <a class="uk-alert-close" data-uk-close></a>
                        <p>{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ isset($course) ? route('courses.update', $course->id) : route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($course))
                    @method('PUT')
                @endif
                <fieldset class="uk-fieldset">

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="name">Course Name</label>
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Course Name" value="{{ (isset($course)) ? $course->name : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[Diploma in multimedia 3D]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="heading">Heading</label>
                        <input class="uk-input" id="heading" name="heading" type="text" placeholder="Heading" value="{{ (isset($course)) ? $course->heading : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[Learn multimedia 3D from...]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="sub_heading">Sub Heading</label>
                        <input class="uk-input" id="sub_heading" name="sub_heading" type="text" placeholder="Sub Heading" value="{{ (isset($course)) ? $course->sub_heading : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[Become a part of Successful 3D multimedia journey]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="meta_title">Meta Title</label>
                        <input class="uk-input" id="meta_title" name="meta_title" type="text" placeholder="Meta Title" value="{{ (isset($course)) ? $course->meta_title : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Example</span>[A brief explanation (Benefits you get if you follow this course...)]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="meta_description">Meta Description (Max word count: 400)</label>
                        <textarea class="uk-textarea" id="meta_description" name="meta_description" rows="5" placeholder="Meta Description">{{ (isset($course)) ? $course->meta_description : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[A brief explanation (Benefits you get if you follow this course etc.)]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="keywords">Keywords (Separate each keyword by a comma)</label>
                        <textarea class="uk-textarea" id="keywords" name="keywords" rows="5" placeholder="Keywords">{{ (isset($course)) ? $course->keywords : ''}}</textarea>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Words used to find information when searching (Diploma,Graphics, Photoshop etc.)]</div>
                    </div>

                    {{-- <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="course_type">Course Type</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="course_type" id="course_type">
                                <option>Diploma</option>
                                <option>Certificate</option>
                            </select>
                        </div>
                    </div> --}}
            
                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="content">Content</label>
                            <input type="hidden" name="content" id="content" placeholder="Content" value="{{ (isset($course)) ? $course->content : ''}}">
                            <trix-editor input="content">Content</trix-editor>
                            {{-- <textarea class="uk-textarea" name="content" rows="5" placeholder="Content"></textarea> --}}
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Full explanation]</div>
                        </div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="syllabus">Syllabus</label>
                            <input type="hidden" name="syllabus" id="syllabus" placeholder="Syllabus" value="{{ (isset($course)) ? $course->syllabus : ''}}">
                            <trix-editor input="syllabus">Content</trix-editor>
                            {{-- <textarea class="uk-textarea" name="syllabus" rows="5" placeholder="Syllabus"></textarea> --}}
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Specify as list items]</div>
                        </div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <div>
                            <label class="uk-form-label" for="requirements">Entry Requirements</label>
                            <input type="hidden" name="requirements" id="requirements" placeholder="Entry Requirements" value="{{ (isset($course)) ? $course->requirements : ''}}">
                            <trix-editor input="requirements">Content</trix-editor>
                            {{-- <textarea class="uk-textarea" id="requirements" name="requirements" rows="5" placeholder="Entry Requirements"></textarea> --}}
                            <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Specify as list items]</div>
                        </div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="duration">Duration</label>
                        <input class="uk-input" id="duration" name="duration" type="text" placeholder="Course Duration" value="{{ (isset($course)) ? $course->duration : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="content">Price</label>
                        <input class="uk-input" id="content" name="price" type="text" placeholder="Price/Fee" value="{{ (isset($course)) ? $course->price : ''}}">
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="level">Level</label>
                        <input class="uk-input" id="level" name="level" type="text" placeholder="Level" value="{{ (isset($course)) ? $course->level : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[If you didn't specify this, Course Type will be taken as the level. (Diploma etc.)]</div>
                    </div>

                    <div class="uk-margin input-wrapper ">
                        <label class="uk-form-label" for="medium">Medium</label>
                        <input class="uk-input" id="medium" name="medium" type="text" placeholder="Medium/Language" value="{{ (isset($course)) ? $course->medium : ''}}">
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>[Default = 'Sinhala']</div>
                    </div>

                    <div class="uk-margin input-wrapper">
                        <label class="uk-form-label" for="course_type">Course Type</label>
                        <div uk-form-custom="target: > * > span:first-child">
                            <select name="course_type" id="course_type">
                                @foreach ($course_types as $course_type)
                                <option value="{{ $course_type->id }}" 
                                    @if (isset($course))
                                        {{ ($course_type->id == $course->course_type_id)? 'selected' : '' }}
                                    @endif
                                    >{{ $course_type->name }}</option>
                                @endforeach
                            </select>
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Select the course type/level</div>
                    </div>

                    <div class="uk-margin input-wrapper">
                        <label class="uk-form-label" for="instructor">Instructor</label>
                        <div uk-form-custom="target: > * > span:first-child">
                            <select name="instructor" id="instructor">
                                @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}" 
                                    @if (isset($course))
                                        {{ ($instructor->id == $course->instructor_id)? 'selected' : '' }}
                                    @endif
                                    >{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Note</span>Assign the instructor. Make sure that you've added the instructor.</div>
                    </div>
                    
                    <div class="uk-margin input-wrapper ">
                        @if (isset($course))
                            <label class="uk-form-label uk-margin-bottom" for="image">Image</label>
                            <img src="{{ asset('storage') .'/'. $course->image ; }}" alt="{{ $course->name }}">
                            <div class="uk-margin-small small-note"><span class="uk-badge">Note</span>[Upload an Image only if you need to replace this one!]</div>
                        @else
                        <label class="uk-form-label" for="image">Upload the Image</label>
                        @endif
                        <div uk-form-custom>
                            <input type="file" name="image" id="image">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"><span uk-icon="icon: image"></span>&nbsp; Upload</button>
                        </div>
                        <div class="uk-margin-small-top small-note"><span class="uk-badge">Recommended</span> Dimensions: 500 x 410 (pixels)</div>
                    </div>
            
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary" type="submit">{{ (isset($course)) ? 'Update' : 'Add Course'}}</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script>
    flatpickr("#published_at", {
        enableTime: true
    });

    $(document).ready(function() {
        $('.tags-selector').select2();
    });
</script> --}}
@endsection
