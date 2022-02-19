<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$settings = Setting::all()->sortBy(function($setting) {
				return sprintf('%-12s%s', $setting->location, $setting->set_name);
			});
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
			Setting::create($request->all());
			//@todo add session flash message success create
			return Redirect::to('settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting $setting
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
     * @param  \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
      $setting->fill($request->all())->save();
			Session::flash('message', 'Successfully updated Setting!');
      return Redirect::to('settings');
		}

		/**
		 * Remove the specified resource from storage.
     *
     * @param \App\Setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
