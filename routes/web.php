<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\cuttOffController;
use App\Http\Controllers\userController;
use App\Models\cuttOff;
use Illuminate\Http\Request;
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
Route::post('/search/predict', function (Request $request) {
    // $request->validate([
    //     'score' => 'required|numeric'
    // ]);
    $cutoff = cuttoff::where('dept_id', $request->dept)->first();
    if($request->score >= $cutoff->cutOff){
        return ['message'=>'Congratulation...! You passed cutt-Off mark login for features',
    'status' => true
    ];
    }
    return  ['message'=>'Sorry..! You didnt reach cutt-Off login for features',
    'status' => false
    ];;
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
   Route::get('/application', 'Application')->name('applications');
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
   Route::get('/predict/{id}', 'Predict')->name('predict');
   Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
   Route::get('/logout', 'destory')->name('all.logout');
   Route::get('/view/application/{id}', 'viewUser')->name('view.user');
//    Route::post('search/predict', 'searchPredict');
   Route::get('/delete/application/{id}', 'deleteApplication')->name('delete.application');
   Route::post('/update/application/{id}', 'updateApplication')->name('update.application');
//    Route::get('/edit/permission/{id}', 'editHospital')->name('edit.hospital');
//    Route::post('/update/hospital/{id}', 'updateHospital')->name('update.hospital');
//    Route::get('/delete/hospital/{id}', 'deleteHospital')->name('delete.hospitals');
});
});
require __DIR__.'/auth.php';
