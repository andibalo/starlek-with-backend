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

Route::get('/', 'CMSController@home')->name('home');

//Route::get('/aboutus','CMSController@aboutus')->name('aboutus');

//Route::get('/committee','CMSController@committee')->name('committee');

//Route::get('/contact','CMSController@contact')->name('contact');

//Route::get('/event','CMSController@event')->name('event');

//Route::get('/email','CMSController@email')->name('email');

Route::get('/recruitment', 'CMSController@recruitment')->name('recruitment');

Route::get('/faq', 'CMSController@faq')->name('faq');

Route::get('/citymap', 'CMSController@citymap')->name('citymap');

//Route::get('/','CMSController@homenew')->name('homenew');

Route::get('/about', 'CMSController@aboutusnew')->name('aboutusnew');





Route::group(['prefix' => 'vote'], function () {
	Route::get('/', 'VotingStellarController@index')->name('vote');
	Route::post('post', 'VotingStellarController@storeVoteData')->name('vote.store');
	Route::post('check', 'VotingStellarController@checkVotedData')->name('vote.check');
	Route::get('announcement', 'CMSController@announcement')->name('announcement');
});

Route::group(['prefix' => 'registration'], function () {
	Route::get('', 'RegistrationController@index')->name('registration');
	Route::post('/post', 'RegistrationController@registrationPost')->name('registrationPost');
	Route::group(['prefix' => 'result'], function () {
		Route::get('', 'RegistrationResultCheckController@index')->name('search');
		Route::post('post', 'RegistrationResultCheckController@searchPost')->name('searchPost');
	});
});

Route::group(['prefix' => 'twibbon'], function () {
	Route::get('', 'TwibbonController@index')->name('twibbon');
	Route::post('post', 'TwibbonController@twibbonPost')->name('twibbonPost');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
	Route::get('/registration', 'PanelController@registration')->name('panel.registration')->middleware('auth');
	Route::get('/registration/{dataUmum}', 'PanelController@registration_detail')->name('panel.registration.detail')->middleware('auth');
});

Route::group(['prefix' => 'contestant'], function () {
	Route::get('/', 'ContestantRegistrationController@index')->name('choices');

	Route::get('/welcome', 'ContestantRegistrationController@welcome')->name('welcome');
	Route::get('/complete', 'ContestantRegistrationController@complete')->name('complete');
	Route::get('/group', 'ContestantRegistrationController@registrationGroup')->name('group');
	Route::post('/group', 'ContestantRegistrationController@createGroupIsthara')->name('group');

	Route::get('/solo', 'ContestantRegistrationController@registrationSolo')->name('solo');
	Route::post('/solo', 'ContestantRegistrationController@createSoloIsthara')->name('solo');
});


Route::group(['prefix' => 'judge'], function () {
	Route::get('/', 'CMSController@judge')->name('judge');
	Route::get('/starbook', 'CMSController@starbook')->name('starbook');
	Route::get('/pick', 'CMSController@pick')->name('pick');
	Route::get('/pick/isthara', 'CMSController@isthara')->name('isthara');
	Route::post('/pick/isthara', 'CMSController@NEWistharaScoring')->name('NEWistharaScoring');
	Route::get('/thanks', 'CMSController@istharaThanks')->name('istharaThanks');
});

Route::group(['prefix' => 'starbook'], function () {
	Route::post('/judge', 'StarbookController@createJudge')->name('createJudge');
	Route::post('/login', 'StarbookController@loginJudge')->name('loginJudge');
	// Route::get('/', 'CMSController@judge')->name('judge');
	// Route::get('/starbook', 'CMSController@starbook')->name('starbook');	
	// Route::get('/pick', 'CMSController@pick')->name('pick');
	// Route::get('/pick/isthara', 'CMSController@isthara')->name('isthara');
});


Route::group(['prefix' => 'regisContestant'], function () {
	Route::get('/', 'CMSController@regisContestant')->name('panel.regis');
});

Route::group(['prefix' => 'voting'], function (){
	Route::get('/', 'CMSController@voting')->name('voting');
});

use Illuminate\Http\Request;
use App\Http\Controllers\StarbookController;

Route::post('/upload', function (Request $request) {
	// dd($request->file("gambar"));
	//dd($request->file("gambar")->store("1aOE8KhzgAI4QuIZI65q7H7XlpATx_N0L", "google"));
});

Route::any(
	'{query}',
	function () {
		return redirect('/');
	}
)
	->where('query', '.*');
