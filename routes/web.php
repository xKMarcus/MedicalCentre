<?php
# @Date:   2019-10-29T15:14:35+00:00
# @Last modified time: 2019-12-08T18:16:16+00:00




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

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');


Route::get('/admin/users', 'Admin\UserController@index')->name('admin.users.index');
Route::get('/admin/users/create', 'Admin\UserController@create')->name('admin.users.create');
Route::get('/admin/users/{id}', 'Admin\UserController@show')->name('admin.users.show');
Route::post('/admin/users/store', 'Admin\UserController@store')->name('admin.users.store');
Route::get('/admin/users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
Route::put('/admin/users/{id}', 'Admin\UserController@update')->name('admin.users.update');
Route::delete('/admin/users/{id}', 'Admin\UserController@destroy')->name('admin.users.destroy');

Route::get('/admin/visits', 'Admin\VisitController@index')->name('admin.visits.index');
Route::get('/admin/visits/create', 'Admin\VisitController@create')->name('admin.visits.create');
Route::get('/admin/visits/{id}', 'Admin\VisitController@show')->name('admin.visits.show');
Route::post('/admin/visits/store', 'Admin\VisitController@store')->name('admin.visits.store');
Route::get('/admin/visits/{id}/edit', 'Admin\VisitController@edit')->name('admin.visits.edit');
Route::put('/admin/visits/{id}', 'Admin\VisitController@update')->name('admin.visits.update');
Route::delete('/admin/visits/{id}', 'Admin\VisitController@destroy')->name('admin.visits.destroy');

Route::get('/admin/insuranceCompanies', 'Admin\InsuranceCompanyController@index')->name('admin.insuranceCompanies.index');
Route::get('/admin/insuranceCompanies/create', 'Admin\InsuranceCompanyController@create')->name('admin.insuranceCompanies.create');
Route::get('/admin/insuranceCompanies/{id}', 'Admin\InsuranceCompanyController@show')->name('admin.insuranceCompanies.show');
Route::post('/admin/insuranceCompanies/store', 'Admin\InsuranceCompanyController@store')->name('admin.insuranceCompanies.store');
Route::get('/admin/insuranceCompanies/{id}/edit', 'Admin\InsuranceCompanyController@edit')->name('admin.insuranceCompanies.edit');
Route::put('/admin/insuranceCompanies/{id}', 'Admin\InsuranceCompanyController@update')->name('admin.insuranceCompanies.update');
Route::delete('/admin/insuranceCompanies/{id}', 'Admin\InsuranceCompanyController@destroy')->name('admin.insuranceCompanies.destroy');

Route::get('/admin/insurances', 'Admin\InsuranceController@index')->name('admin.insurances.index');
Route::get('/admin/insurances/create', 'Admin\InsuranceController@create')->name('admin.insurances.create');
Route::get('/admin/insurances/{id}', 'Admin\InsuranceController@show')->name('admin.insurances.show');
Route::post('/admin/insurances/store', 'Admin\InsuranceController@store')->name('admin.insurances.store');
Route::get('/admin/insurances/{id}/edit', 'Admin\InsuranceController@edit')->name('admin.insurances.edit');
Route::put('/admin/insurances/{id}', 'Admin\InsuranceController@update')->name('admin.insurances.update');
Route::delete('/admin/insurances/{id}', 'Admin\InsuranceController@destroy')->name('admin.insurances.destroy');

Route::get('/user/users', 'User\UserController@index')->name('user.users.index');
Route::get('/user/users/{id}', 'User\UserController@show')->name('user.users.show');
