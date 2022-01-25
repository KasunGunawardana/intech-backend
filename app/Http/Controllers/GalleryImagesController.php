<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryList;
use App\Models\GalleryImage;

use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\UploadGalleryImagesRequest;

use Illuminate\Support\Facades\Storage;

class GalleryImagesController extends Controller
{

    public function index($id)
    {

        $galleryName = GalleryList::find($id)->first();

        $galleryImagesById = GalleryImage::all()->where('gallery_list_id', $id);

        return view('gallery.single-list')->with('galleryImagesById', $galleryImagesById)->with('galleryName', $galleryName);
    }


    public function imageUpload(Request $request, $id) {

        $this->validate(request(), [
            'file.*' => 'required|mimes:jpeg,jpg,png|max:3072'
        ]);
        
        $files = $request->file('file');

        $galleryList = GalleryList::find($id);        

    	if($files){
            foreach($files as $file) {
                $count = count(GalleryImage::all());

                $order = $count + 1;
                
                $image = $file->store('galleryimages');

                GalleryImage::create([
                    'gallery_list_id' => $galleryList->id,
                    'order' => $order,
                    'image' => $image
                ]);
            }
        }

        session()->flash('success', "Images successfully uploaded to '" . $galleryList->name ."'");

        return redirect(route('gallery.index'));
    }

    public function destroy($id)
    {
        $galleryImage = GalleryImage::find($id);

        Storage::delete($galleryImage->image);
        
        $galleryImage->forceDelete();

        session()->flash('success', 'Image deleted successfully');

        return redirect()->back();
    }

}
