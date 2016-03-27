<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
    return View::make('website');
});

Route::get('home', function()
{
	return View::make('master');
});

//dashboard
Route::get('home', function()
{
    return View::make('home');
});

//  User Management

//validating user during login
Route::get('login',array('as'=>'login', 'uses'=>'UserController@login'));
Route::post('login',array('as'=>'login', 'uses'=>'UserController@validate'));

//loging a user out
Route::get('logout',array('as'=>'logout', 'uses'=>'UserController@logout'));

//display a form to add new user
Route::get('user',array('as'=>'adduser', 'uses'=>'UserController@index'));

//display adding form
Route::get('user/add',array('as'=>'adduser1', 'uses'=>'UserController@create'));
//adding new user
Route::post('user/add',array('as'=>'adduser1', 'uses'=>'UserController@store'));

//viewing list of users
Route::get('user/list',array('as'=>'listuser', 'uses'=>'UserController@listUser'));

//display a form to edit users information
Route::get('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@edit'));

//editng users information
Route::post('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@update'));

//deleting user
Route::post('user/delete/{id}',array('as'=>'deleteuser', 'uses'=>'UserController@destroy'));

//display a system usage log for a user
Route::get('user/log/{id}',array('as'=>'userlog', 'uses'=>'UserController@show'));

// Gallery management

//displaying image
Route::get('gallery',array('as'=>'gallerydisplay', 'uses'=>'GalleryController@index'));

Route::get('gallery/add',array('as'=>'galleryadd', 'uses'=>'GalleryController@create'));

Route::post('gallery/add',array('as'=>'galleryadd', 'uses'=>'GalleryController@store'));

Route::post('gallery/list',array('as'=>'gallerylist', 'uses'=>'GalleryController@show'));

Route::get('gallery/edit/{id}', array( 'as'=>'galleryedit','uses'=>'GalleryController@edit'));

Route::post('gallery/edit/{id}', array( 'as'=>'galleryedit','uses'=>'GalleryController@update'));

Route::post('gallery/delete/{id}', array( 'as'=>'gallerydelete','uses'=>'GalleryController@destroy'));



// offer management

//displaying offer
Route::get('offer',array('as'=>'offerdisplay', 'uses'=>'OfferController@index'));

Route::get('offer/add',array('as'=>'offeradd', 'uses'=>'OfferController@create'));

Route::post('offer/add',array('as'=>'offeradd', 'uses'=>'OfferController@store'));

Route::post('offer/list',array('as'=>'offerlist', 'uses'=>'OfferController@show'));

Route::get('offer/edit/{id}', array( 'as'=>'offeredit','uses'=>'OfferController@edit'));

Route::post('offer/edit/{id}', array( 'as'=>'offeredit','uses'=>'OfferController@update'));

Route::post('offer/delete/{id}', array( 'as'=>'offerdelete','uses'=>'OfferController@destroy'));

// Slides management

//displaying slides
Route::get('slider',array('as'=>'sliderdisplay', 'uses'=>'SliderController@index'));

Route::get('slider/add',array('as'=>'slideradd', 'uses'=>'SliderController@create'));

Route::post('slider/add',array('as'=>'slideradd', 'uses'=>'SliderController@store'));

Route::post('slider/list',array('as'=>'sliderlist', 'uses'=>'SliderController@show'));

Route::get('slider/edit/{id}', array( 'as'=>'slideredit','uses'=>'SliderController@edit'));

Route::post('slider/edit/{id}', array( 'as'=>'sliderupdate','uses'=>'SliderController@update'));

Route::post('slider/delete/{id}', array( 'as'=>'sliderdelete','uses'=>'SliderController@destroy'));


