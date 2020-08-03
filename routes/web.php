<?php

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

Route::get('/', function () {

    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return 'Example that laravel will create the view just from this';
});

Route::get('/arraytojson', function () {
    return ['foo' => 'bar'];
});

// Route::get('test', function () {
//     $name = request('name');

//     return view('test', [
//         'name' => $name
//     ]);
// });
// We can refactor the above to:

Route::get('test', function () {
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/contact', function() {
    return view('contact');
});