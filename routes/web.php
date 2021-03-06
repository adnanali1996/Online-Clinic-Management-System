<?php

use Illuminate\Support\Facades\Route;
use App\Models\ContactUs;
use App\Models\User;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StaffLeaveController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\StaffAttendenceController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\EmployeeSalaryController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\SettingController;

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

    //====================================== DOCTOR MODULE ==================================
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
    //====================================== END DOCTOR MODULE ==================================


    //====================================== PATIENTS MODULE ==================================
    // TO SHOW THE PROFILE EDIT PAGE TO THE ADMIN
    Route::get('/patients', [PatientController::class, 'index'])->name('patient.show');
   // TO EDIT THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
   // TO DELETE THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/delete/{id}', [PatientController::class, 'destroy'])->name('patient.delete');
   // TO CREATE THE PATIENT IN ADMIN DASHBAORD
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
    //====================================== END PATIENTS MODULE ==================================


    //====================================== APPOINTMENTS MODULE ==================================

    // TO SHOW THE APPOINTMENTS SHOW PAGE TO THE ADMIN
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.show');
    // TO EDIT THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');
    // TO DELETE THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/delete/{id}', [AppointmentController::class, 'destroy'])->name('appointment.delete');
    // TO CREATE THE APPOINTMENTS IN ADMIN DASHBAORD
    Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');

    //====================================== END APPOINTMENTS MODULE ==================================


    //====================================== DOCTOR SCHEDULE MODULE ==================================
    // TO SHOW THE DOCTOR SCHEDULE SHOW PAGE TO THE ADMIN
    Route::get('/schedules', [DoctorScheduleController::class, 'index'])->name('schedules.show');
// TO EDIT THE DOCTOR SCHEDULE IN ADMIN DASHBAORD
    Route::get('/schedule/edit/{id}', [DoctorScheduleController::class, 'edit'])->name('schedule.edit');
// TO DELETE THE DOCTOR SCHEDULE IN ADMIN DASHBAORD
    Route::get('/schedule/delete/{id}', [DoctorScheduleController::class, 'destroy'])->name('schedule.delete');
// TO CREATE THE DOCTOR SCHEDULE IN ADMIN DASHBAORD
    Route::get('/schedule/create', [DoctorScheduleController::class, 'create'])->name('schedule.create');
    //====================================== END DOCTOR SCHEDULE MODULE ==================================


    //====================================== DEPARTMENT MODULE ==================================
    // TO SHOW THE DEPARTMENT SHOW PAGE TO THE ADMIN
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.show');
 // TO EDIT THE DEPARTMENT IN ADMIN DASHBAORD
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
 // TO DELETE THE DEPARTMENT IN ADMIN DASHBAORD
    Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');
 // TO CREATE THE DEPARTMENT IN ADMIN DASHBAORD
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
    //====================================== DEPARTMENT MODULE ==================================



    // =======================================EMPLOYEE MANAGEMENT MODULE ======================================


    //====================================== EMPLOYEE MODULE ==================================
    // TO SHOW THE EMPLOYEE SHOW PAGE TO THE ADMIN
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.show');
  // TO EDIT THE EMPLOYEE IN ADMIN DASHBAORD
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
  // TO DELETE THE EMPLOYEE IN ADMIN DASHBAORD
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
  // TO CREATE THE EMPLOYEE IN ADMIN DASHBAORD
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    //====================================== EMPLOYEE MODULE ==================================

    //====================================== LEAVE MODULE ==================================
    // TO SHOW THE LEAVE SHOW PAGE TO THE ADMIN
    Route::get('/leaves', [StaffLeaveController::class, 'index'])->name('leaves.show');
   // TO EDIT THE LEAVE IN ADMIN DASHBAORD
    Route::get('/leave/edit/{id}', [StaffLeaveController::class, 'edit'])->name('leave.edit');
   // TO DELETE THE LEAVE IN ADMIN DASHBAORD
    Route::get('/leave/delete/{id}', [StaffLeaveController::class, 'destroy'])->name('leave.delete');
   // TO CREATE THE LEAVE IN ADMIN DASHBAORD
    Route::get('/leave/create', [StaffLeaveController::class, 'create'])->name('leave.create');
    //====================================== LEAVE MODULE ==================================

    //====================================== HOLIDAYS MODULE ==================================
    // TO SHOW THE HOLIDAYS SHOW PAGE TO THE ADMIN
    Route::get('/holidays', [HolidayController::class, 'index'])->name('holidays.show');
    // TO EDIT THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/holiday/edit/{id}', [HolidayController::class, 'edit'])->name('holiday.edit');
    // TO DELETE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/holiday/delete/{id}', [HolidayController::class, 'destroy'])->name('holiday.delete');
    // TO CREATE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/holiday/create', [HolidayController::class, 'create'])->name('holiday.create');
    //====================================== LEAVE MODULE =====================================
    // ======================================= END EMPLOYEE MANAGEMENT MODULE ======================================

    //====================================== HOLIDAYS MODULE ==================================
    // TO SHOW THE HOLIDAYS SHOW PAGE TO THE ADMIN
    Route::get('/attendence', [StaffAttendenceController::class, 'index'])->name('attendence.show');


    //====================================== LEAVE MODULE ===================================== 



    // ======================================= ACCOUNT MANAGEMENT MODULE ======================================
    //====================================== INVOICES MODULE ==================================
    // TO SHOW THE INVOICES SHOW PAGE TO THE ADMIN
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.show');
    // TO EDIT THE INVOICES IN ADMIN DASHBAORD
    Route::get('/invoice/edit/{id}', [InvoiceController::class, 'edit'])->name('invoice.edit');
    // TO DELETE THE INVOICES IN ADMIN DASHBAORD
    Route::get('/invoice/delete/{id}', [InvoiceController::class, 'destroy'])->name('invoice.delete');
    // TO CREATE THE INVOICES IN ADMIN DASHBAORD
    Route::get('/invoice/create', [InvoiceController::class, 'create'])->name('invoice.create');
    // TO VIEW THE INVOICES IN ADMIN DASHBAORD
    Route::get('/invoice/view/{id}', [InvoiceController::class, 'show'])->name('invoice.view');

    //====================================== END INVOICES MODULE =====================================


    //====================================== EXPENSE MODULE ==================================
    // TO SHOW THE HOLIDAYS SHOW PAGE TO THE ADMIN
    Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.show');
    // TO EDIT THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/expense/edit/{id}', [ExpenseController::class, 'edit'])->name('expense.edit');
    // TO DELETE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/expense/delete/{id}', [ExpenseController::class, 'destroy'])->name('expense.delete');
    // TO CREATE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
    //====================================== END EXPENSE MODULE =====================================
    // ======================================= END ACCOUNT MANAGEMENT MODULE ======================================


    // ======================================= PAYROLL MANAGEMENT MODULE ======================================
    //====================================== EMPLOYEE SALARY MODULE =====================================
    // TO SHOW THE HOLIDAYS SHOW PAGE TO THE ADMIN
    Route::get('/salary', [EmployeeSalaryController::class, 'index'])->name('salary.show');
    // TO EDIT THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/salary/edit/{id}', [EmployeeSalaryController::class, 'edit'])->name('salary.edit');
    // TO DELETE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/salary/delete/{id}', [EmployeeSalaryController::class, 'destroy'])->name('salary.delete');
    // TO CREATE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/salary/create', [EmployeeSalaryController::class, 'create'])->name('salary.create');
    // TO CREATE THE HOLIDAYS IN ADMIN DASHBAORD
    Route::get('/salary/view/{id}', [EmployeeSalaryController::class, 'show'])->name('salary.view');
    //====================================== END EMPLOYEE SALARY MODULE =====================================
    // ======================================= END ROLL MANAGEMENT MODULE ======================================


     // ======================================= ACTIVITIES MANAGEMENT MODULE ======================================
    // TO SHOW THE ACTIVITIES TO THE ADMIN
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.show');
    // TO DELETE THE ACTIVITIES TO THE ADMIN
    Route::get('/activity/delete/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');
    // ======================================= END ACTIVITIES MODULE ======================================


    // ======================================= BLOG MANAGEMENT MODULE ======================================
    // TO SHOW THE BLOGS SHOW PAGE TO THE ADMIN
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.show');
    // TO EDIT THE BLOGS IN ADMIN DASHBAORD
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    // TO DELETE THE BLOGS IN ADMIN DASHBAORD
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    // TO CREATE THE BLOGS IN ADMIN DASHBAORD
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    // TO CREATE THE BLOGS IN ADMIN DASHBAORD
    Route::get('/blog/view/{id}', [BlogController::class, 'show'])->name('blog.view');
    // ======================================= END BLOG MANAGEMENT MODULE ======================================


    // ======================================= ASSETS MANAGEMENT MODULE ======================================
    // TO SHOW THE ASSETS SHOW PAGE TO THE ADMIN
    Route::get('/assets', [AssetController::class, 'index'])->name('assets.show');
    // TO EDIT THE ASSETS IN ADMIN DASHBAORD
    Route::get('/asset/edit/{id}', [AssetController::class, 'edit'])->name('asset.edit');
    // TO DELETE THE ASSETS IN ADMIN DASHBAORD
    Route::get('/asset/delete/{id}', [AssetController::class, 'destroy'])->name('asset.delete');
    // TO CREATE asset ASSETS IN ADMIN DASHBAORD
    Route::get('/asset/create', [AssetController::class, 'create'])->name('asset.create');
    // ======================================= END ASSETS MANAGEMENT MODULE ======================================


    // ======================================= SETTING MANAGEMENT MODULE ==========================================
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.show');
    Route::get('/localization', [SettingController::class, 'localization'])->name('localization.show');
    Route::get('/theme-setting', [SettingController::class, 'theme_setting'])->name('theme-setting.show');
    Route::get('/roles-permissions', [SettingController::class, 'roles_permissions'])->name('roles-permissions.show');
    Route::get('/invoice-settings', [SettingController::class, 'invoice_settings'])->name('invoice-settings.show');
    Route::get('/notifications-settings', [SettingController::class, 'notifications_settings'])->name('notifications-settings.show');
    Route::get('/change-password', [SettingController::class, 'change_password'])->name('change-password.show');
    Route::get('/leave-type', [SettingController::class, 'leave_type'])->name('leave-type.show');
    // TO EDIT THE LEAVE TYPE IN ADMIN DASHBAORD
    Route::get('/leave-type/edit/{id}', [SettingController::class, 'leave_type_edit'])->name('leave-type.edit');
    // TO DELETE THE LEAVE TYPE IN ADMIN DASHBAORD
    Route::get('/leave-type/delete/{id}', [SettingController::class, 'leave_type_destroy'])->name('leave-type.delete');
    // TO CREATE LEAVE TYPE IN ADMIN DASHBAORD
    Route::get('/leave-type/create', [SettingController::class, 'leave_type_create'])->name('leave-type.create');

    // ======================================= END SETTING MANAGEMENT MODULE ======================================
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

