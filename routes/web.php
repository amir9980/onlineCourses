<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('master');
});

Auth::routes();

// Admin Part
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Admin routes
        Route::resource('admins', 'Admin\AdminController');
        Route::resource('roles', 'Admin\RoleController');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('users', 'Admin\UserController');
        Route::resource('settings', 'Admin\SettingController');
        Route::resource('settingGroups', 'Admin\SettingGroupController');
        Route::resource('course', 'Admin\CourseController');
        Route::resource('comment', 'Admin\CommentController');
    });
    // Default
    Route::get('/home', 'HomeController@index')->name('home');
});
