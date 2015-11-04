<?php

namespace Scenes\Http\Controllers;

use Illuminate\Http\Request;
use Scenes\Scene;
use Scenes\Http\Requests;
use Scenes\Http\Controllers\Controller;

class ScenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $scenes = Scene::all();
      return view('scenes.index', compact('scenes'));
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
     * @param  \Scenes\Scene
     * @return \Illuminate\Http\Response
     */
    public function show(Scene $scene)
    {
       return view('scenes.show', compact('setting', 'scene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Scenes\Scene
     * @return \Illuminate\Http\Response
     */
    public function edit(Scene $scene)
    {
        return view('scenes.show', compact('setting','scene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Scenes\Scene
     * @return \Illuminate\Http\Response
     */
    public function update(Scene $scene)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Scenes\Scene
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scene $scene)
    {
        //
    }
}
