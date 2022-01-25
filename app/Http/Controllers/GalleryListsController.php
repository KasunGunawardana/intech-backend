<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateSingleGalleryRequest;
use App\Http\Requests\UpdateSingleGalleryRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\GalleryList;

use App\Models\GalleryImage;

class GalleryListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSingleGalleryRequest $request)
    {
        $gallery_count = count(GalleryList::all());
        $gallery_order = $gallery_count + 1;

        GalleryList::create([
            'name' => $request->name,
            'content' => $request->content,
            'order' => $gallery_order,
        ]);

        session()->flash('success', 'Gallery added successfully');

        return redirect(route('gallery.index'));
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

        $gallery = GalleryList::find($id);

        return view('gallery.create')->with('gallery', $gallery);
    }

    public function upload(GalleryList $gallery)
    {
        return view('gallery.upload')->with('gallery', $gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSingleGalleryRequest $request, GalleryList $gallery)
    {
        $data = $request->only(['name', 'content']);

        $gallery->update($data);

        session()->flash('success', 'Gallery updated successfully.');

        return redirect(route('gallery.index'));
    }

    public function galleryList() {

        $galleryList = GalleryList::all()->sortBy('order');

        return view('gallery.list')->with('galleries', $galleryList);
    }

    public function galleryListSort(Request $request) {
        $gallery_array = $request->except('_token');

        $gallery_array_order = collect($gallery_array);

        $gallery_array_order->each(function ($key, $item) {
            $gallery = GalleryList::where('id', $item)->firstOrFail();
            $gallery->order = $key;
            $gallery->save();
        });

        session()->flash('success', 'Gallery order updated successfully');

        return redirect(route('gallery.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = GalleryList::find($id);

        $galleryImages = GalleryImage::all()->where('gallery_list_id', $id);

        foreach ($galleryImages as $galleryImage) {
            Storage::delete($galleryImage->image);
            $galleryImage->forceDelete();
        }
        
        $gallery->forceDelete();

        session()->flash('success', 'Gallery deleted successfully');

        return redirect(route('gallery.index'));
    }
}
