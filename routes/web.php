<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// For authentication
// -- register / login
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::view('/show_react','show_react');

Route::view('/all_course','all_course');

Route::view('/course_detail','course_detail');

Route::view('/ins_info','ins_info');

Route::view('/become_ins','become_ins');

Route::view('student/stu_dashboard','student/stu_dashboard');

Route::view('student/lesson_view','student/lesson_view');

Route::view('student/blog_view','student/blog_view');

Route::view('instructor/ins_dashboard','instructor/ins_dashboard');

Route::view('/test','test');
/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');

  Route::view('/react', 'admin.react');

  Route::resource('tasks','AdminTasksController',['as'=>'admin']);


});
