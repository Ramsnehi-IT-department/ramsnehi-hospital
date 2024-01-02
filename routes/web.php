<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// =========== Website Frontends ===========
Route::get('/', function () {
    return view('index');
});

// About page
Route::get('/about', function () {
    return view('frontends.about');
});

// Vision page
Route::get('/visionMission', function () {
    return view('frontends.visionMission');
});

// President page
Route::get('/president', function () {
    return view('frontends.president');
});

// Secretary page
Route::get('/secretary', function () {
    return view('frontends.secretary');
});

// Certificate page
Route::get('/certificate', function () {
    return view('frontends.certificate');
});

// Departments page
Route::get('/departments', function () {
    return view('frontends.departments');
});

// Contact page
Route::get('/contact', function () {
    return view('frontends.contact');
});

// =========== Departments ===========
// All Departments page
Route::get('/departments/allDept', function () {
    return view('frontends.departments.allDept');
});

// Neuro Surgery page
Route::get('/departments/neuroSurgery', function () {
    return view('frontends.departments.neuroSurgery');
});

// Cardiology Department page
Route::get('/departments/cardiologyDepartment', function () {
    return view('frontends.departments.cardiologyDepartment');
});

// Gynecology page
Route::get('/departments/gynecology', function () {
    return view('frontends.departments.gynecology');
});

// Orthopedic Surgery page
Route::get('/departments/orthopedic', function () {
    return view('frontends.departments.orthopedic');
});

// Pediatric page
Route::get('/departments/Pediatric', function () {
    return view('frontends.departments.Pediatric');
});

// Ophthalmology page
Route::get('/departments/ophthalmology', function () {
    return view('frontends.departments.ophthalmology');
});

// Ear Nose Throat page
Route::get('/departments/ent', function () {
    return view('frontends.departments.ent');
});

// General Surgery page
Route::get('/departments/generalSurgery', function () {
    return view('frontends.departments.generalSurgery');
});

// Dental page
Route::get('/departments/dental', function () {
    return view('frontends.departments.dental');
});

// Joint replacement surgery page
Route::get('/departments/jointReplacementSurgery', function () {
    return view('frontends.departments.jointReplacementSurgery');
});

// =========== Website Admin Panel ===========
Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
