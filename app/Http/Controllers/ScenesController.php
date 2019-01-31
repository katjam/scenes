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
use Illuminate\Support\Facades\Input;

class ScenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
		{
			$sort_scenes = Scene::all()->sortBy(function ($scene, $key) {
				// todo order by subscenes (a, b, c). Currently they appear before original
				if (preg_match('/a$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.01;
				}
				if (preg_match('/b$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.02;
				}
			  if (preg_match('/c$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.03;
				}
			  if (preg_match('/d$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.04;
				}
			  if (preg_match('/e$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.05;
        }
        if (preg_match('/f$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.06;
        }
        if (preg_match('/g$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.07;
        }
        if (preg_match('/h$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.08;
        }
        if (preg_match('/i$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.09;
        }
        if (preg_match('/j$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.1;
        }
        if (preg_match('/k$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.2;
        }
        if (preg_match('/l$/', $scene['scn_no'])) {
				  return intval($scene['scn_no']) + 0.3;
        } else {
					return intval($scene['scn_no']);
			  }
			});
			// Default collection to sort by scene number
			$sort = Input::get('sort') ? Input::get('sort') : 'story';
			switch ($sort) {
			case('location'):
			  $scenes = $sort_scenes->groupBy((function ($item, $key) { $setting =  Setting::find($item['setting_id']); return $setting->location . ' ' . $setting->set_name; }))->sortBy(function ($item, $key) { return $key; });
				break;
      case('shoot day'):
        // Todo order by a,b,c subscenes
        $scenes = Scene::all()->sortBy('setting_id')->groupBy('filming_day')->sortBy(function ($item, $key) { return intval($key); });
				break;
			case('story'):
			default:
			  $scenes['Story order'] = $sort_scenes;
				break;

			}
			return view('scenes.index', compact('scenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = DB::table('settings')
            ->select(DB::raw('CONCAT_WS(" - ", location, set_name) as loc_set_name, id'))
            ->pluck('loc_set_name', 'id')
            ->all();
        $characters = \Scenes\Character::all();
        $char_sort = [];
        foreach ($characters as $c) {
          $char_sort[$c->cast_type][] = $c;
        }
        asort($settings);
        $next = (int) \Scenes\Scene::all()->last()->scn_no + 1;
        return view('scenes.create', compact('settings', 'char_sort', 'next'));
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
        $settings = DB::table('settings')
            ->select(DB::raw('CONCAT_WS(" - ", location, set_name) as loc_set_name, id'))
            ->pluck('loc_set_name', 'id')
            ->all();
        asort($settings);
        $all_characters = \Scenes\Character::all();
        $scn_chars = $scene->characters->pluck('id')->all();
        return view('scenes.edit', compact('settings', 'scene', 'all_characters', 'scn_chars'));
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
      return Redirect::to('scenes');
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
