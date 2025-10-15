<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    // User
    Route::get('/user-dashboard', [UserController::class, 'dashboard'])->name('dashboard.users');

});

Route::get('/', function (Request $request) {

    $search = $request->input('search');

    $data = Student::query()
        ->when($search, function ($query, $search) {
            $query->where('nama', 'like', "%{$search}%")
                ->orWhere('nim', 'like', "%{$search}%")
                ->orWhere('angkatan', 'like', "%{$search}%")
                ->orWhere('kelas', 'like', "%{$search}%")
                ->orWhereHas('lecturer', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
        })->get();

    return view('welcome', [
        'data' => $data,
        'search' => $search,
    ]);
})->name('welcome');

