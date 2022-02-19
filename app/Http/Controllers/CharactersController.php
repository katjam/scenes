<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Scene;
use App\Character;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

      $char_sort = [];
      foreach ($characters as $c) {
        $char_sort[$c->cast_type][] = $c;
      }

      return view('characters.index', compact('char_sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Character::create($request->all());
      return Redirect::to('characters');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        $scns = $character->scenes->sortBy('setting_id');
        $page_count = Scene::page_count($scns);
        return view('characters.show', compact('scns', 'character', 'page_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
       return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
      $character->fill($request->all())->save();
      Session::flash('message', 'Successfully updated Character!');
      return Redirect::to('characters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
