<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RentRequestController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ServiceListController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutopartController;
use App\Http\Controllers\AutopartsController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

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

// route to save rentacarrequest data in database
Route::get('/rentacar', [RentRequestController::class, 'index'])->name('index');
// Route::post('/rentacar', [RentRequestController::class, 'create'])->name('create');f

// edit,delete and update route for rent request
Route::get('/edit/{id}',[RentRequestController::class, 'edit'])->name('edit')->middleware('admin');
Route::post('/edit/{id}',[RentRequestController::class, 'update'])->name('update')->middleware('admin');
Route::get('/deleter/{id}',[RentRequestController::class, 'destroy'])->name('destroy')->middleware('admin');

// Route for rent cars list
Route::get('/rentcarlist',[RentRequestController::class, 'rentcarlist'])->middleware('admin');
Route::get('/addnewcar',[RentRequestController::class, 'addnewcar'])->middleware('admin');
Route::post('/uploadnewcar',[RentRequestController::class, 'uploadnewcar'])->middleware('admin');
Route::get('/editrentcar/{id}',[RentRequestController::class, 'caredit'])->middleware('admin');
Route::post('/editrentcar/{id}',[RentRequestController::class, 'carupdate'])->middleware('admin');
Route::get('/deleterentcar/{id}',[RentRequestController::class, 'cardestroy'])->middleware('admin');

Route::get('/rentform/{id}',[RentRequestController::class, 'rentform']);
Route::post('/rentform',[RentRequestController::class, 'create']);
Route::get('/rentprice/{id}',[RentRequestController::class, 'rentprice']);


// route to save servicerequest data in database
Route::get('/servicelist', [ServiceRequestController::class, 'index']);
Route::post('/serviceform', [ServiceRequestController::class, 'create']);

// edit,delete and update route for service request
Route::get('/sedit/{id}', [ServiceRequestController::class, 'edit'])->middleware('admin');
Route::post('/sedit/{id}', [ServiceRequestController::class, 'update'])->middleware('admin');
Route::get('/delete/{id}', [ServiceRequestController::class, 'destroy'])->middleware('admin');

// Route for edit,update and delete service available
Route::get('/servicedit/{id}', [ServiceListController::class, 'edit'])->middleware('admin');
Route::post('/servicedit/{id}', [ServiceListController::class, 'update'])->middleware('admin');
Route::get('/servicedelete/{id}', [ServiceListController::class, 'destroy'])->middleware('admin');

// Route for upload service
Route::get('/serviceavail', [ServiceListController::class, 'servlist'])->middleware('admin');
Route::get('/addserviceform', [ServiceListController::class, 'addservice'])->middleware('admin');
Route::post('/upload_service', [ServiceListController::class, 'upload'])->middleware('admin');



// Route for logout button 
Route::get('/logout', [LogoutController::class, 'logout']);

// Route for Service And Rent request in dashboard
Route::get('/servicerequest', [AdminController::class, 'servicerequest'])->middleware('admin');
Route::get('/rentrequest', [AdminController::class, 'rentrequest'])->middleware('admin');


// Route for Mechanics
Route::get('/mechanicslist', [MechanicsController::class, 'index'])->middleware('admin');
Route::post('/mechanicslist', [MechanicsController::class, 'create'])->middleware('admin');
Route::get('/addmechanics', [MechanicsController::class, 'addmechanic'])->middleware('admin');


Route::get('/mechanicedit/{id}', [MechanicsController::class, 'edit'])->middleware('admin');
Route::post('/mechanicedit/{id}', [MechanicsController::class, 'update'])->middleware('admin');
Route::get('/mechanicdelete/{id}', [MechanicsController::class, 'destroy'])->middleware('admin');
 
// Route for Autopart Category 
Route::get('/autopartcategory', [AutopartsController::class, 'index'])->middleware('admin');
Route::get('/createcategory', [AutopartsController::class, 'createcategory'])->middleware('admin');
Route::post('/createcategory', [AutopartsController::class, 'create'])->middleware('admin');
Route::get('/editautopartcategory/{id}', [AutopartsController::class, 'edit'])->middleware('admin');
Route::post('/editautopartcategory/{id}', [AutopartsController::class, 'update'])->middleware('admin');
Route::get('/deleteautopartcategory/{id}', [AutopartsController::class, 'destroy'])->middleware('admin');

//Route for Autoparts
Route::get('/autoparts', [AutopartsController::class, 'indexB']);
Route::get('/productswrtcategory/{category_slug}', [AutopartsController::class, 'catproduct']);
Route::get('/autoparts', [AutopartsController::class, 'indexB']);
Route::get('/productcard/{id}', [AutopartsController::class, 'productcard']);
// Route for AutopartsCart
// Route::post('/add_cart/{id}', [AutopartsController::class, 'add_cart']);

Route::get('/addautopart', [AutopartsController::class, 'addautopart'])->middleware('admin');
Route::post('/uploadautopart', [AutopartsController::class, 'uploadautopart'])->middleware('admin');
Route::get('/autopartlist', [AutopartsController::class, 'autopartlist'])->middleware('admin');
Route::get('/editproduct/{id}', [AutopartsController::class, 'editproduct'])->middleware('admin');
Route::put('/editproduct/{id}', [AutopartsController::class, 'updateproduct'])->middleware('admin');
Route::get('/deleteproduct/{id}', [AutopartsController::class, 'destroyproduct'])->middleware('admin');


// Route For User
Route::get('/admin/users', [UserController::class, 'index'])->middleware('admin');
Route::get('/admin/users/{id}', [UserController::class, 'edit'])->middleware('admin');
Route::post('/admin/users/{id}', [UserController::class, 'update'])->middleware('admin');


Route::get('/serviceform', function(){
    return view ('serviceform');
});


Route::get('/home', function(){
    return view ('home');
});


Route::get('/', function(){
    return view ('home');
});
Route::get('contactussec', function(){
    return view ('contactussec');
});

Route::get('contactus', function () {
    return view('contactus');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard')->middleware('admin');
});

Route::get('/dashboard', [AdminController::class, 'dash'])->name('dashboard')->middleware('admin');

