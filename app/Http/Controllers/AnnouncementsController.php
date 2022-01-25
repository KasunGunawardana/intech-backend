<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;

use App\Http\Requests\CreateAnnouncementRequest;

use App\Http\Requests\UpdateAnnouncementRequest;

use Illuminate\Support\Facades\Storage;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('announcements.index')->with('announcements', Announcement::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAnnouncementRequest $request)
    {

        if ($request->hasFile('image')) {

            $image = $request->image->store('announcements');
        }

        Announcement::create([
            'name' => $request->name,
            'image' => $image
        ]);

        session()->flash('success', 'Announcement added successfully');

        return redirect(route('announcements.index'));
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
    public function edit($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.create')->with('announcement', $announcement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $data = $request->only(['name']);


        if ($request->hasFile('image')) {

            $image = $request->image->store('announcements');

            Storage::delete($announcement->image);

            $data['image'] = $image;
        }

        $announcement->update($data);

        session()->flash('success', 'Announcement updated successfully.');

        return redirect(route('announcements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement::find($id);

        Storage::delete($announcement->image);
        
        $announcement->forceDelete();

        session()->flash('success', 'Announcement deleted successfully');

        return redirect(route('announcements.index'));
    }
}
