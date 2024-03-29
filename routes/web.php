<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/invoice', [PDFController::class, 'getPdf']);
Route::get('/invoicehtml', [PDFController::class, 'getHtml']);
Route::get('/spatieinvoice', [PDFController::class, 'getSpatiePDF']);
