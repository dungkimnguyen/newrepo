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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@index2')->name('home2');

Route::get('/employeeInvite/{token}', 'EmployeeInviteController@loadEmployeeInvite');
Route::get('/clientInvite/{token}', 'ClientInviteController@loadClientInvite');



Route::get('/agency/{slug}', 'AgencyController@loadAgency');


Route::get('/agencySearch', 'HomeController@findAgency')->name('AgencySearch');
Route::post('/agencySearch', 'HomeController@findAgency');


Route::get('/search', 'HomeController@findEmployees')->name('search');
Route::post('/search', 'HomeController@findEmployees');

Route::post('/extendedSearch', 'HomeController@secondarySearch');


Route::get('/employeeSearch', 'AgencyController@employeeSearch')->name('agency_search');
Route::post('/employeeSearch', 'AgencyController@employeeSearch');

Route::get('/search', 'HomeController@findEmployees')->name('search');
Route::post('/search', 'HomeController@findEmployees');

Route::get('/oldOffer/{id}', 'HomeController@oldMakeOffer');
Route::get('/employee/{id}', 'HomeController@viewEmployee')->name("newOffer");

Route::get('/makeOffer/{id}', 'HomeController@makeOffer')->name("newOffer");
Route::Post('/offerPrice', 'HomeController@offerPrice')->name("offerPrice");

//  return view('welcome')

Route::get('/clientRegister', function () { return view('Auth\registerClient'); })->name("clientRegister");



Auth::routes();

//send email urls
Route::get('/email', 'EmailController@sendEmail');

Route::post('/verifyEmail', 'HomeController@verifyEmail');

Route::get('/resetToken', function () { return view('tokenReset'); });

Route::post('/resetToken', 'Auth\RegisterController@newConfirmToken');

Route::get('/verify/{confirm}', 'Auth\RegisterController@confirm');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/index', function () { return view('index'); })->name("index");
Route::get('/MS_324', function () { return view('MS_324'); })->name("MS_324");

Route::get('/owners/johndemo/index', function () { return view('/owners/johndemo/index'); })->name("owners");

Route::get('/city/new-york/index', function () { return view('/city/new-york/index'); })->name("newYork");




    Route::get('/auth/success', [
        'as'   => 'auth.success',
        'uses' => 'Auth\RegisterController@success'
    ]);






Route::group(['middleware' => ['auth']], function () {


	//------------------- NEW DASHBOARD ----------------------//

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


    Route::post('/profileImage','ImageController@profileImage')->name('imageUpload');

Route::get('/dashboard/my-profile', 'DashboardController@profile')->name('profile');

Route::get('/dashboard/add', 'DashboardController@add')->name('add');

Route::get('/dashboard/settings', 'DashboardController@settings')->name('settings');

Route::get('/dashboard/employeeSearch', 'DashboardController@employeeSearch')->name('employeeSearch');
Route::post('/dashboard/employeeSearch', 'DashboardController@employeeSearch');

Route::get('/dashboard/offers/', 'DashboardController@offers');

Route::post('/dashboard/offerSearch', 'DashboardController@offerSearch');


//---------------------------------------------------------------------------------//


Route::get('/settings', 'SettingsController@index')->name('settingsOld');

Route::get('/employee/edit/{id}', 'AgencyController@employeeEdit');
Route::post('/employee/edit', 'EmployeeUpdateController@employeeUpdate');


Route::post('/agency/settings', 'SettingsController@agencyUpdate');
Route::post('/employee/settings', 'SettingsController@employeeUpdate');
Route::post('/client/settings', 'SettingsController@clientUpdate');
Route::post('/user/settings', 'SettingsController@userUpdate');


Route::get('/employeeInvite', 'EmployeeInviteController@employeeinvite');

Route::post('/resendInvite', 'EmployeeInviteController@resendEmployeeInvite');

Route::post('/employeeInvite', 'EmployeeInviteController@sendEmployeeInvite');

Route::get('/clientInvite', 'ClientInviteController@clientInvite');

Route::post('/clientInvite', 'ClientInviteController@sendClientInvite');



Route::get('/viewOffer/{id}', 'HomeController@viewOffer');
Route::post('/dashboard/offers', 'HomeController@offerAct');

Route::post('/makeOffer/{id}', 'HomeController@postOffer');
Route::post('/oldOffer/{id}', 'HomeController@postOffer');




});