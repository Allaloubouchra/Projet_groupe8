<?php

namespace App\Http\Controllers;

use App\Models\Post_media;
use App\Http\Requests\StorePost_mediaRequest;
use App\Http\Requests\UpdatePost_mediaRequest;

class PostMediaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePost_mediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost_mediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post_media  $post_media
     * @return \Illuminate\Http\Response
     */
    public function show(Post_media $post_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post_media  $post_media
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_media $post_media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePost_mediaRequest  $request
     * @param  \App\Models\Post_media  $post_media
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost_mediaRequest $request, Post_media $post_media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_media  $post_media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_media $post_media)
    {
        //
    }
}
