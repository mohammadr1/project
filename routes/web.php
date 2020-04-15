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

Auth::routes();

Route::prefix('admin')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\AdminController@index')->name('admin.index');
    Route::get('/users', 'back\UserController@index')->name('admin.users');    
});

Route::prefix('admin/categories')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\CategoryController@index')->name('admin.categories');
    Route::get('/create', 'back\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'back\CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}', 'back\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}', 'back\CategoryController@update')->name('admin.categories.update');
    Route::get('/destroy/{category}', 'back\CategoryController@destroy')->name('admin.categories.destroy');

});

Route::prefix('admin/articles')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\ArticleController@index')->name('admin.articles');
    Route::get('/create', 'back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'back\ArticleController@update')->name('admin.articles.update');
    Route::get('/destroy/{article}', 'back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}', 'back\ArticleController@updatestatus')->name('admin.articles.status');

});


Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/profile/{user}', 'UserController@edit')->name('profile');
Route::post('/update/{user}', 'UserController@update')->name('profileupdate');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes(); });