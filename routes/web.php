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

Route::get('/test', function () {
    return App\Post::first()->category;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function(){

	Route::get('/home', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);

	Route::get('post/create', [
		'uses' => 'PostsController@create',
		'as' => 'post.create'
	]);

	Route::post('post/store', [
		'uses' => 'PostsController@store',
		'as' => 'post.store'
	]);

	Route::get('posts', [
		'uses' => 'PostsController@index',
		'as' => 'posts'
	]);

	Route::get('post/delete/{id}', [
		'uses' => 'PostsController@delete',
		'as' => 'post.delete'
	]);

	Route::get('post/trashed', [
		'uses' => 'PostsController@trashed',
		'as' => 'post.trashed'
	]);

	//permanent delete posts
	Route::get('post/kill/{id}', [
		'uses' => 'PostsController@kill',
		'as' => 'post.kill'
	]);

	//Restore posts
	Route::get('post/restore/{id}', [
		'uses' => 'PostsController@restore',
		'as' => 'post.restore'
	]);

	//Restore edit
	Route::get('post/edit/{id}', [
		'uses' => 'PostsController@edit',
		'as' => 'post.edit'
	]);

	Route::post('post/update/{id}', [
		'uses' => 'PostsController@update',
		'as' => 'post.update'
	]);

	Route::get('category/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('category/store', [
		'uses' => 'CategoriesController@store',
		'as' => 'category.store'
	]);

	// for display categories
	Route::get('categories', [
		'uses' => 'CategoriesController@index',
		'as' => 'categories'
	]);

	// for edit categories
	Route::get('category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
	]);
	// for edit categories
	Route::get('category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);

	Route::post('category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);


	Route::get('users', [
		'uses' => 'UsersController@index',
		'as' => 'users'
	]);

	Route::get('users/adduser', [
		'uses' => 'UsersController@adduser',
		'as' => 'adduser'
	]);

	Route::post('users/store', [
		'uses' => 'UsersController@store',
		'as' => 'users.store'
	]);

	Route::get('users/admin/{id}', [
		'uses' => 'UsersController@admin',
		'as' => 'users.admin'
	]);

	Route::get('users/notadmin/{id}', [
		'uses' => 'UsersController@notadmin',
		'as' => 'users.notadmin'
	]);

	Route::get('settings', [
		'uses' => 'SettingController@create',
		'as' => 'settings'
	]);

	Route::post('settings/update/{id}', [
		'uses' => 'SettingController@update',
		'as' => 'settings.update'
	]);
});

