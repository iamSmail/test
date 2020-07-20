<?php

use Illuminate\Support\Facades\Route;

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
Route::get('getVilles','villeController@getVilles_f')->name('getVilles');
Route::get('mapage','villeController@getVilles_f');

// Route::get('mapage', function () {
//     return view('mapage');
// });
Route::get('ajouter', function () {
    return view('ajouter');
});
Route::get('modifier', function () {
    return view('modifier');
});
Route::get('ajouter_op','villeController@ajouter_f');
Route::get('supprimer_op','villeController@supprimer_f');
Route::get('modifier_op','villeController@modifier_f');
Route::get('modifier_submite','villeController@modifier_sub');
Route::get('','villeController@modifier_sub');
Route::resource('users', 'crudController');

