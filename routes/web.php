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

Route::post('/', 'ContactFormController@store');

Route::get('/progetti', 'ProjectsController@index')->name('projects');

Route::post('/progetti', 'ProjectsController@store');

Route::get('/skills', 'SkillsController@index')->name('skills');

Route::post('/skills', 'SkillsController@store');

Route::get('/progetti/{id}', 'ProjectsController@show')->name('show');

Route::get('/progetti/{id}/edit', 'ProjectsController@edit')->name('edit');

Route::put('/progetti/{id}', 'ProjectsController@update')->name('project.update');

Route::delete('/progetti/{id}', 'ProjectsController@destroy')->name('project.destroy');

Auth::routes([

    'register' => false

]);

Route::get('/home', 'HomeController@index')->name('home');
