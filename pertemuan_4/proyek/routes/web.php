<?php

use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = Student::all();

    return view('welcome', [
        "data" => $data
    ]);
})->name('welcome');

Route::get('/student-dashboard', function () {

    $data = Student::all();

    return view('studentsDashboard', [
        "data" => $data,
        "title" => "Students Dashboard"
    ]);
})->name('dashboard.students');


// Route::get('/lecturer-dashboard', function () {

//     $data = Lecturer::all();

//     return view('lecturerDashboard', [
//         "data" => $data,
//         "title" => "Lecturer Dashboard"
//     ]);
// })->name('dashboard.lecturers');