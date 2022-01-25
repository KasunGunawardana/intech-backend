<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Block;

use App\Http\Requests\CreateBlockRequest;

class BlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blocks.index')->with('blocks', Block::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlockRequest $request)
    {
        Block::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        session()->flash('success', 'Block added successfully');

        return redirect(route('blocks.index'));
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
    public function edit(Block $block)
    {
        return view('blocks.create')->with('block', $block);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBlockRequest $request, Block $block)
    {
        $data = $request->only(['title', 'content']);

        $block->update($data);

        session()->flash('success', 'Block updated successfully');

        return redirect(route('blocks.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        $block->delete();

        session()->flash('success', 'Block deleted successfully');

        return redirect(route('blocks.index'));
    }
}
