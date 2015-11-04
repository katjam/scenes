<?php

namespace Scenes\Http\Controllers;

use Illuminate\Http\Request;
use Scenes\Character;
use Scenes\Http\Requests;
use Scenes\Http\Controllers\Controller;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $characters = Character::all();
      return view('characters.index', compact('characters'));
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
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Scenes\Character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Scenes\Character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
       return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Scenes\Character
     * @return \Illuminate\Http\Response
     */
    public function update(Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Scenes\Character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
