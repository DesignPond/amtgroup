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

Route::get('/', 'HomeController@index')->middleware('lang');
Route::get('/blog/{id}', 'HomeController@blog')->middleware('lang');

Route::get('/lang/{local}', function($local)
{
    \Session::put('locale', $local);
    \App::setLocale($local);
    return redirect('/');
});

Route::get('/test', function () {

    $page = \App\Page::find(2);

    echo '<pre>';
    print_r($page->teams);
    echo '</pre>';
    exit;


});
