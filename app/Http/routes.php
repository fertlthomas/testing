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

/*
 * Teamroutes
 */
Route::get('/Teams', 'TeamController@showAction');

Route::get('/Insert', 'TeamController@showInsertAction');

Route::post('/inserting', 'TeamController@insertAction');

Route::delete('/deleting/{id}', 'TeamController@deleteAction');

Route::get('/Update/{id}', 'TeamController@showUpdateAction');

Route::put('/updating/{id}', 'TeamController@updateAction');

/*
 * Spielerroutes
 */
Route::get('/Teams/{id}/Spieler', 'SpielerController@showAction');

Route::get('/Teams/{id}/Spieler/Insert', 'SpielerController@showInsertAction');

Route::post('/Teams/{id}/Spieler/inserting', 'SpielerController@insertAction');

Route::delete('/Teams/{id}/Spieler/deleting/{id_sp}', 'SpielerController@deleteAction');

Route::get('/Teams/{id}/Spieler/Update/{id_sp}', 'SpielerController@showUpdateAction');

Route::put('/Teams/{id}/Spieler/updating/{id_sp}', 'SpielerController@updateAction');

