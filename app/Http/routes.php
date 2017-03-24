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

Route::get('/', function () {
    return view('layout');
});
Route::get('/category/create', array('as' => 'category.create', 'uses' => 'CategoryController@staticCreate'));
Route::post('/category', array('as' => 'category.post', 'uses' => 'CategoryController@create'));
Route::get('/category/{id?}', array('as' => 'category.get', 'uses' => 'CategoryController@get'));
Route::get('xhr/category', array('as' => 'xhr.category.get', 'uses' => 'CategoryController@xhrGet'));
Route::post('xhr/category', array('as' => 'xhr.category.post', 'uses' => 'CategoryController@xhrCreate'));



Route::post('/article', array('as' => 'article.post', 'uses' => 'ArticleController@create'));
Route::get('/article/{id?}', array('as' => 'article.get', 'uses' => 'ArticleController@get'));

Route::get('xhr/category/{id}/article', array('as' => 'xhr.category.get', 'uses' => 'CategoryController@xhrGetArticlesByCategory'));