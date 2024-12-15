<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
})->name('main');

// Route::get('/groups',[EnrollmentController::class , 'index'])->name('groups.index');
// Route::get('/groups/create',[EnrollmentController::class , 'create'])->name('groups.create');
// Route::get('groups/{groups}', [EnrollmentController::class, 'show'])->name('groups.show');
// Route::get('groups/{groups}/edit', [EnrollmentController::class, 'edit'])->name('groups.edit');
// Route::post('/groups', [EnrollmentController::class, 'store'])->name('groups.store');
// Route::patch('groups/{groups}',[EnrollmentController::class, 'update'])->name('groups.update');
// Route::delete('/groups/{groups}', [EnrollmentController::class, 'destroy'])->name('groups.destroy');

Route::resource('groups', EnrollmentController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::view('/test','welcome')->name('test')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
