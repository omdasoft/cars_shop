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

Route::group(['namespace' => 'Admin','middleware' => 'auth:admin'],function() {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');


    ################################ begin categories routes ###############################
    Route::group(['prefix' => 'categories'],function(){
        Route::get('/','CategoriesController@index')->name('admin.categories');
        Route::get('/create','CategoriesController@create')->name('admin.categories.create');
        Route::post('/store','CategoriesController@store')->name('admin.categories.store');
        Route::get('/edit/{id}','CategoriesController@edit')->name('admin.categories.edit');
        Route::post('/update/{id}','CategoriesController@update')->name('admin.categories.update');
        Route::get('/delete/{id}','CategoriesController@destroy')->name('admin.categories.delete');
        Route::get('/changeStatus/{id}','CategoriesController@changeStatus')->name('admin.categories.status');

    });


    ################################ end categories routes ###############################

    ################################ begin makers routes ###############################
    Route::group(['prefix' => 'makers'],function(){
        Route::get('/','MakersController@index')->name('admin.makers');
        Route::get('/create','MakersController@create')->name('admin.makers.create');
        Route::post('/store','MakersController@store')->name('admin.makers.store');
        Route::get('/edit/{id}','MakersController@edit')->name('admin.makers.edit');
        Route::post('/update/{id}','MakersController@update')->name('admin.makers.update');
        Route::get('/delete/{id}','MakersController@destroy')->name('admin.makers.delete');

    });

    ################################ end makers routes ###############################

    ################################ begin car models routes ###############################
    Route::group(['prefix' => 'carModels'],function(){
        Route::get('/','carModelsController@index')->name('admin.carModels');
        Route::get('/create','carModelsController@create')->name('admin.carModels.create');
        Route::post('/store','carModelsController@store')->name('admin.carModels.store');
        Route::get('/edit/{id}','carModelsController@edit')->name('admin.carModels.edit');
        Route::post('/update/{id}','carModelsController@update')->name('admin.carModels.update');
        Route::get('/delete/{id}','carModelsController@destroy')->name('admin.carModels.delete');

    });

    ################################ end car models routes ###############################

});

Route::group(['middleware' => 'guest:admin'],function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
});
