<?php

namespace Scenes\Http\Controllers;

use Illuminate\Http\Request;

use Scenes\Http\Requests;
use Scenes\Http\Controllers\Controller;
use Scenes\Setting;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $settings = Setting::all();
      return view('settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('settings.create');
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
     * @param  \Scenes\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
      $scns = $setting->scenes;
      $count = 0;
      foreach ($scns as $s) {
        $count += $s->page_count;
      }
      $page_count = floor($count / 8) . ' '. fmod($count, 8) . '/8';

      return view('settings.show', compact('setting', 'page_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Scenes\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Scenes\Setting
     * @return \Illuminate\Http\Response
     */
    public function update(Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Scenes\Setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
