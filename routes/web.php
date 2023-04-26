<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/thanh-midu', function () {
    return view('welcome');
});

Route::get('/thanhtest', function () {
    return view('welcome');
});


Route::get('/thanhtest123', function () {
    return view('welcome');
});

Route::get('/thanhtest123454545', function () {
    return view('welcome');
});


Route::get('/thanhtest123454545456', function () {
    return view('welcome');
});

Route::get('/thanhtest1234545452929', function () {
    return view('welcome');
});

Route::get('/thanhtest123454545akaf', function () {
    return view('welcome');
});

Route::get('/aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});
Route::get('/thanhcry-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry1-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry2-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry3-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry4-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry5-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry6-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

Route::get('/thanhcry7-aloveyoufcdetest123454545akaf', function () {
    return view('welcome');
});

// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');

// Logs
//Route::get(config('admin.admin_route_prefix').'/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard','system_log_view'])->name('admin.logs');

Route::get('/install','InstallerController@redirectToRequirement')->name('LaravelInstaller::welcome');
Route::get('/install/environment','InstallerController@redirectToWizard')->name('LaravelInstaller::environment');
