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

// =========== Patient Care ===========
// Patient Care page
Route::get('/patientCare', function () {
    return view('frontends.patientCare');
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
Route::get('/allDept', function () {
    return view('frontends.allDept');
});

// Neuro Surgery page
Route::get('/neuroSurgery', function () {
    return view('frontends.neuroSurgery');
});

// Cardiology Department page
Route::get('/cardiologyDepartment', function () {
    return view('frontends.cardiologyDepartment');
});

// Gynecology page
Route::get('/gynecology', function () {
    return view('frontends.gynecology');
});

// Orthopedic Surgery page
Route::get('/orthopedic', function () {
    return view('frontends.orthopedic');
});

// Pediatric page
Route::get('/Pediatric', function () {
    return view('frontends.Pediatric');
});

// Ophthalmology page
Route::get('/ophthalmology', function () {
    return view('frontends.ophthalmology');
});

// Ear Nose Throat page
Route::get('/ent', function () {
    return view('frontends.ent');
});

// General Medicine page
Route::get('/generalMedicine', function () {
    return view('frontends.generalMedicine');
});

// General Surgery page
Route::get('/generalSurgery', function () {
    return view('frontends.generalSurgery');
});

// Dental page
Route::get('/dental', function () {
    return view('frontends.dental');
});

// Joint replacement surgery page
Route::get('/jointReplacementSurgery', function () {
    return view('frontends.jointReplacementSurgery');
});

// =========== Website Admin Panel ===========
Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
