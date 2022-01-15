<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\participants;
use App\Http\Requests\StoreparticipantsRequest;
use App\Http\Requests\UpdateparticipantsRequest;
use Illuminate\Foundation\Http\FormRequest;



class ParticipantsController extends Controller
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
   public function addparticipantsview(){
        return view("addparticipants");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreparticipantsRequest  $request
     * @return \Illuminate\Http\Response
     */
       public function addparticipants(Request $req){
           
           $validated = $req->validate([
               'fullname' => 'required|string',
               'email' => 'required|string',
               'age' => 'required|string',
               'sexe' => 'required|string',
           ]);
           
           $parts = new participants();
           $parts->fullname = $req->fullname;
           $parts->email = $req->email;
           $parts->age = $req->age;
           $parts->sexe = $req->sexe;
           $parts->save();

        return view("addparticipants");
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function show(participants $participants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function edit(participants $participants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateparticipantsRequest  $request
     * @param  \App\Models\participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateparticipantsRequest $request, participants $participants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function destroy(participants $participants)
    {
        //
    }
}
