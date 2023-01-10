<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;

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

Route::get("/", [HomepageController::class, "index"]);

Route::post("/search", [SearchController::class, "search"]);

Route::get("/search", [SearchController::class, "search"]);

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth"])
    ->name("dashboard");

Route::get("/download/{id}", [DownloadController::class, "downloadDataset"]);

Route::resource("datasets", DatasetsController::class);

Route::get("/deposit", function () {
    return view("depositDataset");
})->middleware(["auth"]);

Route::resource("organization", OrganizationController::class);
Route::resource("category", CategoryController::class)->middleware(["auth"]);
require __DIR__ . "/auth.php";
