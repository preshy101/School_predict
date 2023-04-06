<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\cuttOffController;
use App\Http\Controllers\userController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function(){
Route::controller(SchoolController::class)->group(function(){
   Route::get('/school', 'allSchool')->name('school');
   Route::post('/store/school', 'addSchool')->name('store.school');
//    Route::get('/view/hospital/{id}', 'viewHospital')->name('view.hospital');
   Route::get('/edit/school/{id}', 'editSchool')->name('edit.school');
   Route::post('/update/school/{id}', 'updateSchool')->name('update.school');
   Route::get('/delete/school/{id}', 'deleteSchool')->name('delete.school');
});
Route::controller(DeptController::class)->group(function(){
   Route::get('/Department', 'allDepartment')->name('departments');
   Route::post('/store/department', 'addDepartment')->name('store.department');
//    Route::get('/view/hospital/{id}', 'viewHospital')->name('view.hospital');
   Route::get('/edit/department/{id}', 'editDepartment')->name('edit.department');
   Route::post('/update/department/{id}', 'updateDepartment')->name('update.department');
   Route::get('/delete/department/{id}', 'deleteDepartment')->name('delete.department');
});
Route::controller(cuttOffController::class)->group(function(){
   Route::get('/cutt-off', 'allCuttOff')->name('cutt');
   Route::post('/store/cutt-off', 'addCuttOff')->name('store.cuttOff');
//    Route::get('/view/hospital/{id}', 'viewHospital')->name('view.hospital');
   Route::get('/edit/cuttOff/{id}', 'editCutt')->name('edit.cuttOff');
   Route::post('/update/cuttOff/{id}', 'updateCutt')->name('update.cuttOff');
   Route::get('/delete/cuttOff/{id}', 'deleteCutt')->name('delete.cuttOff');
});
Route::controller(userController::class)->group(function(){
   Route::get('/application', 'allApplication')->name('application');
   Route::get('/admission', 'alladmitted')->name('admitted');
   Route::get('/user', 'allUser')->name('user');
//    Route::post('/store/hospital', 'addHospital')->name('store.hospital');
   Route::get('/view/olevel', 'Olevel')->name('oLevel');
   Route::get('/view/utme', 'Utme')->name('utme');
   Route::post('/store/olevel', 'AddOlevel')->name('store.olevel');
   Route::post('/store/utme', 'AddUtme')->name('store.utme');
//    Route::get('/edit/permission/{id}', 'editHospital')->name('edit.hospital');
//    Route::post('/update/hospital/{id}', 'updateHospital')->name('update.hospital');
//    Route::get('/delete/hospital/{id}', 'deleteHospital')->name('delete.hospitals');
});
});
require __DIR__.'/auth.php';