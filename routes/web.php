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
    return view('index');
});

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');

Route::get('/home', 'HomeController@index')->name('home');


//admin related routes
Route::get('/Admin/customer', function () {
    $activetab="customer";
    $customerdata=App\customer::all();
    return view('.Admin.customer')
    ->with('activetab',$activetab)
    ->with('customerdata',$customerdata);
});
Route::get('/Admin/usercontrol', function () {
    $activetab="usercontrol";
    return view('.Admin.usercontrol')
    ->with('activetab',$activetab);
});
Route::get('/Admin/Dashboard', function () {
    $activetab="Dashboard";
    return view('.Admin.Dashboard')
    ->with('activetab',$activetab);
});
Route::get('/Admin/createjob', function () {
    $activetab="createjob";
    return view('.Admin.createjob')
    ->with('activetab',$activetab);
});
Route::get('/Admin/articles', function () {
    $activetab="articles";
    return view('.Admin.articles')
    ->with('activetab',$activetab);
});

//admin related save
Route::post('/savecustomer', 'CustomerController@store');
Route::post('/savearticles', 'ArticlesController@store');
//auto compleated
Route::get('/NICAutocompleate',array('as'=>'NICAutocompleate','uses'=>'CustomerController@NICAutocompleate'));
Route::get('/itemselect', 'JobController@selectitem');