<?php

Route::get('/defaultsite', function () {
    return redirect('/');
});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
Route::get('/careers', 'PagesController@careers');
Route::get('/apply_online', 'PagesController@apply_online');
Route::get('/apply_online2', 'PagesController@apply_online2');
Route::get('/apply_online3', 'PagesController@apply_online3');
Route::get('/apply_online4', 'PagesController@apply_online4');
Route::get('/apply_online5', 'PagesController@apply_online5');
Route::get('/apply_online6', 'PagesController@apply_online6');

//Post Data 
Route::post('/apply_online', ['as' => 'stage1.store', 'uses' => 'ApplicationFormController@application_stage_1']);
Route::post('/apply_online2', ['as' => 'stage2.store', 'uses' => 'ApplicationFormController@application_stage_2']);
Route::post('/apply_online3', ['as' => 'stage3.store', 'uses' => 'ApplicationFormController@application_stage_3']);
Route::post('/apply_online4', ['as' => 'stage4.store', 'uses' => 'ApplicationFormController@application_stage_4']);
Route::post('/apply_online5', ['as' => 'stage5.store', 'uses' => 'ApplicationFormController@application_stage_5']);
Route::post('nicheck', ['as' => 'ni.check', 'uses' => 'ApplicationFormController@ni_check']);
Route::post('/contact', ['as' => 'contact.form', 'uses' => 'ApplicationFormController@contact_form']);
