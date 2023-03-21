<?php
use Modules\QrCode\Http\Controllers;
use Modules\QrCode\Http\Controllers\QrCodeController;
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

Route::prefix('qrcode')->group(function() {
    Route::get('/', [QrCodeController::class,'create'])->name('generate-qrcode');
});