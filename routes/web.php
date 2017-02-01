<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses'=>'InvitationController@viewInvitation', 'as'=>'/']);
Route::get('invitation/del={id}', 'InvitationController@deleteInvitation');
Route::get('invitation/upt={id}', 'InvitationController@updateInvitationView');
Route::post('invitation/update={id}', 'InvitationController@updateInvitation');
