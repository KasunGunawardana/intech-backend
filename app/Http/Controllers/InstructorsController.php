<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateInstructorRequest;

use App\Http\Requests\UpdateInstructorRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\Instructor;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructors.index')->with('instructors', Instructor::all()->sortBy('instructor_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructors.create')->with('instructors', Instructor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInstructorRequest $request)
    {
        if ($request->hasFile('image')) {

            $image = $request->image->store('instructors');
        } else {
            $image = null;
        }

        $instructors_count = count(Instructor::all());
        $instructor_order = $instructors_count + 1;

        Instructor::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'tel' => $request->tel,
            'additional_contact' => $request->additional_contact,
            'address' => $request->address,
            'image' => $image,
            'instructor_order' => $instructor_order
        ]);

        session()->flash('success', 'Instructor added successfully');

        return redirect(route('instructors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('instructors.create')->with('instructor', $instructor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        $data = $request->only(['name', 'title', 'description', 'tel', 'additional_contact', 'address']);

        if ($request->hasFile('image')) {

            $image = $request->image->store('instructors');

            Storage::delete($instructor->image);

            $data['image'] = $image;
        }

        $instructor->update($data);

        session()->flash('success', 'Instructor updated successfully.');

        return redirect(route('instructors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {

        Storage::delete($instructor->image);
        
        $instructor->delete();

        session()->flash('success', 'Instructor deleted successfully');

        return redirect(route('instructors.index'));
    }

    public function instructorsList() {
        $instructorsList = Instructor::all()->sortBy('instructor_order');
        return view('instructors.list')->with('instructors', $instructorsList);
    }

    public function instructorsListSort(Request $request) {
        $instructor_array = $request->except('_token');

        $instructor_array_order = collect($instructor_array);

        $instructor_array_order->each(function ($key, $item) {
            $instructor = Instructor::where('id', $item)->firstOrFail();
            $instructor->instructor_order = $key;
            $instructor->save();
        });

        session()->flash('success', 'Successfully updated.');

        return redirect(route('instructors.list'));
    }
}
