<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ScenesController;
use App\Http\Controllers\CharactersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('scenes');
});

Route::resource('scenes', ScenesController::class);
Route::resource('settings', SettingsController::class);
Route::resource('characters', CharactersController::class);
Route::get('schedule', [ScenesController::class, 'schedule'])
    ->name('scenes.schedule');
Route::post('schedule', [ScenesController::class, 'schedule_update'])
    ->name('scenes.schedule.update');


// @todo want to slug this instead eventually - use slugs rather than IDs in URLs
//Route::bind('characters', function($value, $route) {
// return App\Task::whereCharacterName($value)->first();
//});
