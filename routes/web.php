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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/customer', 'CustomerController@index');
Route::get('/groundstaff', 'GroundstaffController@index');
Route::get('/availabilityoffields', 'AvailOfFieldsController@index');
Route::resource('/listoffields', 'FieldController');
Route::resource('/addremovefields','AddRemoveFieldsController');
Route::resource('/customerfields', 'CustomerFieldController');
Route::resource('/groundshome', 'GroundsHomeController');
Route::resource('/customerdetails', 'CustomerDetailController');
Route::resource('/dataevidence', 'DataEvidenceController');
Route::resource('/reports', 'ReportsController');
Route::get('/terms',['as'=>'terms','uses'=>'TermsController@index']);
Route::post('/terms',['as'=>'terms','uses'=>'TermsController@index']);
Route::get('/cfeed',['as'=>'cfeed','uses'=>'cfeedbackController@index']);
Route::post('/customer',['as'=>'customer','uses'=>'CustomerController@index']);
Route::resource('/confirmsubmission', 'ConfirmSubmissionController');
Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));
Route::post('updateReservation', 'AddRemoveFieldsController@updateReservation');
Route::resource('/aboutus', 'AboutUsController');
Route::resource('/welcome', 'WelcomeController');
Route::resource('/contactus', 'ContactUsController');