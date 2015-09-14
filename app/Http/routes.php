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

Route::get('/','PagesController@home_page');
//Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('new','PagesController@new_page');
Route::get('cover','PagesController@cover_page');
Route::get('service','PagesController@service_page');
Route::get('forget','PagesController@forget_page');
Route::get('master','PagesController@master_page');
Route::get('sampleadmin','PagesController@sample_admin_page');
Route::get('admin','PagesController@admin_page');
Route::get('about_control','PagesController@about_control_page');
Route::get('contact_control','PagesController@contact_control_page');
Route::get('service_control','PagesController@service_control_page');
Route::get('main_control','PagesController@main_control_page');
Route::get('check','PagesController@check');
Route::get('master','PagesController@master_admin_con');
Route::get('cover_page','PagesController@showCover_page');
Route::get('admin_contact','PagesController@showContact_page');
Route::get('new_Contact','PagesController@new_Contact');
Route::get('admin_about','PagesController@showAbout_page');
Route::get('admin_contant','PagesController@showContant_page');
Route::get('ducks','PagesController@ducks');
Route::post('login_con','FormController@login_con');
Route::post('new_Contact','ContactController@handleFormPost');
Route::post('admin_contact', 'ContactController@Update');
Route::get('front_about','PagesController@front_about');
Route::post('home_about','PagesController@about_add');
//Route::post('upload','ContactController@Upload');






