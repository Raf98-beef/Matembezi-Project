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
// home page
Route::get('/', function () {
    return view('welcome');
});

// payments view
Route::get('/payment', function () {
    return view('payment');
})->name('malipo');

// car hire view
Route::get('/carHire', function () {
    return view('carHire');
});

// Hotels view
Route::get('/hotel', function () {
    return view('Hotels');
});

// Safari packages view
Route::get('/safaris', function () {
    return view('safaris');
});

// enquires view
Route::get('/enquires', function () {
    return view('enquires');
})->name('question');



// post payments to the DB
Route::post('/payment/form', 'paymentsForm@pushForm')->name('mapesa');

//post enquiries to the DB
Route::post('/enquiries/form','enquiryCont@pushEnquiries')->name('maswali');


//pulling payments from DB
Route::get('/viewpayments','paymentsForm@pullPayments')->name('vuta');

//pulling enquiries from DB
Route::get('/viewenquiries','enquiryCont@pullEnquiries')->name('noma');



//delete payment
Route::get('/viewpayments/click_delete/{id}', 'paymentsForm@deletePayments')->name('futa');

//delete Enquiry
Route::get('/viewenquiries/click_delete/{id}', 'enquiryCont@deleteEnquiries')->name('rusha');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

