<?php

use App\Http\Livewire\Redirect; 
use App\Http\Livewire\User\UserDept;

//Admin 
use App\Http\Livewire\User\UserTeam;
use App\Http\Livewire\HomeComponent; 
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminTask;
use App\Http\Livewire\User\UserReport;
use App\Http\Livewire\User\UserProject;
use App\Http\Livewire\Admin\AdminReport;
use App\Http\Livewire\Mgr\MgrDashboard; 
use App\Http\Livewire\User\UserTimesheet;

//Managers


//Users 
use App\Http\Livewire\Admin\AdminEditProj;


//Line Managers 
use App\Http\Livewire\Admin\AdminEditUser;


use App\Http\Livewire\Admin\AdminProject; 
use App\Http\Livewire\Admin\AdminTaskView;
use App\Http\Livewire\User\UserDashboard; 
use App\Http\Livewire\Admin\AdminMessaging;
use App\Http\Livewire\Admin\AdminCreateTask;
use App\Http\Livewire\Admin\AdminDashboard; 
use App\Http\Livewire\Admin\AdminCreateUser; 
use App\Http\Livewire\Admin\AdminDepartment; 
use App\Http\Livewire\Admin\AdminEditProject;
use App\Http\Livewire\Admin\AdminProjectType;
use App\Http\Livewire\Admin\AdminProjectView;
use App\Http\Livewire\Admin\AdminViewUserTask;
use App\Http\Livewire\Admin\CreateProjectType;
use App\Http\Livewire\Admin\AdminManageUser; //
use App\Http\Livewire\User\UserCreateTimesheet;
use App\Http\Livewire\Admin\AdminCreateProject; 
use App\Http\Livewire\Admin\AdminCreateTimesheet; 
use App\Http\Livewire\Admin\AdminCreateDepartment; 
use App\Http\Livewire\Admin\AdminManageTimesheet; //

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/redirect', Redirect::class)->name('redirect');


//Admin Route
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() { 
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard'); 
    Route::get('/admin/newUser', AdminCreateUser::class)->name('admin.newUser'); 
    Route::get('/admin/manageUsers', AdminManageUser::class)->name('admin.manageUsers');
    Route::get('/admin/createDepartment', AdminCreateDepartment::class)->name('admin.createDepartment'); 
    Route::get('/admin/manageDepartment', AdminDepartment::class)->name('admin.manageDepartment'); 
    Route::get('/admin/projects', AdminProject::class)->name('admin.projects'); 
    Route::get('/admin/create-project', AdminCreateProject::class)->name('admin.create-project'); 
    Route::get('/admin/timesheet', AdminCreateTimesheet::class)->name('admin.timesheet'); 
    Route::get('/admin/manageTime', AdminManageTimesheet::class)->name('admin.manageTime'); 
    Route::get('/admin/admin-report', AdminReport::class)->name('admin.adminreport'); //
    Route::get('/admin/editproject/{project_id}', AdminEditProject::class)->name('admin.editproject'); 
    Route::get('/admin/create-project-type', CreateProjectType::class)->name('admin.create-project-type'); //
    Route::get('/admin/project-type', AdminProjectType::class)->name('admin.project-type'); //
    Route::get('/admin/create-task', AdminCreateTask::class)->name('admin.create-task'); //
    Route::get('/admin/admin-task', AdminTask::class)->name('admin.admin-task'); 
    Route::get('/admin/admin-edituser/{user_id}', AdminEditUser::class)->name('admin.admin-edituser'); 
    Route::get('/admin/admin-message', AdminMessaging::class)->name('admin.admin-message'); 
    Route::get('/admin/view-project/{project_id}', AdminProjectView::class)->name('admin.view-project'); 
    Route::get('/admin/view-task/{project_id}', AdminTaskView::class)->name('admin.view-task'); 
    Route::get('/admin/view-usertask/{project_id}', AdminViewUserTask::class)->name('admin.view-usertask'); //
});
 
//Users
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard'); 
    Route::get('/user/timesheet', UserTimesheet::class)->name('user.timesheet'); 
    Route::get('/user/createTime', UserCreateTimesheet::class)->name('user.createTime'); 
    Route::get('/user/user-project', UserProject::class)->name('user.user-project'); 
    Route::get('/user/user-report', UserReport::class)->name('user.user-report'); 
    Route::get('/user/user-team', UserTeam::class)->name('user.user-team'); 
    Route::get('/user/departments', UserDept::class)->name('user.departments'); //
});

//client
Route::middleware(['auth:sanctum', 'verified',  'authmgr'])->group(function() {
    Route::get('/mgr/dashboard', MgrDashboard::class)->name('mgr.dashboard');
});
