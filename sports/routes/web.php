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

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',         function () { return redirect('/admin/home'); });
//     Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('login',    'Admin\LoginController@login');
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
//     Route::post('admin/logout',   'Admin\LoginController@logout')->name('admin.logout');
//     Route::get('admin/home',      'Admin\HomeController@index')->name('admin.home');
// });

Route::get('recruit/login', 'RecruitLoginController@showLoginForm')->name('recruit.login');
Route::post('recruit/login', 'RecruitLoginController@login');

Route::get('/', function () {
    return view('top');
});



Route::get('/show/{id}', 'ProfileController@show')->name('profile');
Route::get('/edit/{id}', 'ProfileController@edit')->name('profile.edit');
Route::post('/update/{id}', 'ProfileController@update')->name('profile.update');
Route::post('/delete/{id}', 'ProfileController@destroy')->name('profile.delete');

Auth::routes();

Route::get('/home', 'PostsController@index');

Route::get('/home/{sport}', 'PostsController@show');

Route::get('/posts/new', 'PostsController@new')->name('new');

Route::post('/posts', 'PostsController@store');

Route::get('/home/{sport}/person/{id}/{count}', 'PostsController@person')->name('person');

Route::get('/home/{sport}/edit/{id}', 'PostsController@edit')->name('post.edit');


Route::get('/like/{to_user_id}/{from_user_id}/{status}', 'ReactionController@create')->name('request');

Route::get('/matching', 'MatchingController@index')->name('matching');




Route::get('/image_input', 'ImageController@getImageInput');
Route::post('/image_confirm', 'ImageController@postImageConfirm');
Route::post('/image_complete', 'ImageController@postImageComplete');