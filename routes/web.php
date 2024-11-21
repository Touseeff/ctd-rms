<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\SectionController;

// use App\Http\Middleware\AuthMiddleWare;


// Route::get('/', action: function () {
//     return view('login');
// });
// Route::get('/sign-up', function () {
//     return view('sign_up');
// });



Route::fallback(function () {
    return view('404');
});



// User Route Controller
Route::get('/', [UserController::class, 'create'])->name('signup.create');
Route::get('/auth', [AuthController::class, 'create'])->name('signin.create');



Route::post('/auth/login', [AuthController::class, 'signinMatching'])->name('signin.matching');
Route::get('/auth/forgot', [AuthController::class, 'forgotCreate'])->name('forgot.create');
Route::post('/auth/verify', [AuthController::class, 'userVerify'])->name('user.verify');
Route::get('/auth/verify/{token}', [AuthController::class, 'tokenVerify'])->name('token.verify');
Route::get('/auth/password-create', [AuthController::class, 'passwordCreate'])->name('reset_password.create');
Route::post('/auth/password-store', [AuthController::class, 'passwordstore'])->name('reset_password.store');



Route::middleware(['auth.redirect'])->group(function () {
// Route::post('/sign-up', [UserController::class, 'store'])->name('signup.store');

// HR Dashboard routes
Route::get('/hr-dashboard', [HrController::class, 'index'])->name('hr.dashboard');
Route::get('/auth/logout', [HrController::class, 'hrLogout'])->name('hr.logout');
Route::get('/hr-dashboard/user-show', [HrController::class, 'showUser'])->name('show.user');
Route::get('/hr-dashboard/user-create', [HrController::class, 'createUser'])->name('create.user');
Route::post('/hr-dashboard/user-store', [HrController::class, 'storeUser'])->name('store.user');
Route::get('/hr-dashboard/user-edit/{id}', [HrController::class, 'editUser'])->name('edit.user');
Route::post('/hr-dashboard/user-update', [HrController::class, 'updateUser'])->name('update.user');
Route::get('/hr-dashboard/user-view/{id}',[HrController::class, 'viewUser'])->name('view.user');
// Route::post('/hr-dashboard/user-store', [HrController::class, 'storeUser'])->name('store.user');

// 
Route::get('/hr-dashboard/user-create/{department_id}', [HrController::class, 'getSections'])->name('get.sections');


//HR Profile Update 
Route::get('/hr-profile/hr-profile-edit/{id}', [HrController::class, 'editProfile'])->name('hr.edit.profile');
Route::post('/hr-profile/hr-profile-update', [HrController::class, 'updateProfile'])->name('hr.update.profile');
Route::get('/hr-profile/hr-profile-view/{id}',[HrController::class, 'viewProfile'])->name('hr.view.profile');



//Add department
Route::get('department-view',[DepartmentController::class,'index'])->name('department.view');
Route::get('department-create',[DepartmentController::class,'create'])->name('deprtment.create');
Route::post('department-add',[DepartmentController::class,'store'])->name('department.add');
Route::get('department-show/{id}', [DepartmentController::class, 'show'])->name('show.department');
Route::get('department-edit/{id}', [DepartmentController::class, 'edit'])->name('edit.department');
Route::post('department-update', [DepartmentController::class, 'update'])->name('update.department');



//Admin Dashboard reoutes
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/auth/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::get('/admin-dashboard/user-show', [AdminController::class, 'showUser'])->name('admin.show.user');
Route::get('/admin-dashboard/user-create', [AdminController::class, 'createUser'])->name('admin.create.user');
Route::post('/admin-dashboard/user-store', [AdminController::class, 'storeUser'])->name('admin.store.user');
Route::get('/admin-dashboard/user-edit/{id}', [AdminController::class, 'editUser'])->name('admin.edit.user');
Route::post('/admin-dashboard/user-update', [AdminController::class, 'updateUser'])->name('admin.update.user');
Route::get('/admin-dashboard/user-view/{id}',[AdminController::class, 'viewUser'])->name('admin.view.user');

//

Route::get('/admin-dashboard/user-create/{department_id}', [AdminController::class, 'getSections'])->name('get.sections');



//Admin Profile Routes
Route::get('/admin-profile/admin-profile-edit/{id}', [AdminController::class, 'editProfile'])->name('admin.edit.profile');
Route::post('/admin-profile/admin-profile-update', [AdminController::class, 'updateProfile'])->name('admin.update.profile');
Route::get('/admin-profile/admin-profile-view/{id}',[AdminController::class, 'viewProfile'])->name('admin.view.profile');





//User Dashboard routes
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
Route::get('/user/auth/logout', [UserController::class, 'userLogout'])->name('user.logout');

//for testing profiles routes

Route::get('/user-profile/user-profile-edit/{id}', [UserController::class, 'editProfile'])->name('user.edit.profile');
Route::post('/user-profile/user-profile-update', [UserController::class, 'updateProfile'])->name('user.update.profile');
Route::get('/user-profile/user-profile-view/{id}',[UserController::class, 'viewProfile'])->name('user.view.profile');



//User Dashboard routes
Route::get('/head/dashboard', [HeadController::class, 'index'])->name('head.dashboard');
Route::get('/head/auth/logout', [HeadController::class, 'headLogout'])->name('head.logout');



Route::get('/head-profile/head-profile-edit/{id}', [HeadController::class, 'editProfile'])->name('head.edit.profile');
Route::post('/head-profile/head-profile-update', [HeadController::class, 'updateProfile'])->name('head.update.profile');
Route::get('/head-profile/head-profile-view/{id}',[HeadController::class, 'viewProfile'])->name('head.view.profile');




//Sections Route
Route::get('/section/dashboard',[SectionController::class,'index'])->name('section.dashboard');
Route::get('/section/dashboard/section-create',[SectionController::class,'create'])->name('section.create');
Route::post('/section/dashboard/section-add',[SectionController::class,'store'])->name('section.store');
Route::get('/section/dashboard/section-edit/{id}',[SectionController::class,'edit'])->name('section.edit');
Route::post('/section/dashboard/section-update',[SectionController::class,'update'])->name('section.update');
Route::get('/section/dashboard/sections-show/{id}',[SectionController::class,'show'])->name('section.show');



Route::get('/workspace/create/',[WorkspaceController::class,'create'])->name('workspace.create');
Route::post('/workspace/add/',[WorkspaceController::class,'store'])->name('add.workspace');
Route::get('/workspace/get-user/{sectionId}', [WorkspaceController::class, 'getUsers'])->name('get.user');




});
