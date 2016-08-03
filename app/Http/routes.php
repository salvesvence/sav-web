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

Route::get('/', [
    'as' => 'welcome',
    'uses' => 'PagesController@welcome'
]);

Route::get('me', [
    'as' => 'me',
    'uses' => 'PagesController@me'
]);

Route::get('blog', [
    'as' => 'blog',
    'uses' => 'PagesController@blog'
]);

Route::get('projects', [
    'as' => 'projects',
    'uses' => 'PagesController@projects'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@contact'
]);

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('categories', 'CategoriesController', ['except' =>
    ['destroy']
]);

Route::get('categories/{slug}/delete', [
    'as' => 'categories.destroy',
    'uses' => 'CategoriesController@destroy'
]);


/*
|--------------------------------------------------------------------------
| Tags Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('tags', 'TagsController', ['only' =>
    ['index', 'create', 'store']
]);

Route::put('tags/{tag}',        ['as' => 'tags.update',     'uses' => 'TagsController@update']);
Route::get('tags/{tag}/edit',   ['as' => 'tags.edit',       'uses' => 'TagsController@edit']);
Route::get('tags/{tag}/delete', ['as' => 'tags.destroy',    'uses' => 'TagsController@destroy']);

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('posts', 'PostsController', ['except' =>
    ['destroy']
]);

Route::get('posts/{slug}/delete', [
    'as' => 'posts.destroy',
    'uses' => 'PostsController@destroy'
]);

/*
|--------------------------------------------------------------------------
| Projects Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('projects', 'ProjectsController', ['except' =>
    ['destroy']
]);

Route::get('projects/{slug}/delete', [
    'as' => 'projects.destroy',
    'uses' => 'ProjectsController@destroy'
]);
