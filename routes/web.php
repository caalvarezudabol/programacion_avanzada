<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

use App\Http\Controllers\EstadoVerificacionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\EmpresaController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

// Roles
Route::resource('roles', RolesController::class)->middleware('auth');

// Permissions
Route::resource('permissions', PermissionsController::class)->middleware('auth');

Route::resource('estudiantes', EstudianteController::class)->middleware('auth');
Route::get('estudiantes/{estudiante_id}/{estado}', [EstudianteController::class, 'actualizarEstado'])->name('estudiantes.estado')->middleware('auth');
// Users
Route::middleware('auth')->prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
    //
    Route::get('/show/{user}', [UserController::class, 'show'])->name('show');
    //
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('destroy');
    Route::get('/update/status/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('status');

    Route::get('/import-users', [UserController::class, 'importUsers'])->name('import');
    Route::post('/upload-users', [UserController::class, 'uploadUsers'])->name('upload');

    Route::get('export/', [UserController::class, 'export'])->name('export');
});

// Estado Verificación
Route::resource('estado_verificaciones', EstadoVerificacionController::class)->middleware('auth');
Route::get('estado_verificaciones/{estado_verificacion_id}/{estado}', [EstadoVerificacionController::class, 'actualizarEstado'])->name('estado_verificaciones.estado')->middleware('auth');

Route::resource('empresas', EmpresaController::class)->middleware('auth');
