<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\ManageUsersComponent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeComponent::class)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/manage-users', ManageUsersComponent::class)->name('admin.manage-users');
    Route::post('/admin/dashboard/add-student',[AdminDashboardComponent::class,'addStudent'])->name('admin.add-student');
});
