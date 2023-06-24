<?php

use App\Http\Controllers\Admin\DonationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PageController as UserPageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\SlumAreaController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\User\MyDonationsController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
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

//Default
// Route::get('/',function() {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

//User Side
// Route::group(['middleware' => ['auth','guest']], function() {
Route::get('/', [UserPageController::class,'index']);
Route::get('/about', [UserPageController::class,'about']);
Route::get('/contact', [UserPageController::class,'contact']);
// });
//Route::get('/login',[UserPageController::class,'login']);
//Route::get('/register',[UserPageController::class,'register']);
Route::middleware('auth')->group(function() {
    Route::get('/donate',[UserPageController::class,'donate']);
    Route::post('/donate',[MyDonationsController::class,'store']);
    Route::get('/donations',[UserPageController::class,'donations']);
    Route::get('/donation-single/{id}',[UserPageController::class,'donationsingle']);
    Route::get('/updateprofile',[UserPageController::class,'updateprofile'])->name('user.profile');
    Route::put('/update-user-profile/{id}',[UserProfileController::class,'update']);
});


//Admin Side
Route::prefix('admin')->group(function(){
    //Route::get('/',[AdminPageController::class,'index']);
    Route::group(['middleware' => 'admin.guest'], function() {
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[AdminLoginController::class, 'authenticate'])->name('admin.auth');
    });
    Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('/', [AdminPageController::class,'index'])->name('admin.dashboard');
        Route::get('/logout', [AdminLoginController::class,'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminPageController::class,'demodashboard']);
        Route::get('/blank',[AdminPageController::class,'blank']);
        Route::get('/users',[AdminPageController::class,'users'])->name('admin.users');
        Route::get('/donations',[AdminPageController::class,'donations']); 
        Route::get('/slumareas',[AdminPageController::class,'slumareas'])->name('admin.slumareas');
        // Route::get('/login-old',[AdminPageController::class,'oldlogin']);
        Route::get('/profile',[AdminPageController::class,'profile'])->name('admin.profile');
        Route::get('/addslumarea',[SlumAreaController::class,'addslumarea']);
        Route::post('/addslumarea',[SlumAreaController::class,'store']);
        Route::get('/adddonation',[DonationsController::class,'create']);
        Route::post('/adddonation',[DonationsController::class,'store']);
        Route::get('/updatedonation/{id}',[AdminPageController::class,'updatedonation']);
        Route::get('/delete-donation/{id}',[DonationsController::class,'destroy']);
        Route::put('/updatedonation/{id}',[DonationsController::class,'update']);
        Route::get('/updateslumarea/{id}',[SlumAreaController::class,'edit']);
        Route::put('/update-slum-area/{id}',[SlumAreaController::class,'update']);
        Route::get('/delete-slumarea/{id}',[SlumAreaController::class,'destroy']);
        Route::get('/updateuser/{id}',[ManageUsersController::class,'updateuser']);
        Route::put('/update-user/{id}',[ManageUsersController::class,'update']);
        Route::get('/delete-user/{id}',[ManageUsersController::class,'destroy']);
        Route::put('/update-profile/{id}', [AdminProfileController::class,'update']);
    });
});

