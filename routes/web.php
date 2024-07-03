<?php

use App\Http\Controllers\Auth\RolesController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdvertiseController;
use App\Http\Controllers\Backend\AboutMessageController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileController;
use App\Http\Controllers\Backend\IHMController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\StatusController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\UniversityController;
use App\Http\Controllers\Backend\StaffUniversityController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CompanyProfileController;
use App\Http\Controllers\Backend\HomeServiceController;
use App\Http\Controllers\Backend\HomeCountryController;
use App\Http\Controllers\Backend\HomeExprienceController;
use App\Http\Controllers\Backend\HomeWhyUsController;
use App\Http\Controllers\Backend\WhyCompanyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect('https://cvics.org');
//     // return view('welcome');
// });
// php /path/to/application/artisan queue:work --queue=high,default --stop-when-empty

/** FRONTEND **/
Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/serial', [ApplicantController::class, 'serialUpdate'])->name('serial');

// IHM Application Form Routes
Route::get('ihm/apply', [IHMController::class, 'form'])->name('ihm.form');
Route::post('ihm/apply', [IHMController::class, 'store'])->name('ihm.store');
/** FRONTEND **/



/** BACKEND **/
Auth::routes(['verify' => true]);
Route::prefix('admin')->middleware(['verified', 'auth'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('profile', [UsersController::class, 'profile'])->name('profile');
    Route::put('profile/update/{id}', [UsersController::class, 'updateProfile'])->name('profile.update');

    // ***Admin Routes***
    Route::middleware(['role:Super Admin'])->group(function () {
        // Role Management Routes
        Route::resource('roles', RolesController::class);

        // User Management Routes
        Route::resource('users', UsersController::class);

        // Assign Staffs to Universities Routes
        Route::resource('staffs', StaffUniversityController::class);

        // Status Routes
        Route::resource('status', StatusController::class);

        // Task Routes
        Route::resource('tasks', TaskController::class);
    });

    // Files Routes
    Route::resource('files', FileController::class);

    // Package Routes
    Route::resource('packages', PackageController::class);

    // University Routes
    Route::resource('universities', UniversityController::class);

    // Subject Routes
    Route::resource('subjects', SubjectController::class);

    // Course Route
    Route::resource('courses', CourseController::class);

    // Advertisement Route
    Route::resource('advertisements', AdvertiseController::class);

    // Service Route
    Route::resource('services', ServiceController::class);
    
    // Contact Route
    Route::resource('contacts', ContactController::class);
    
    // Site settings Route
    Route::resource('site_settings', SiteSettingController::class);
    
    // About Message Route
    Route::resource('messages', AboutMessageController::class);
    
    // Company Profiles Route
    Route::resource('company_profiles', CompanyProfileController::class);

    // WhyCompany Route
    Route::resource('why-companys', WhyCompanyController::class);

    // Destination Route
    Route::resource('destinations', DestinationController::class);
    
    // About Route
    Route::resource('abouts', AboutController::class);

    // Home Service Route
    Route::resource('home_services', HomeServiceController::class);

    // Home Country Route
    Route::resource('home_countrys', HomeCountryController::class);
    
    // Home exprience Route
    Route::resource('home_expriences', HomeExprienceController::class);

    // Home Why Us Route
    Route::resource('home_why_us', HomeWhyUsController::class);

    // Blogs Route
    Route::resource('blogs', BlogController::class);
});
/** BACKEND **/
