<?php

use App\Models\Meson as MesonModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Meson;
use App\Http\Resources\Group as GroupResource;
use App\Http\Resources\Category as CategoryResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/groups', function () {
    return new GroupResource('groups');
});
// Route::post('login','Api\RegisterController@login');
// Route::post('register','Api\RegisterController@register');
Route::get('/mesons', 'Api\MesonController@getUserMesons')->middleware('auth:api');
Route::get('/features/{cat_id}', 'Api\FeatureController@getCategoryFeatures')->middleware('auth:api');
Route::get('/categories/{g_id}', 'Api\CategoryController@index');
Route::get('/meson/{u_id}', 'Api\MesonController@getUserMesons');
