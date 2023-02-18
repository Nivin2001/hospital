<?php
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\WelcomeController;
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
    return view('admin.dashboard');
});

Route::prefix('admin') ->group(function(){
Route::get('/Welcome','App/Http/Controllers/WelcomeController@welcome');

Route::get('/Welcome',[WelcomeController::class,'welcome']);

// Route::get('/hospital/index',[HospitalController::class,'index']->name('hospital.index'));

Route::get('/hospital/create ',[HospitalController::class,'create']);

Route::post('/hospital/store ',[HospitalController::class,'store']);

Route::get('/hospital/show/{id} ',[HospitalController::class,'show']);

Route::get('/hospital/edit /{id}',[HospitalController::class,'edit']);

Route::post('/hospital/update/{id} ',[HospitalController::class,'update ']);

Route::delete('/hospital/destroy/{id} ',[HospitalController::class,'destroy']);
});

Route::fallback(function(){
return view('error404');
});



// Route::resource('hospitals',HospitalController::class);







// اول بايراميتر هو المسار
// ثاني باراميتر هو controller
//  controller بستدعيه باسم 
// بعدها @ 
// اسم الدالة  الي انشاتها   في view 

// Route::post();
// Route::delete();



