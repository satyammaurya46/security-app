<?php


use App\Http\Controllers\About_usController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\Incidence_listController;
use App\Http\Controllers\Login_logsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Scan_summaryController;
use App\Http\Controllers\Set_timezoneController;
use App\Http\Controllers\SocietyController;
use Illuminate\Support\Facades\Route;



Route::get('/',[AuthController::class,'index'])->name('login');

Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {
Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login', [AuthController::class, 'storelogin'])->name('login.process');
Route::get('recoverpw',[AuthController::class,'recoverpw'])->name('recoverpw');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout.procces');


});

/* society  */
Route::group(['prefix' => 'admin'], function () {
  Route::resource('society', SocietyController::class);
  Route::get('society-list',[SocietyController::class,'index'])->name('society-list');
  Route::get('add-society',[SocietyController::class,'create'])->name('add.society');
  Route::post('store-society',[SocietyController::class,'store'])->name('store.society');
  Route::get('edit-society/{id}',[SocietyController::class,'edit'])->name('edit.society');
  Route::post('update-society/{id}', [SocietyController::class, 'update'])->name('society.update');
  Route::delete('delete-society/{id}', [SocietyController::class, 'delete'])->name('society.delete');



 /* designation  */
  Route::resource('designation', DesignationController::class);
  Route::get('add-designation',[DesignationController::class,'create'])->name('add-designation');
  Route::post('store-designation',[DesignationController::class,'store'])->name('store.designation');
  Route::get('designation-list',[DesignationController::class,'index'])->name('designation-list');
  Route::get('edit-designation/{id}',[DesignationController::class,'edit'])->name('edit-designation');
  Route::post('update-designation/{id}',[DesignationController::class,'update'])->name('update-designation');
  Route::delete('delete-designation/{id}',[DesignationController::class,'delete'])->name('delete.designation');
  
  
  /* Guard  */
  Route::resource('guard', GuardController::class);
  Route::get('add-guard',[GuardController::class,'create'])->name('add-guard');
  Route::post('store-guard',[GuardController::class,'store'])->name('store.guard');
  Route::get('guard-list',[GuardController::class,'index'])->name('guard-list');
  Route::get('edit-guard/{id}',[GuardController::class,'edit'])->name('edit.guard');
  Route::post('update-guard/{id}',[GuardController::class,'update'])->name('update.guard');
  Route::delete('delete-guard/{id}',[GuardController::class,'delete'])->name('delete.guard');
  Route::get('attendence',[GuardController::class,'attendence'])->name('attendence');

  /* Checkpoint  */
  Route::resource('checkpoint', CheckpointController::class);
  Route::get('add-checkpoints',[CheckpointController::class,'create'])->name('add-checkpoints');
  Route::post('store-checkpoints',[CheckpointController::class,'store'])->name('store.checkpoints');
  Route::get('checkpoints-list',[CheckpointController::class,'index'])->name('checkpoint-list');
  Route::get('edit-checkpoints/{id}',[CheckpointController::class,'edit'])->name('edit.checkpoint');
  Route::post('update-checkpoints/{id}',[CheckpointController::class,'update'])->name('update.checkpoint');
  Route::delete('delete-checkpoints/{id}',[CheckpointController::class,'delete'])->name('delete.checkpoint');


  /* Checkpoint  */
  Route::resource('profile', ProfileController::class);
  Route::get('profile',[ProfileController::class,'index'])->name('profile');

  /*  Dashboard      */
  Route::resource('dashboard', DashboardController::class);
  Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

  /* Scan_summary  */
  Route::resource('scan-summary', Scan_summaryController::class);
  Route::get('scan-summary',[Scan_summaryController::class,'index'])->name('scan-summary');

  /* Incidence list */
  Route::resource('incidence-list', Incidence_listController::class);
  Route::get('incidence-list',[Incidence_listController::class,'index'])->name('incidence-list');

  /*  set timezone */
  Route::resource('set-timezone', Set_timezoneController::class);
  Route::get('set-timezone',[Set_timezoneController::class,'index'])->name('set-timezone');

  /*  About Us */
  Route::resource('about', About_usController::class);
  Route::get('about',[About_usController::class,'index'])->name('about');

  /* login logs */
  Route::resource('login-logs', Login_logsController::class);
  Route::get('login-logs',[Login_logsController::class,'index'])->name('login-logs');
});