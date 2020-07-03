<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@getHome');
Route::get('about','SiteController@getAbout')->name('about');
Route::get('contact','SiteController@getContact')->name('contact');
Route::post('contact', [
    'as'=>'contact',
    'uses'=>'SiteController@postContact'
]);

Route::get('login', function () {
    dd('login page');
});

Route::group([
    'namespace' => 'Dashboard',
    'prefix' => 'dashboard',
    'middleware' => 'auth'
], function () {
    Route::get('/', function(){
        dd('Dashboard home');
    });
});

// Route::get('/', 'SiteController@getHome');
// Route::get('about', [
//     'as'=>'about',
//     'uses'=>'SiteController@getAbout'
//     ]);
// Route::get('contact',[
//     'as'=>'contact',
//     'uses'=>'SiteController@getContact' 
// ]);
// Route::post('contact', [
//     'as'=>'contact',
//     'uses'=>'SiteController@postContact'
// ]);

// Route::get('@{username}', function ($username) {
//     dd($username);
// });

Route::get('users/{type?}', function ($type = NULL) {
    if (is_null($type)) {
        dd('All the users');
    }else {
        dd('All the users of ' .$type);
    }
});

Route::get('{category}/{post_slug}', function ($category, $post_slug) {
    dd($category, $post_slug);
});