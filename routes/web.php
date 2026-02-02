<?php

use App\Http\Controllers\QrMergeController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [QrMergeController::class, 'index'])->name('qr.index');
Route::post('/generate', [QrMergeController::class, 'generate'])->name('qr.generate');
Route::post('/qr/validate', [QrMergeController::class, 'validateQR'])->name('qr.validate');

