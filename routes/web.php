<?php

use App\Http\Controllers\PdfTranslateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/error-404', function () {    
    abort(404);
});
Route::get('/error-419', function () {    
    abort(419);
});
Route::get('/error-500', function () {    
    abort(500);
});


Route::post('/translate', [PdfTranslateController::class, 'translateText2'])->name('translate');
Route::post('/extract-pdf-text', [PdfTranslateController::class, 'extractText'])->name('pdf.extract');
