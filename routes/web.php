<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeWebController;
use App\Http\Controllers\OpeningController;
use App\Http\Controllers\QualityController;


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

// ================================= Frontend Start =================================

// ==== Home Start ====
Route::get('/', function () {
    return view('index');
});
// ==== Home End ====

// ============== Ramsnehi Overview Start ==============
// Overview
Route::get('/overview', function () {
    return view('frontends.overview');
});

// Vision
Route::get('/visionMission', function () {
    return view('frontends.visionMission');
});

// President
Route::get('/president', function () {
    return view('frontends.president');
});

// Secretary
Route::get('/secretary', function () {
    return view('frontends.secretary');
});
// ============== Ramsnehi Overview End ==============

//  ============== Patient Care Start ==============
// Health Check up plan
Route::get('/healthCheckUpPlan', function () {
    return view('frontends.healthCheckUpPlan');
});

// Government Schemes
Route::get('/governmentSchemes', function () {
    return view('frontends.governmentSchemes');
});

// TPA Empanelment
Route::get('/TPAEmpanelment', function () {
    return view('frontends.TPAEmpanelment');
});

// Patient Success Stories
Route::get('/patientSuccessStories', function () {
    return view('frontends.patientSuccessStories');
});

// Awards & Achievements
Route::get('/awardsAchievements', function () {
    return view('frontends.awardsAchievements');
});

// Ramsnehi Optics
Route::get('/ramsnehiOptics', function () {
    return view('frontends.ramsnehiOptics');
});

// Patient Attenders
Route::get('/patientAttenders', function () {
    return view('frontends.patientAttenders');
});
// =========== Patient Care End ===========

// =========== Departments Start ===========
// Cardiology
Route::get('/cardiologyDepartment', function () {
    return view('frontends.cardiologyDepartment');
});

// Dental
Route::get('/dental', function () {
    return view('frontends.dental');
});

// General Medicine
Route::get('/generalMedicine', function () {
    return view('frontends.generalMedicine');
});

// General Surgery
Route::get('/generalSurgery', function () {
    return view('frontends.generalSurgery');
});

// Ophthalmology
Route::get('/ophthalmology', function () {
    return view('frontends.ophthalmology');
});

// Pathology
Route::get('/pathology', function () {
    return view('frontends.pathology');
});

// Emergency
Route::get('/emergency', function () {
    return view('frontends.emergency');
});

// Pharmacy
Route::get('/pharmacy', function () {
    return view('frontends.pharmacy');
});

// Orthopedic
Route::get('/orthopedic', function () {
    return view('frontends.orthopedic');
});

// Paediatric
Route::get('/Paediatric', function () {
    return view('frontends.Paediatric');
});

// Radiology
Route::get('/radiology', function () {
    return view('frontends.radiology');
});

// Physiotherapy
Route::get('/physiotherapy', function () {
    return view('frontends.physiotherapy');
});

// Gynecology
Route::get('/gynecology', function () {
    return view('frontends.gynecology');
});

// Neuro Surgery
Route::get('/neuroSurgery', function () {
    return view('frontends.neuroSurgery');
});

// ENT
Route::get('/ent', function () {
    return view('frontends.ent');
});
// =========== Departments end ===========

// =========== Services start ===========
// Diagnostic Services
Route::get('/diagnosticServices', function () {
    return view('frontends.diagnosticServices');
});

// Imaging Services
Route::get('/imagingServices', function () {
    return view('frontends.imagingServices');
});

// Laboratory Services
Route::get('/laboratoryServices', function () {
    return view('frontends.laboratoryServices');
});

// Transfusion Services
Route::get('/transfusionServices', function () {
    return view('frontends.transfusionServices');
});

// Professions Services
Route::get('/professionsAlliedToMedicine', function () {
    return view('frontends.professionsAlliedToMedicine');
});
// =========== Services start ===========


// =========== Events Start ===========
// Hospital Events
Route::get('/hospitalEvents', function () {
    return view('frontends.hospitalEvents');
});

// Health Camp
Route::get('/healthCamp', function () {
    return view('frontends.healthCamp');
});

// Training Program
Route::get('/trainingProgram', function () {
    return view('frontends.trainingProgram');
});
// =========== Events End ===========

// =========== Media Start ===========
// Doctor's Desk
Route::get('/doctorsDesk', function () {
    return view('frontends.doctorsDesk');
});

// Print Media
Route::get('/printMedia', function () {
    return view('frontends.printMedia');
});

// Digital Media
Route::get('/digitalMedia', function () {
    return view('frontends.digitalMedia');
});
// =========== Media End ===========

// =========== Career Start ===========
Route::get('/career', [CareerController::class, 'getResume'])->name('frontends.career');
Route::post('/career', [CareerController::class, 'submitResume'])->name('frontends.career');
// =========== Career End ===========

// =========== Contact Start ===========
Route::get('/contact', [ContactController::class, 'getContact'])->name('frontends.contact');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('frontends.Contact');
// =========== Contact End ===========

// ================================= Frontend End =================================

// ================================= Admin Panel Start =================================

// =========== User Login Start ===========
Auth::routes();
Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// =========== User Login End ===========

// =========== Quality admin Start ===========
Route::prefix('quality')->controller(QualityController::class)->group(function () {
    Route::get('/index', 'index')->name('qualities.index');
    // Route::get('/addOpening', 'createOpening')->name('careers.addOpening');
    // Route::post('/storeOpening', 'storeOpening')->name('careers.storeOpening');
});
// =========== Quality admin End ===========

// =========== Gallery Start ===========
Route::prefix('gallery')->controller(GalleryController::class)->group(function () {
    Route::get('/index', 'index')->name('galleries.index');
    Route::get('/create', 'create')->name('galleries.create');
    Route::post('/store', 'store')->name('galleries.store');
});
// =========== Gallery End ===========

// =========== Career admin Start ===========
Route::prefix('career')->controller(CareerController::class)->group(function () {
    Route::get('/index', 'index')->name('careers.index');
    Route::get('/application', 'view')->name('careers.application');
});
// =========== Career admin End ===========

// =========== Opening admin Start ===========
Route::prefix('openings')->controller(OpeningController::class)->group(function () {
    Route::get('/index', 'index')->name('openings.index');
    Route::get('/create', 'create')->name('openings.create');
    Route::post('/store', 'store')->name('openings.store');
    Route::get('/edit/{id}', 'edit')->name('openings.edit');
    Route::put('/update/{opening}', 'update')->name('openings.update');
    Route::post('/changeStatus', 'changeStatus')->name('openings.changeStatus');
});
// =========== Opening admin End ===========

// =========== User Manager Start ===========
Route::prefix('users')->controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/index', 'index')->name('users.index');
    Route::get('/create', 'create')->name('users.create');
    Route::post('/store', 'store')->name('users.store');
    Route::get('/edit/{id}', 'edit')->name('users.edit');
    Route::put('/update/{user}', 'update')->name('users.update');
    Route::post('/changeStatus', 'changeStatus')->name('users.changeStatus');
    Route::get('/delete/{id}', 'destroy')->name('users.destroy');
// Log User
    Route::get('/log', 'userLog')->name('users.log');
});

// =========== User Manager End ===========
// ================================= Admin Panel End =================================
