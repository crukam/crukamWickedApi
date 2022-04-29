<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\EpisodeResource;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        //return CharacterResource::collection(Character::paginate(5));
        return response()->json( new CharacterResource(Character::paginate(5)), 200);
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
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return new CharacterResource($character);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect('/')->with('success', 'Character deleted');
    }

    
}
