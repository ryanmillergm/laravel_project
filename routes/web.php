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

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/template', function() {
    return view('template');
});

Route::get('/about', function() {
    // $articles = App\Article::latest()->get();
    // $articles = App\Article::all();
    // $articles = App\Article::take(2)->get();
    // $articles = App\Article::paginate(2);

    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::resource('articles', 'ArticlesController');
// Route::get('/articles', 'ArticlesController@index')->name('articles.index');
// Route::post('/articles', 'ArticlesController@store');
// Route::get('/articles/create', 'ArticlesController@create');
// Route::get('/articles/{article}', 'ArticlesController@show');
// Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
// Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
// Route::get('/articles/{article}/edit', 'ArticlesController@edit');
// Route::put('/articles/{article}', 'ArticlesController@update');

Route::get('/container', function () {

    $container = new \App\Container();

    $container->bind('example', function() {
        return new \App\Example();
    });

    $example = $container->resolve('example');

    $example->go();
});




app()->bind('App\ExampleTwo', function () {
    $collaborator = new \App\Collaborator();
    $foo = 'foobar';

    return new \App\ExampleTwo($collaborator, $foo);
});

//Route::get('container_two', function (App\ExampleTwo $example) {
//    $example = resolve(App\ExampleTwo::class);
//    $example = app()->make(App\ExampleTwo::class);

//    ddd($example);
//});

Route::get('container_two', 'PagesController@home');


Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');


