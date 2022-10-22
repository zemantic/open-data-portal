<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetsController;
use App\Http\Controllers\OrganizationController;

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth"])
    ->name("dashboard");

Route::resource("datasets", DatasetsController::class);

Route::get("/deposit", function () {
    return view("depositDataset");
});

Route::resource("organization", OrganizationController::class);

require __DIR__ . "/auth.php";
