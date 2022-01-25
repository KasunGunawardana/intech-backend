<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateGalleryRequest;

use App\Models\Gallery;
use App\Models\GalleryList;
use App\Models\GalleryImage;

class GalleriesController extends Controller
{

    public function general()
    {

        $gallery = Gallery::first();
        
        return view('gallery.general')->with('gallery', $gallery);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index')->with('galleries', GalleryList::all()->sortBy('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function view()
    {

        $gallery = Gallery::first();

        return view('front.gallery.index')->with('gallery', $gallery)->with('galleries', GalleryList::all()->sortBy('order'))->with('gallery_images', GalleryImage::all()->sortBy('order'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public static function renderGalleryImages($id) {
        $galleryById = GalleryImage::all()->where('gallery_list_id', $id);

        if($galleryById) {
            return $galleryById;
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $data = $request->only(['sub_heading']);

        if ($request->show_nav) {
            $show_nav = TRUE;
        } else {
            $show_nav = FALSE;
        }

        $data['show_nav'] = $show_nav;

        $gallery->update($data);

        session()->flash('success', 'Gallery info updated successfully');

        return redirect(route('gallery.general'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
