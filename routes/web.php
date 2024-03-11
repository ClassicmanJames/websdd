<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FirstYearController;
use App\Http\Controllers\Service\ServiceStudentController;
use App\Http\Controllers\Menu\MainMenuController;
use App\Http\Controllers\Menu\OrganizationalstructureController;
use App\Http\Controllers\Menu\DepartmentController;

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
//Route::get('', function () {
//    return view('welcome');
//});
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
});

Route::get('/home', [HomeController::class ,'index']);

Route::get('/', [HomeController::class ,'index']);
Route::get('/organizationalstructure',[HomeController::class,'organizationalstructure']);
Route::get('/organizationalstructure/ga',[OrganizationalstructureController::class,'ga']);
Route::get('/organizationalstructure/sport',[OrganizationalstructureController::class,'sport']);
Route::get('/organizationalstructure/scholarship',[OrganizationalstructureController::class,'scholarship']);
Route::get('/organizationalstructure/developmentlife',[OrganizationalstructureController::class,'developmentlife']);
Route::get('/organizationalstructure/inter',[OrganizationalstructureController::class,'inter']);
Route::get('/organizationalstructure/dss',[OrganizationalstructureController::class,'dss']);
Route::get('/organizationalstructure/eth',[OrganizationalstructureController::class,'eth']);
Route::get('/maintenance', [HomeController::class ,'maintenance']);



Route::get('/department/ga',[DepartmentController::class,'ga']);
Route::get('/department/sport',[DepartmentController::class,'sport']);
Route::get('/department/scholarship',[DepartmentController::class,'scholarship']);
Route::get('/department/developmentlife',[DepartmentController::class,'developmentlife']);
Route::get('/department/inter',[DepartmentController::class,'inter']);
Route::get('/department/dss',[DepartmentController::class,'dss']);
Route::get('/department/eth',[DepartmentController::class,'eth']);


Route::get('/history', [MainMenuController::class ,'history']);
Route::get('/missionversion', [MainMenuController::class ,'missionversion']);
Route::get('structure', [MainMenuController::class ,'structure']);

Route::get('/service/scholarship', [ServiceStudentController::class ,'scholarship']);
Route::get('/service/studentloan', [ServiceStudentController::class ,'studentloan']);
Route::get('/service/cmumind', [ServiceStudentController::class ,'cmumind']);
Route::get('/service/healthservices', [ServiceStudentController::class ,'healthservices']);
Route::get('/service/extraact', [ServiceStudentController::class ,'extraact']);
Route::get('/service/onestopservies', [ServiceStudentController::class ,'onestopservies']);


Route::get('/service/cmujob', [ServiceStudentController::class ,'cmujob']);
Route::get('/service/accident', [ServiceStudentController::class ,'accident']);
Route::get('/service/serviceforstu', [ServiceStudentController::class ,'serviceforstu']);
Route::get('/service/sport', [ServiceStudentController::class ,'sport']);
Route::get('/service/mrm', [ServiceStudentController::class ,'mrm']);

