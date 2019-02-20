<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('blog' ,['as' =>'coral.blog','uses'=>'BlogController@index']);

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('who-we-are' ,['as' =>'whoweare','uses'=>'PagesController@whoweare']);
Route::get('what-we-do' ,['as' =>'whatwedo','uses'=>'PagesController@whatwedo']);
Route::get('how-we-do-it' ,['as' =>'howwedoit','uses'=>'PagesController@howwedoit']);

Route::get('corporate' ,['as' =>'corporate','uses'=>'PagesController@corporate']);
Route::get('estate-planning' ,['as' =>'estate','uses'=>'PagesController@estate']);
Route::get('financial-planning' ,['as' =>'financial','uses'=>'PagesController@financial']);
Route::get('insurance-planning' ,['as' =>'insurance','uses'=>'PagesController@insurance']);
Route::get('investment-planning' ,['as' =>'investment','uses'=>'PagesController@investment']);
Route::get('personal-retirement' ,['as' =>'personal-retirement','uses'=>'PagesController@personalRetirement']);
Route::get('business-succession' ,['as' =>'business-succession','uses'=>'PagesController@businessSuccession']);
Route::get('faq' ,['as' =>'faq','uses'=>'PagesController@faq']);
Route::get('disclosures' , ['as' => 'disclosures', 'uses' => 'PagesController@disclosures']);
Route::get('cfm-horizon' ,['as' =>'cfm-horizon','uses'=>'PagesController@cfmHorizon']);

Route::get('meet-the-team' ,['as' =>'team','uses'=>'BioController@index']);
Route::get('bio/{slug}' ,['as' =>'bio','uses'=>'BioController@show']);

Route::get('sitemap' ,['as' =>'sitemap','uses'=>'SitemapController@sitemap']);



