<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentfeeController;

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

//backend part

//Admin login
Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admin.dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/admin-dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/admin-logout', [SuperAdminController::class, 'logout']);

//Admission
Route::resource('/admissions/',AdmissionController::class); 
Route::get('/create-admission',[AdmissionController::class,'create']);
Route::post('/update-admission/{admission}',[AdmissionController::class,'update']);
Route::delete('/admission-delete/{admission}',[AdmissionController::class,'delete']);
Route::get('/money-recipt/{id}', [AdmissionController::class, 'moneyrecipt']);

//class wise
Route::get('/view-class-one',[HomeController::class,'classone']); 
Route::get('/view-class-two',[HomeController::class,'classtwo']); 
Route::get('/view-class-three',[HomeController::class,'classthree']); 
Route::get('/view-class-four',[HomeController::class,'classfour']); 
Route::get('/view-class-five',[HomeController::class,'classfive']); 
Route::get('/view-class-six',[HomeController::class,'classsix']); 
Route::get('/view-class-seven',[HomeController::class,'classseven']); 
Route::get('/view-class-eight',[HomeController::class,'classeight']); 

//Student monthly deposit
Route::resource('/studentfees/',StudentfeeController::class); 
Route::get('/create-studentfee',[StudentfeeController::class,'create']);
Route::post('/update-studentfee/{studentfee}',[StudentfeeController::class,'update']);
Route::delete('/studentfee-delete/{studentfee}',[StudentfeeController::class,'delete']);
Route::get('/studentfee-recipt/{id}', [StudentfeeController::class, 'moneyrecipt']);



//Deposit

Route::resource('/deposits/',DepositController::class); 
Route::get('/create-deposit',[DepositController::class,'create']);
Route::post('/update-deposit/{deposit}',[DepositController::class,'update']);
Route::delete('/deposit-delete/{deposit}',[DepositController::class,'delete']);
Route::get('/deposit-money-recipt/{id}', [DepositController::class, 'moneyrecipt']);

//Cost

Route::resource('/costs/',CostController::class); 
Route::get('/create-cost',[CostController::class,'create']);
Route::post('/update-cost/{cost}',[CostController::class,'update']);
Route::delete('/cost-delete/{cost}',[CostController::class,'delete']);
Route::get('/cost-money-recipt/{id}', [CostController::class, 'moneyrecipt']);

//Student profile

Route::get('/profiles',[HomeController::class,'profile']);
Route::get('/view-student-profile/{name}', [HomeController::class, 'viewprofile']);



Route::get('/coming', [HomeController::class, 'comingsoon']);
Route::resource('/admissionfee/',SuperAdminController::class); 

 
