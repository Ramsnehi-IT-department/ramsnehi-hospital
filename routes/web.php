<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeWebController;
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

// Home page
Route::get('/', function () {
    return view('index');
});

// About page
Route::get('/ramsnehi', function () {
    return view('frontends.ramsnehi');
});

// Overview page
Route::get('/overview', function () {
    return view('frontends.overview');
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

// =========== Hospital Start ===========
// Patient Care page
Route::get('/patientCare', function () {
    return view('frontends.patientCare');
});

// Health Check up plan page
Route::get('/healthCheckUpPlan', function () {
    return view('frontends.healthCheckUpPlan');
});

// Government Schemes page
Route::get('/governmentSchemes', function () {
    return view('frontends.governmentSchemes');
});

// TPA Empanelment page
Route::get('/TPAEmpanelment', function () {
    return view('frontends.TPAEmpanelment');
});

// Patient Success Stories page
Route::get('/patientSuccessStories', function () {
    return view('frontends.patientSuccessStories');
});

// Awards & Achievements page
Route::get('/awardsAchievements', function () {
    return view('frontends.awardsAchievements');
});

// Ramsnehi Optics page
Route::get('/ramsnehiOptics', function () {
    return view('frontends.ramsnehiOptics');
});

// Patient Attenders page
Route::get('/patientAttenders', function () {
    return view('frontends.patientAttenders');
});

// =========== Hospital End ===========

// =========== Departments Start ===========
// =========== Clinical start =========== 
// All Departments page
Route::get('/allDept', function () {
    return view('frontends.allDept');
});

// All Clinical Departments page
Route::get('/clinicalServices', function () {
    return view('frontends.clinicalServices');
});

// Anaesthesiology page
Route::get('/anaesthesiology', function () {
    return view('frontends.anaesthesiology');
});

// Cardiology Department page
Route::get('/cardiologyDepartment', function () {
    return view('frontends.cardiologyDepartment');
});

// Dental page
Route::get('/dental', function () {
    return view('frontends.dental');
});

// General Medicine page
Route::get('/generalMedicine', function () {
    return view('frontends.generalMedicine');
});

// General Surgery page
Route::get('/generalSurgery', function () {
    return view('frontends.generalSurgery');
});

// Neuro Surgery page
Route::get('/neuroSurgery', function () {
    return view('frontends.neuroSurgery');
});

// Gynecology page
Route::get('/gynecology', function () {
    return view('frontends.gynecology');
});

// Ophthalmology page
Route::get('/ophthalmology', function () {
    return view('frontends.ophthalmology');
});

// Orthopedic Surgery page
Route::get('/orthopedic', function () {
    return view('frontends.orthopedic');
});

// Paediatric page
Route::get('/Paediatric', function () {
    return view('frontends.Paediatric');
});

// ENT page
Route::get('/ent', function () {
    return view('frontends.ent');
});
// =========== Clinical end ===========

// =========== Diagnostic Services start ===========
// All Diagnostic
Route::get('/diagnosticServices', function () {
    return view('frontends.diagnosticServices');
});

// 2D Echo page
Route::get('/2DEcho', function () {
    return view('frontends.2DEcho');
});

// DSA Lab page
Route::get('/DSALab', function () {
    return view('frontends.DSALab');
});

// ECG page
Route::get('/ECG', function () {
    return view('frontends.ECG');
});

// MRI page
Route::get('/MRI', function () {
    return view('frontends.MRI');
});

// Tread Mill Testing page
Route::get('/treadMillTesting', function () {
    return view('frontends.treadMillTesting');
});

// Ultrasound page
Route::get('/ultrasound', function () {
    return view('frontends.ultrasound');
});

// X-Ray page
Route::get('/XRay', function () {
    return view('frontends.XRay');
});

// =========== Diagnostic Services end =========== 

// =========== Laboratory Services start ===========
// All Laboratory
Route::get('/laboratoryServices', function () {
    return view('frontends.laboratoryServices');
});

// Clinical Bio-Chemistry page
Route::get('/clinicalBioChemistry', function () {
    return view('frontends.clinicalBioChemistry');
});

// Clinical Microbiology and Serology page
Route::get('/clinicalMicrobiologySerology', function () {
    return view('frontends.clinicalMicrobiologySerology');
});

// Clinical Pathology page
Route::get('/clinicalPathology', function () {
    return view('frontends.clinicalPathology');
});

// Cytopathology page
Route::get('/cytopathology', function () {
    return view('frontends.cytopathology');
});

// Haematology page
Route::get('/haematology', function () {
    return view('frontends.haematology');
});

// Histopathology page
Route::get('/histopathology', function () {
    return view('frontends.histopathology');
});

// =========== Laboratory Services end =========== 

// =========== Emergency start ===========
// Emergency page
Route::get('/emergency', function () {
    return view('frontends.emergency');
});
// =========== Emergency end =========== 

// =========== Pharmacy start ===========
// Pharmacy page
Route::get('/pharmacy', function () {
    return view('frontends.pharmacy');
});
// =========== Pharmacy end =========== 

// =========== Transfusion Services start ===========
// All Transfusion Services
Route::get('/transfusionServices', function () {
    return view('frontends.transfusionServices');
});

// Blood Transfusions Services page
Route::get('/bloodTransfusionsServices', function () {
    return view('frontends.bloodTransfusionsServices');
});

// Blood Bank page
Route::get('/bloodBank', function () {
    return view('frontends.bloodBank');
});
// =========== Transfusion Services end =========== 

// =========== Professions Allied to Medicine start ===========
// All Professions Services
Route::get('/professionsAlliedToMedicine', function () {
    return view('frontends.professionsAlliedToMedicine');
});

// Ambulance page
Route::get('/ambulance', function () {
    return view('frontends.ambulance');
});

// Dietetics page
Route::get('/dietetics', function () {
    return view('frontends.dietetics');
});

// Physiotherapy page
Route::get('/physiotherapy', function () {
    return view('frontends.physiotherapy');
});
// =========== Professions Allied to Medicine end =========== 
// =========== Departments End ===========

// =========== Events Start ===========
// All Events page
Route::get('/allEvents', function () {
    return view('frontends.allEvents');
});

// Hospital Events page
Route::get('/hospitalEvents', function () {
    return view('frontends.hospitalEvents');
});

// Health Camp page
Route::get('/healthCamp', function () {
    return view('frontends.healthCamp');
});

// Health Talks page
Route::get('/healthTalks', function () {
    return view('frontends.healthTalks');
});
// =========== Events End ===========

// =========== Media Coverage Start ===========
// All Media's Coverage page
Route::get('/allMediaCoverage', function () {
    return view('frontends.allMediaCoverage');
});

// Doctor's Desk page
Route::get('/doctorsDesk', function () {
    return view('frontends.doctorsDesk');
});

// Print Media page
Route::get('/printMedia', function () {
    return view('frontends.printMedia');
});

// Digital Media page
Route::get('/digitalMedia', function () {
    return view('frontends.digitalMedia');
});
// =========== Media Coverage End ===========

// Career page
Route::get('/career', function () {
    return view('frontends.career');
});

// Contact page
Route::get('/contact', function () {
    return view('frontends.contact');
});

// ================================= Frontend End =================================

// ================================= Admin Panel Start =================================
// =========== Login ===========
Auth::routes();
Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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
    Route::get('/addOpening', 'createOpening')->name('careers.addOpening');
    Route::post('/storeOpening', 'storeOpening')->name('careers.storeOpening');
    Route::get('/addPublish', 'createPublish')->name('careers.addPublish');
    Route::post('/processPublish', 'processPublish')->name('careers.processPublish');
    Route::get('/applicantList', 'applicantList')->name('careers.applicantList');
});
// =========== Career admin End ===========

// =========== User Manager Start ===========
Route::prefix('users')->controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/index', 'index')->name('users.index');
    Route::get('/add', 'create')->name('users.create');
    Route::post('/store', 'store')->name('users.store');
    Route::get('/edit/{id}', 'edit')->name('users.edit');
    Route::put('/update/{id}', 'update')->name('users.update');
    Route::get('/delete/{id}', 'destroy')->name('users.destroy');
// Log User
    Route::get('/log', 'userLog')->name('users.log');
});
// =========== User Manager End ===========

// ================================= Admin Panel End =================================