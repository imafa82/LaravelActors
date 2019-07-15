<?php
use App\Http\Controllers\MovieController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hello/{name?}/{surname?}/{year?}', function($name = 'Massimiliano', $surname = 'Salerno', $year = 2019){
    $name = ucfirst($name);
    $surname = ucfirst($surname);
    return view('hello', array('name' => $name, 'surname' => $surname, 'year' => $year));
})->where('name', '[a-z]+')->where('surname', '[a-z,A-Z]+')->where('year', '[0-9]{4}');

Route::get('table/{n?}', 'MultipleTableController@index')->name('table');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('actors', 'ActorController');
    Route::resource('movies', 'MovieController')->only('show', 'edit', 'update', 'destroy');
    Route::get('actors/{actor}/movies/create', 'MovieController@create')->name('movies.create');
    //Route::post('actors/{actor}/movies', 'MovieController@store');

});
