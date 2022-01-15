<?php

namespace App\Http\Controllers;

use App\Models\journey;
use App\Http\Requests\StorejourneyRequest;
use App\Http\Requests\UpdatejourneyRequest;

class JourneyController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejourneyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejourneyRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function show(journey $journey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function edit(journey $journey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejourneyRequest  $request
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejourneyRequest $request, journey $journey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function destroy(journey $journey)
    {
        //
    }
}
