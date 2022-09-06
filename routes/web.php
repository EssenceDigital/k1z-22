<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

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

// SITE routes
Route::get('/', [PagesController::class, 'welcome']);
Route::get('/inventory', [PagesController::class, 'inventory']);
Route::post('/filter-inventory', [PagesController::class, 'filterInventory']);
Route::get('/financing', [PagesController::class, 'financing']);
Route::get('/faqs', [PagesController::class, 'faqs']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/send-contact', [PagesController::class, 'sendContact']);
Route::post('/send-financing', [PagesController::class, 'sendFinancing']);
Route::get('/vehicle/{id}', [PagesController::class, 'vehicleInfo']);

// DASHBOARD routes
Auth::routes(['register' => false]);
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth']);
Route::post('/import-xls', [HomeController::class, 'importXls'])->middleware(['auth']);
Route::post('/save-vehicle', [HomeController::class, 'saveVehicle'])->middleware(['auth']);
Route::post('/update-vehicle', [HomeController::class, 'updateVehicle'])->middleware(['auth']);
Route::get('/add-vehicle', [HomeController::class, 'addVehicle'])->middleware(['auth']);
Route::get('/edit-vehicle/{id}', [HomeController::class, 'editVehicle'])->middleware(['auth']);
Route::post('/remove-images', [HomeController::class, 'removeImages'])->middleware(['auth']);
Route::post('/remove-vehicles', [HomeController::class, 'removeVehicles'])->middleware(['auth']);

require __DIR__.'/auth.php';
