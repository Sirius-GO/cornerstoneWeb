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
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/careers', function () {
    return view('pages.careers');
});
Route::get('/apply_online', function () {
    return view('pages.apply_online');
});
Route::get('/apply_online2', function () {
    return view('pages.apply_online2');
});
Route::get('/apply_online3', function () {
    return view('pages.apply_online3');
});
Route::get('/apply_online4', function () {
    return view('pages.apply_online4');
});
Route::get('/apply_online5', function () {
    return view('pages.apply_online5');
});
Route::get('/apply_online6', function () {
    return view('pages.apply_online6');
});



//Post Data RouteServiceProvider
Route::post('/apply_online', ['as' => 'stage1.store', 'uses' => 'ApplicationFormController@application_stage_1']);
Route::post('/apply_online2', ['as' => 'stage2.store', 'uses' => 'ApplicationFormController@application_stage_2']);
Route::post('/apply_online3', ['as' => 'stage3.store', 'uses' => 'ApplicationFormController@application_stage_3']);
Route::post('/apply_online4', ['as' => 'stage4.store', 'uses' => 'ApplicationFormController@application_stage_4']);
Route::post('/apply_online5', ['as' => 'stage5.store', 'uses' => 'ApplicationFormController@application_stage_5']);
Route::post('nicheck', ['as' => 'ni.check', 'uses' => 'ApplicationFormController@ni_check']);
Route::post('/contact', ['as' => 'contact.form', 'uses' => 'ApplicationFormController@contact_form']);
