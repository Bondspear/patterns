<?php

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
    return view('factory_method');
});

    Route::get('/factory', function () {
        return view('abstract_fctory');
    });

    
        Route::get('/adapter', function () {
            return view('adapter');
        });
        
        
            Route::get('/bridge', function () {
                return view('bridge');
            });
           
            Route::get('/builder', function () {
                return view('builder');
            });

            Route::get('/singelton', function () {
                return view('singelton');
            });
            
            
            
            
            
            
            
            
            
            
            
            