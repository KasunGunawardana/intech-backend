<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Blog;

use App\Http\Requests\UpdateBlogRequest;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');

        if($search) {
            $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(8);
        } else {
            $posts = Post::orderBy('created_at', 'desc')->simplePaginate(8);
        }
        
        $popularPosts = Post::all()->sortByDesc('views')->take(3);
        
        return view('front.blog.index')->with('posts', $posts)->with('categories', Category::all())->with('popularPosts', $popularPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $blog = Blog::first();
        
        return view('blog.create')->with('blog', $blog);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $post = Post::all()->where('url', $url)->first();

        if ($post == null) {
            return abort(404);
        }

        $post->increment('views');

        $popularPosts = Post::all()->sortByDesc('views')->take(3);
        
        return view('front.blog.single-blog')->with('post', $post)->with('categories', Category::all())->with('popularPosts', $popularPosts);
    }

    public function categoryShow(Category $category)
    {
        $popularPosts = Post::all()->sortByDesc('views')->take(3);

        return view('front.blog.single-category')->with('category', $category)->with('posts', $category->posts()->orderBy('created_at', 'desc')->simplePaginate(8))->with('categories', Category::all())->with('popularPosts', $popularPosts);
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
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->only(['description_heading', 'description']);

        if ($request->show_nav) {
            $show_nav = TRUE;
        } else {
            $show_nav = FALSE;
        }

        $data['show_nav'] = $show_nav;

        $blog->update($data);

        session()->flash('success', 'Blog info updated successfully');

        return redirect(route('blog.create'));
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
