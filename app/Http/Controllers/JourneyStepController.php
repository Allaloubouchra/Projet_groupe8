<?php

namespace App\Http\Controllers;

use App\Models\journeyStep;
use App\Http\Requests\StorejourneyStepRequest;
use App\Http\Requests\UpdatejourneyStepRequest;

class JourneyStepController extends Controller
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
     * @param  \App\Http\Requests\StorejourneyStepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejourneyStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\journeyStep  $journeyStep
     * @return \Illuminate\Http\Response
     */
    public function show(journeyStep $journeyStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\journeyStep  $journeyStep
     * @return \Illuminate\Http\Response
     */
    public function edit(journeyStep $journeyStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejourneyStepRequest  $request
     * @param  \App\Models\journeyStep  $journeyStep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejourneyStepRequest $request, journeyStep $journeyStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\journeyStep  $journeyStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(journeyStep $journeyStep)
    {
        //
    }
}
