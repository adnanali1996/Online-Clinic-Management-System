<?php

use Illuminate\Support\Facades\Route;
use App\Models\ContactUs;
use App\Models\User;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//======================== FRONTEND SECTION =============================
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('departments', function(){
    return view('departments');
})->name('departments');

Route::get('contactus', function(){
    return view('contactus')
    ->with('contact', ContactUs::all()->first());
})->name('contactus');

Route::get('doctors', function(){
    return view('doctors');
})->name('doctors');
// FOR SENDING MESSAGE FROM CONTACT US SECTION
Route::post('/sendmessage', [ContactUsController::class, 'send_message'])->name('sendmessage');
//======================== END FRONTEND SECTION =============================

//======================== BACKEND SECTION =============================
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('backend.dashboard');
// })->name('dashboard');

//Route::prefix('dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {
Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->group(function () {
 
    Route::get('/dashboard', function () {
        // Uses first & second middleware...
        return view('backend.dashboard');
    })->name('dashboard');

    // TO SHOW ALL THE DOCTORS IN ADMIN DASHBAORD
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.all');

    // TO CREATE THE DOCTORS IN ADMIN DASHBAORD
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');

    // TO EDIT THE DOCTORS IN ADMIN DASHBAORD
    Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');

    // TO DELETE THE DOCTORS IN ADMIN DASHBAORD
    Route::get('/doctor/delete/{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');

    // TO SHOW THE PROFILE OF SELECTED SINGLE DOCTOR
    Route::get('/doctor/profile/{id}', [DoctorController::class, 'doctor_profile'])->name('doctor.profile');

    // TO SHOW THE PROFILE EDIT PAGE TO THE ADMIN
    Route::get('/doctor/profile/edit/{id}', [DoctorController::class, 'doctor_profile_edit'])->name('doctor.profile.edit');

    // TO SHOW THE PROFILE EDIT PAGE TO THE ADMIN
    Route::get('/patients', [PatientController::class, 'index'])->name('patient.show');

    // TO EDIT THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');

    // TO DELETE THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/delete/{id}', [PatientController::class, 'destroy'])->name('patient.delete');

    // TO CREATE THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');


    // TO SHOW THE APPOINTMENTS SHOW PAGE TO THE ADMIN
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.show');

    // TO EDIT THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');

    // TO DELETE THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/delete/{id}', [AppointmentController::class, 'destroy'])->name('appointment.delete');

    // TO CREATE THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');



    Route::get('permission/add', function(){
        $user = Auth::user();
        $permissions= $user->allPermissions('admin');
        dump($user->allPermissions());
    });
});
//======================== END BACKEND SECTION =============================

//======================== STARTING OF PATIENT ROLE BACKEND SECTION =============================
Route::middleware(['auth:sanctum', 'role:patient'])->prefix('patient')->group(function(){

});

