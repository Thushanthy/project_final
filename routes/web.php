<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* home views */
Route::get('/', function () {return view('home/index');});
Route::get('home', function () {return view('home/index');}); // home is same as '/'
Route::get('services', function () {return view('home/services');});
Route::get('privacy_policy', function () {return view('home/privacy_policy');});
Route::get('pricing', function () {return view('home/pricing');});
Route::get('help', function () {return view('home/help');});
Route::get('faq', function () {return view('home/faq');});

/*signin - signup views*/
Route::get('signin', function () {Session::flush(); return view('login/base');});
Route::get('signup', function () {return view('signup/base');});
Route::get('images', function () {return view('login/tabs/card2');});

/* USER Login views */
Route::get('ll', function () {return view('login/users/landownerLogin');});
Route::get('ld', function () {return view('login/users/driverLogin');});
Route::get('la', function () {return view('login/users/adminLogin');});

// CRUD Controllers
Route::resource('drivers', 'DriverController');
Route::resource('landowners', 'LandownerController');
Route::resource('parking_spaces', 'Parking_spaceController');
Route::resource('parking_vehicle_types', 'Parking_vehicle_typeController');
Route::resource('reservations', 'ReservationController');
Route::resource('reviews', 'ReviewController');
Route::resource('vehicles', 'VehicleController');
Route::resource('contact_us', 'Contact_usController');
Route::resource('admins', 'AdminController');
Route::resource('opentimes', 'OpentimeController');
Route::resource('vehicledetails', 'VehicleDetailsController');

/* USER Login controllers */
Route::post('/loginlandowner','User_loginController@landowner_login');
Route::post('/logindriver','User_loginController@driver_login');
Route::post('/loginadmin','User_loginController@admin_login');
Route::get('/loginlandowner','User_loginController@landowner_login')->name('loginlandowner');
Route::get('/logindriver','User_loginController@driver_login')->name('logindriver');
Route::get('/loginadmin','User_loginController@admin_login')->name('loginadmin');

/*User signup */
Route::post('/signuplandowner','User_loginController@landowner_signup');
Route::post('/signupdriver','User_loginController@driver_signup');


Route::get('/landDetails','Parking_spaceController@detailsIndex');
Route::get('/landEdit','Parking_spaceController@editIndex');
Route::get('/landDelete','Parking_spaceController@deleteIndex');
Route::post('/landupdate/{id}','Parking_spaceController@landupdate');

Route::resource('landownerpage', 'LandownerpageController');
Route::resource('adminpage', 'adminloginController');


/*Search*/
Route::any('/search','SearchController@searchAdmin');

/* Temporary */
Route::get('temp1', function () {return view('Temp/1/index');});
Route::get('temp2', function () {return view('Temp/2/index');});
Route::get('temp3', function () {return view('Temp/3/index');});

/* USER Login & Register */
Route::get('lr', function () {return view('signup/users/landownerLogin');});
Route::get('dr', function () {return view('signup/users/driverLogin');});
Route::resource('lrs', 'Auth/RegisterController');

Route::get('verifyland','Parking_spaceController@verify');
Route::get('/searchland', 'Parking_spaceController@search');
Route::get('/searchlandfordriver', 'Parking_spaceController@searchfordriver');
Route::get('/searchlandforreview', 'ReviewController@searchforreview');
/* pdf generator*/
Route::get('/dynamic_pdf','DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf','DynamicPDFController@pdf');
Route::get('/dynamic_pdf2','DynamicPDFController2@index');
Route::get('/dynamic_pdf2/pdf2','DynamicPDFController2@pdf');
Route::get('/dynamic_pdf3','DynamicPDFController3@index');
Route::get('/dynamic_pdf3/pdf3','DynamicPDFController3@pdf');
Route::get('/dynamic_pdf4','DynamicPDFController4@index');
Route::get('/dynamic_pdf4/pdf4','DynamicPDFController4@pdf');


Route::get('/paywithpaypal', function () {return view('paywithpaypal');});
Route::post('/paypal', 'PaymentController@payWithpaypal');
Route::get('/status', 'PaymentController@getPaymentStatus');
 
/*driver part start*/
Route::get('driverDashboard','DriverDashboardController@index');
Route::resource('drivervehicle','DrivervehicleController');
Route::post('driverRequest','parkingRequest@store');
Route::get('notification','notification@index');
Route::post('searchslots','DriverDashboardController@search');
Route::get('review','review@index');

Route::get('adminDashboard','AdminDashboardController@index');
Route::post('searchbyadmin','AdminDashboardController@search');
/*driver part end*/