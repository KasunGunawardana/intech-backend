<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePageRequest;

use App\Http\Requests\UpdatePageRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\Page;

use App\Models\Instructor;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index')->with('pages', Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePageRequest $request)
    {
        $pages_count = count(Page::all());
        $page_order= $pages_count + 1;

        if ($request->show_nav) {
            $show_nav = TRUE;
        } else {
            $show_nav = FALSE;
        }

        if ($request->contained_box) {
            $contained_box = TRUE;
        } else {
            $contained_box = FALSE;
        }

        if ($request->hasFile('image')) {

            $image = $request->image->store('pages');
        } else {
            $image = null;
        }

        Page::create([
            'name' => $request->name,
            'heading' => $request->heading,
            'url' => $request->url,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'content' => $request->content,
            'show_nav' => $show_nav,
            'static' => FALSE,
            'contained_box' => $contained_box,
            'order' => $page_order,
            'image' => $image
        ]);

        session()->flash('success', 'Page added successfully');

        return redirect(route('pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $page = Page::all()->where('url', $url)->first();

        if ($page == null) {
            return abort(404);
        }
        
        return view('front.pages.single-page')->with('page', $page)->with('instructors', Instructor::all()->sortBy('instructor_order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);

        return view('pages.create')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->only(['name', 'heading', 'url', 'meta_title', 'meta_description', 'keywords', 'content']);

        if ($request->show_nav) {
            $show_nav = TRUE;
        } else {
            $show_nav = FALSE;
        }

        if ($request->contained_box) {
            $contained_box = TRUE;
        } else {
            $contained_box = FALSE;
        }

        $data['show_nav'] = $show_nav;

        $data['static'] = FALSE;

        $data['contained_box'] = $contained_box;

        if ($request->hasFile('image')) {

            $image = $request->image->store('pages');

            Storage::delete($page->image);

            $data['image'] = $image;
        }

        $page->update($data);

        session()->flash('success', 'Page updated successfully.');

        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);

        Storage::delete($page->image);
        
        $page->forceDelete();

        session()->flash('success', 'Page deleted successfully');

        return redirect(route('pages.index'));
    }

    public function navList() {
        $pagesList = Page::all()->where('show_nav', TRUE)->sortBy('order');
        return view('pages.list')->with('pages', $pagesList);
    }

    public function navListSort(Request $request) {
        $nav_array = $request->except('_token');

        $nav_array_order = collect($nav_array);

        $nav_array_order->each(function ($key, $item) {
            $nav = Page::where('url', $item)->firstOrFail();
            $nav->order = $key;
            $nav->save();
        });

        session()->flash('success', 'Successfully updated.');

        return redirect(route('pages.nav-list'));
    }

    public function contact() {
        return view('front.pages.contact');
    }

    public function showNavigationList() {

        

    }
}
