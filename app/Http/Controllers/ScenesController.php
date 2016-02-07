<?php

namespace Scenes\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use Scenes\Scene as Scene;
use Scenes\Character_Scene as Character_Scene;
use Scenes\Setting as Setting;
use Scenes\Http\Requests;
use Scenes\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ScenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
		{
			$scenes = Scene::all()->sortBy(function ($scene, $key) {
				// todo order by subscenes (a, b, c). Currently they appear before original
				if (preg_match('/a$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.1;
				}
				if (preg_match('/b$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.2;
				}
			  if (preg_match('/c$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.3;
				}
			  if (preg_match('/d$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.4;
				}
			  if (preg_match('/e$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.5;
				} else {

					return intval($scene['scn_no']);
			  }
			})->groupBy((function ($item, $key) { return Setting::find($item['setting_id'])->set_name; }));
			return view('scenes.index', compact('scenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $settings = \Scenes\Setting::lists('set_name', 'id');
      $characters = \Scenes\Character::all();
      return view('scenes.create', compact('settings', 'characters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $scn = Scene::create($input);
      if (array_key_exists('character_id', $input)) {
        foreach ($input['character_id'] as $c) {
          $scn->characters()->attach($c);
        }
      }
      return Redirect::to('scenes');
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
      $settings = \Scenes\Setting::lists('set_name', 'id');
      $characters = \Scenes\Character::all();
      // @todo set value of existing chars
      return view('scenes.edit', compact('settings', 'scene', 'characters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Scenes\Scene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scene $scene)
    {
      // update the Scene
      $scene->fill($request->all())->save();
      // update the Character_Scene
      $char_arr = array();
      $input = $request->all();
      if (array_key_exists('character_id', $input)) {
        foreach ($input['character_id'] as $c) {
          $char_arr[] = $c;
        }
      }
      $scene->characters()->sync($char_arr);
      Redirect::to('scenes');
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
