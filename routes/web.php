<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\DashboardController;

Route::get("/login", [LoginController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post("/login", [LoginController::class, 'login'])->middleware('guest');
Route::post("/logout", [LoginController::class, 'logout'])->middleware('auth');

Route::get("/", function(){ return redirect("admin"); })->middleware('auth');
Route::get("/admin", [DashboardController::class, 'index'])->middleware('auth');

// Backups
Route::get("/admin/backups", [BackupController::class, 'index'])->middleware('auth');
Route::livewire("/admin/backups/create", 'admin.create-backup')->middleware('auth');
Route::livewire("/admin/backups/{backup:slug}", 'admin.show-backup')->middleware('auth');
