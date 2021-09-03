<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Frontend\FrontendController@index');

Auth::routes(['register' => false]);

//Google Login
// Route::get('login/{website}', 'Auth\LoginController@redirectToProvider');
// Route::get('login/{website}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function(){
    Route::prefix('users')->group(function(){
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');  
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete', 'Backend\UserController@delete')->name('users.delete');      
    });
    
    Route::prefix('profiles')->group(function(){   
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
        
    });
    
    Route::prefix('categories')->group(function(){
        Route::get('/view', 'Backend\CategoryController@view')->name('categories.view');
        Route::get('/add', 'Backend\CategoryController@add')->name('categories.add');
        Route::post('/store', 'Backend\CategoryController@store')->name('categories.store');  
        Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('categories.edit');
        Route::post('/update/{id}', 'Backend\CategoryController@update')->name('categories.update');
        Route::post('/delete', 'Backend\CategoryController@delete')->name('categories.delete');
        Route::post('/category/status/controll','Backend\CategoryController@status')->name('categories.status.controll');      
    });
    
    Route::prefix('districts')->group(function(){
        Route::get('/view', 'Backend\DistrictController@view')->name('districts.view');
        Route::get('/add', 'Backend\DistrictController@add')->name('districts.add');
        Route::post('/store', 'Backend\DistrictController@store')->name('districts.store');  
        Route::get('/edit/{id}', 'Backend\DistrictController@edit')->name('districts.edit');
        Route::post('/update/{id}', 'Backend\DistrictController@update')->name('districts.update');
        Route::post('/delete', 'Backend\DistrictController@delete')->name('districts.delete');
        Route::post('/district/status/controll','Backend\DistrictController@status')->name('districts.status.controll');      
    });
    
    Route::prefix('posts')->group(function(){
        Route::get('/view', 'Backend\PostController@view')->name('posts.view');
        Route::get('/add', 'Backend\PostController@add')->name('posts.add');
        Route::post('/store', 'Backend\PostController@store')->name('posts.store');  
        Route::get('/edit/{id}', 'Backend\PostController@edit')->name('posts.edit');
        Route::post('/update/{id}', 'Backend\PostController@update')->name('posts.update');
        Route::post('/delete', 'Backend\PostController@delete')->name('posts.delete');
        Route::post('/post/status/controll','Backend\PostController@status')->name('posts.status.controll');      
    });
});

