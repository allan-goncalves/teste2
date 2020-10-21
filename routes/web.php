<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;
 

//Route::get('/', function () {
 //   return view('app');
//});

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/{any}', 'HomeController@index')->where('any', '.*');
    Route::get('/historico','HomeController@historico')->name('historico');
     
    Route::post('/calcular','HomeController@storeCalcular')->name('calcular');
    });
   



