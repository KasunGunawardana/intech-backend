<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\Course;
use App\Models\CourseType;
use App\Models\Instructor;

class CoursesController extends Controller
{

    public function __construct() {
        $this->middleware('VerifyCourseTypesCount')->only(['create', 'store']);
        $this->middleware('VerifyInstructorCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.courses')->with('courses', Course::all());
    }

    public function allCourses() {
        return view('front.courses.all-courses')->with('courses', Course::all()->sortBy('course_order'))->with('course_types', CourseType::all()->sortBy('type_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create-course')->with('course_types', CourseType::all())->with('instructors', Instructor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourseRequest $request)
    {
        $courses_count = count(Course::all());
        $course_order = $courses_count + 1;

        $image = $request->image->store('courses');

        $url = clean($request->name);

        $newUrl = str_replace(" ", "-", strtolower($url));

        Course::create([
            'name' => $request->name,
            'url' => $newUrl,
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'content' => $request->content,
            'syllabus' => $request->syllabus,
            'requirements' => $request->requirements,
            'duration' => $request->duration,
            'price' => $request->price,
            'level' => $request->level,
            'medium' => $request->medium,
            'course_type_id' => $request->course_type,
            'instructor_id' => $request->instructor,
            'image' => $image,
            'course_order' => $course_order
        ]);

        session()->flash('success', 'Course added successfully');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $course = Course::all()->where('url', $url)->first();

        if ($course == null) {
            return abort(404);
        }
        
        return view('front.courses.single-course')->with('course', $course)->with('course_types', CourseType::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.create-course')->with('course', $course)->with('course_types', CourseType::all())->with('instructors', Instructor::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {

        $data = $request->only(['name', 'heading', 'sub_heading', 'meta_title', 'meta_description', 'keywords', 'content', 'syllabus', 'requirements', 'duration', 'price', 'level', 'medium']);

        $data['course_type_id'] = $request->course_type;

        $data['instructor_id'] = $request->instructor;

        $url = clean($data['name']);

        $newUrl = str_replace(" ", "-", strtolower($url));

        $data['url'] = $newUrl;

        if ($request->hasFile('image')) {

            $image = $request->image->store('courses');

            Storage::delete($course->image);

            $data['image'] = $image;
        }

        $course->update($data);

        session()->flash('success', 'Course updated successfully.');

        return redirect(route('courses.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::withTrashed()->where('id', $id)->firstOrFail();

        if($course->trashed()) {
            Storage::delete($course->image);
            $course->forceDelete();
        } else {
            $course->delete();
        }

        session()->flash('success', 'Course deleted successfully');

        return redirect(route('courses.index'));
    }

    /**
     * Return treasged courses
     *
     */
    public function trashed()
    {
        $trashed = Course::onlyTrashed()->get();

        return view('courses.courses')->with('courses', $trashed);
    }

    public function restore($id)
    {
        $course = Course::withTrashed()->where('id', $id)->firstOrFail();
        
        $course->restore();

        session()->flash('success', 'Course restored successfully.');

        return redirect()->back();
    }

    public function coursesList() {
        $coursesList = Course::all()->sortBy('course_order');
        return view('courses.list')->with('courses', $coursesList);
    }

    public function coursesListSort(Request $request) {
        $course_array = $request->except('_token');

        $course_array_order = collect($course_array);

        $course_array_order->each(function ($key, $item) {
            $course = Course::where('id', $item)->firstOrFail();
            $course->course_order = $key;
            $course->save();
        });

        session()->flash('success', 'Successfully updated.');

        return redirect(route('courses.list'));
    }

    public function searchResultFetch(Request $request)
    {
     if($request->courses)
     {
      $query = $request->courses;
      $data = Course::where('name', 'LIKE', "%{$query}%")->get();
      if($data) {
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row)
        {
         $output .= '
         <li><a href="' . url("/course/{$row->url}") . '">'.$row->name.'</a></li>
         ';
        }
        $output .= '</ul>';
        echo $output;
      }
      
     }
    }
}
