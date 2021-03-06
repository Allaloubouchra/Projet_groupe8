<?php

namespace App\Http\Controllers;

use App\Models\rating;
use App\Http\Requests\StoreratingRequest;
use App\Http\Requests\UpdateratingRequest;

class RatingController extends Controller
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
     * @param  \App\Http\Requests\StoreratingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreratingRequest $request, $id)
    {

        $validated= $request->validate([
            'rating'=>'required|integer',
            'comment'=>'required|string'
        ]);
        $rating=new Rating();
        $rating->rating=$request['rating'];
        $rating->comment=$request['comment'];
        $rating->status=0;
        $rating->user_id=1;
        $rating->post_id=$id;
        $rating->save();

        return view('comment',['comment'=>$rating]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateratingRequest  $request
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateratingRequest $request, rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(rating $rating)
    {
        //
    }
}
