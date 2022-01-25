<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LogoSlider;

use App\Models\LogoImage;

use App\Http\Requests\CreateLogoRequest;

use Illuminate\Support\Facades\Storage;

class LogoSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logoslider = LogoSlider::first();
        
        return view('logo-slider.index')->with('logoslider', $logoslider)->with('logo_images', LogoImage::all()->sortBy('logo_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logo-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLogoRequest $request)
    {
        $logo_count = count(LogoImage::all());
        $logo_order = $logo_count + 1;

        if ($request->hasFile('image')) {

            $image = $request->image->store('logos');
        }

        LogoImage::create([
            'name' => $request->name,
            'image' => $image,
            'logo_order' => $logo_order
        ]);

        session()->flash('success', 'Logo added successfully');

        return redirect(route('logo-slider.index'));
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
    public function update(Request $request, $id)
    {

        $LogoSlider = LogoSlider::find($id);

        if ($request->visiblity) {
            $getValue = TRUE;
        } else {
            $getValue = FALSE;
        }

        $LogoSlider->visiblity = $getValue;

        $LogoSlider->save();

        session()->flash('success', 'Updated successfully');

        return redirect(route('logo-slider.index'));
    }

    public function logoSort(Request $request) {
        $logo_array = $request->except('_token');

        $logo_array_order = collect($logo_array);

        $logo_array_order->each(function ($key, $item) {
            $logo = LogoImage::where('id', $item)->firstOrFail();
            $logo->logo_order = $key;
            $logo->save();
        });

        session()->flash('success', 'Logo Order Updated Successfully.');

        return redirect(route('logo-slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = LogoImage::find($id);

        Storage::delete($logo->image);
        
        $logo->forceDelete();

        session()->flash('success', 'Logo deleted successfully');

        return redirect(route('logo-slider.index'));
    }
}
