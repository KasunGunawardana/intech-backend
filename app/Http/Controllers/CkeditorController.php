<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ckeditor;

use Illuminate\Support\Facades\Storage;

class CkeditorController extends Controller
{
    public function ckUpload(Request $request) {
        $image = $request->upload->store('uploads');
        $url = asset('storage') .'/'. $image;
        return response()->json([
            'link'=> ''.$url.''
        ]);
        // $CkeditorFuncNum = $request->input('CkeditorFuncNum');
        // $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum', '$url', 'Image Uploaded')</script>";
        // echo $status;

        
    }

    public function imageUpload(Request $request) {
        // $imgpath = $request->upload->store('uploads');
        // $url = asset('storage') .'/'. $imgpath;
        // return response()->json(['location' => $url]);
        $image = $request->file->store('uploads');
        $url = asset('storage') .'/'. $image;
        return response()->json(['location' => ''.$url.'']);
    }
}
