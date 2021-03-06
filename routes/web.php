<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Provide controller methods with object instead of ID
Route::model('scenes', 'Scenes\Scene');
Route::model('settings', 'Scenes\Setting');
Route::model('characters', 'Scenes\Character');

Route::get('/', function () {
    return redirect('scenes');
});

Route::resource('scenes', 'ScenesController');
Route::resource('settings', 'SettingsController');
Route::resource('characters', 'CharactersController');
Route::get('schedule', [
    'as' => 'scenes.schedule',
    'uses' => 'ScenesController@schedule'
]);
Route::post('schedule', [
    'as' => 'scenes.schedule.update',
    'uses' => 'ScenesController@schedule_update'
]);


// @todo want to slug this instead eventually - use slugs rather than IDs in URLs
//Route::bind('characters', function($value, $route) {
// return Scenes\Task::whereCharacterName($value)->first();
//});
