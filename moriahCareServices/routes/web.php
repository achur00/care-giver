<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']  );

// ServiceController
Route::get('/services', [ServiceController::class, 'index']  );
Route::get('/homecare/{homecare}', [ServiceController::class, 'homeCare']  );
Route::get('/specialistcare/{specialistcare}', [ServiceController::class, 'specialistCare']  );
Route::get('/service/{service}', [ServiceController::class, 'show']  );

// newsletter
Route::post('/newsletter', [NewsletterController::class,'store']);

// AboutController
Route::get('/about', [AboutController::class,'index']);

//ContactController
Route::get('/contact',[ContactController::class, 'index']);
Route::post('/message',[ContactController::class, 'store']);
