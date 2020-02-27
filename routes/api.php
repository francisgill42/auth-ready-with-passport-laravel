<?php

use Illuminate\Http\Request;

Route::get('/',function(){
    echo 'api';
});

Route::post('/register','Api\PassportController@register');
Route::post('/login','Api\PassportController@login');
Route::get('/me','Api\PassportController@me');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
