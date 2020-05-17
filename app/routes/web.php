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


/*
|--------------------------------------------------------------------------
| Public Access Section
|--------------------------------------------------------------------------
|
| This section manages the public Routes for respondendts
| to gain access to each survey
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/respondents', 'RespondendtsController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Private Access Section
|--------------------------------------------------------------------------
|
| This section manages the private Routes for respondendts
| to gain access to each survey
|
*/

Auth::routes();

Route::group(['middleware' => ['web']], function() {

/* These routes are for the Questionnaire Section for when creating, editing, and deleting.*/
Route::get('/questionnaires/create', 'QuestionnaireController@create');
Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show');
Route::delete('/questionnaires/{questionnaire}', 'QuestionnaireController@destroy');
Route::get('/questionnaires/{questionnaire}/edit', 'QuestionnaireController@edit');
Route::patch('/questionnaires/{questionnaire}', 'QuestionnaireController@update');

/* These routes are for the Questionnaire Section for when creating, editing, and deleting.*/
Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');
Route::get('/questionnaires/{questionnaire}/questions/{question}/edit', 'QuestionController@edit');
Route::patch('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@update');

/* Theis Routes deals with the completion of each survey that is to be accessed and submitted.*/
Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');

Route::get('/surveys/{questionnaire}-{slug}/farewell', 'FarewellController@show');

});