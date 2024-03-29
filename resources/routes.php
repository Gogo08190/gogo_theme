<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */


Route::get('template', ['home', 'uses' => 'HomeController@index']);
Route::get('template', ['contact', 'uses' => 'ContactController@index']);
Route::get('template', ['videos', 'uses' => 'VideosController@index']);
Route::get('template', ['about', 'uses' => 'AboutController@index']);
Route::get('template', ['config', 'uses' => 'ConfigController@index']);

Route::get('template', ['actualites', 'uses' => 'ActualitesController@index']);

Route::get('single', ['uses' => 'ActualitesController@single']);

Route::get('page', function(){
    return view('pages.template');
});

Route::get('404', ['uses' => 'ErrorController@index']);
