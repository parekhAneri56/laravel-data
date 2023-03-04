<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\addemployeecontroller;
use App\Http\controllers\admin\addservicecontroller;
use App\Http\Controllers\admin\gallarycontroller;
use App\Http\Controllers\admin\addblogcontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\gallaryHomecontroller;
use App\Http\Controllers\gallaryDetailHomecontroller;
use App\Http\Controllers\blogHomecontroller;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    return view('content');
});

Route::get("/about-us",function(){
    return view ('creative-agency.about');
});
//service route user side

//Route::get("/service",function(){
  //  return view ('creative-agency.service');
//});

Route::get('/service',[Homecontroller::class,'index']);
Route::get("/service",[Homecontroller::class,"show"]);


//Route::get("/blog",function(){
  //  return view ('creative-agency.blog');
//});

//blog user routing

Route::get('/blog',[blogHomecontroller::class,'index']);
Route::get("/blog",[blogHomecontroller::class,"show"]);


// Route::get("/blog-detail",function(){
//     return view ('creative-agency.blog-details');
// });

//Route::get("/gallary",function(){
 //   return view ('creative-agency.Gallary');
//});

//galary user routing

Route::get('/gallary',[gallaryHomecontroller::class,'index']);
Route::get("/gallary",[gallaryHomecontroller::class,"show"]);

//galary-detail user routing

// Route::get('/',[gallaryDetailHomecontroller::class,'index']);
Route::get("/gallarydetail/{id}",[gallaryDetailHomecontroller::class,"show"]);


Route::get("/contact-us",function(){
    return view ('creative-agency.contact');
});

//Route::get('/', function () {
  //  return view('creative-agency.content');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// add Employee here
Route::get('/admin-addemployee',[addemployeecontroller::class,'index']);
Route::post("/admin-addemployee",[addemployeecontroller::class,"store"]);
Route::get("/admin-manageemployee",[addemployeecontroller::class,"show"]);
Route::get("/admin-manageemployee/{id}",[addemployeecontroller::class,"destroy"]);
Route::get("/admin-editemployee/{id}",[addemployeecontroller::class,"edit"]);
Route::post("/admin-editemployee/{id}",[addemployeecontroller::class,"update"]);

// add service here
Route::get('/admin-addservice',[addservicecontroller::class,'index']);
Route::post("/admin-addservice",[addservicecontroller::class,"store"]);
Route::get("/admin-manageservice",[addservicecontroller::class,"show"]);
Route::get("/admin-manageservice/{id}",[addservicecontroller::class,"destroy"]);
Route::get("/admin-editservice/{id}",[addservicecontroller::class,"edit"]);
Route::post("/admin-editservice/{id}",[addservicecontroller::class,"update"]);

// add Gallary here
Route::get('/admin-addgallary',[gallarycontroller::class,'index']);
Route::post("/admin-addgallary",[gallarycontroller::class,"store"]);
Route::get("/admin-managegallary",[gallarycontroller::class,"show"]);
Route::get("/admin-managegallary/{id}",[gallarycontroller::class,"destroy"]);
 Route::get("/admin-editgallary/{id}",[gallarycontroller::class,"edit"]);
Route::post("/admin-editgallary/{id}",[gallarycontroller::class,"update"]);

// add Gallary here
Route::get('/admin-addblog',[addblogcontroller::class,'index']);
Route::post("/admin-addblog",[addblogcontroller::class,"store"]);
Route::get("/admin-manageblog",[addblogcontroller::class,"show"]);
Route::get("/admin-manageblog/{id}",[addblogcontroller::class,"destroy"]);
 Route::get("/admin-editblog/{id}",[addblogcontroller::class,"edit"]);
Route::post("/admin-editblog/{id}",[addblogcontroller::class,"update"]);


// contact page routing
Route::get("/contact-us",[contactcontroller::class,"index"]);
Route::post("/contact-us",[contactcontroller::class,"store"]);
Route::get("/admin-managecontact", [contactcontroller::class, "show"]);
Route::get("/admin-managecontact/{id}", [contactcontroller::class,"destroy"]);

//user register page routing

Route::get("/register-us",[RegisterController::class,"index"]);
Route::post("/register-us",[RegisterController::class,"store"]);


require __DIR__.'/auth.php';
