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
//App::bind('App\Billing\Stripe',function(){
//return new \App\Billing\Stripe(config('services.stripe.secret'));

//});
//$stripe = App::make('App\Billing\Stripe');
//dd($stripe);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/homework', function () {
    return view('homework');
});


//Route::get('/coursemessage', 'CourseController@showMessage'); 
   // Route::get('/getcourse/{id}','CourseController@showCourse'); 
    
Route::get('/studentmessage', 'StudentController@showMessage'); 
    Route::get('/getstudent/{id}','StudentController@showStudent'); 

Route::resource('employee', 'EmployeeController'); 



Route::resource('employeedetails', 'EmployeeController'); 
Route::resource('employeedetails', 'EmployeeDetailController',['parameters'.=>.['employeedetail'.=>.'employeedetail'

]])->middleware('maintenance.mode'); 

