<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\systemcontroller;
use App\Http\controllers\contactcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\controllers\Admin\AddCategoryController;
use App\Http\Controllers\Admin\AddSubCategoryController;
use App\Http\Controllers\Admin\AddproductController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

// contact us view routes

/*Route::get('/', function () {
    return view('contactus');
});

Route::get('/our-teams', function () {
    return view('teams');
});

Route::get('/our-gallary', function () {
    return view('gallary');
});

Route::get('/our-services', function () {
    return view('services');
});
*/

// template integrations and app routing

//Route::get("/",[HomeController::class,'index']);
//Route::get("/about-us",function(){
  //  return view('Company.about');
//});

// create a SYSTEM app routing

Route::get("/",[systemcontroller::class,"index"]);
Route::get("/about-us",function(){
    return view ('systemapp.about');
});

// contact page routing
Route::get("/contact-us",[contactcontroller::class,"index"]);
Route::post("/contact-us",[contactcontroller::class,"store"]);

// Admin routing here
Route::get("/admin-login", [AdminLoginController::class,"index"]);
Route::get("/admin-login/admin-dashboard", [AdminDashboardController::class,"index"]);
Route::get("/admin-login/managecontact", [contactcontroller::class, "show"]);
Route::get("/admin-login/managecontact/{id}", [contactcontroller::class,"destroy"]);

// Register page routing
Route::get("/register-us",[RegisterController::class,"index"]);
Route::post("/register-us",[RegisterController::class,"store"]);

//Admin routing here
Route::get("/admin-login/manageCustomers",[RegisterController::class,"show"]);
Route::get("/admin-login/manageCustomers/{id}",[RegisterController::class,"destroy"]);

//admin add category routing here
Route::get("/admin-login/admin-addcategory", [AddCategoryController::class,"index"]);
Route::post("/admin-login/admin-addcategory",[AddCategoryController::class,"store"]);
Route::get("/admin-login/admin-managecategory",[AddCategoryController::class,"show"]);
Route::get("/admin-login/admin-managecategory/{id}",[AddCategoryController::class,"destroy"]);
Route::get("/admin-login/admin-editcategory/{id}",[AddCategoryController::class,"edit"]);
Route::post("/admin-login/admin-editcategory/{id}",[AddCategoryController::class,"update"]);

//admin add Subcategory routing here
Route::get("/admin-login/admin-addSubcategory", [AddSubCategoryController::class,"index"]);
Route::post("/admin-login/admin-addSubcategory",[AddSubCategoryController::class,"store"]);
Route::get("/admin-login/admin-managesubcategory",[AddSubCategoryController::class,"show"]);
Route::get("/admin-login/admin-managesubcategory/{id}",[AddSubCategoryController::class,"destroy"]);
Route::get("/admin-login/admin-editsubcategory/{id}",[AddSubCategoryController::class,"edit"]);
Route::post("/admin-login/admin-editsubcategory/{id}",[AddSubCategoryController::class,"update"]);

//admin add product routing here
Route::get("/admin-login/admin-addproduct", [AddproductController::class,"index"]);
Route::post("/admin-login/admin-addproduct",[AddproductController::class,"store"]);
Route::get("/admin-login/admin-manageproduct",[AddproductController::class,"show"]);
Route::get("/admin-login/admin-manageproduct/{id}",[AddproductController::class,"destroy"]);
Route::get("/admin-login/admin-editproduct/{id}",[AddproductController::class,"edit"]);
Route::post("/admin-login/admin-editproduct/{id}",[AddproductController::class,"update"]);