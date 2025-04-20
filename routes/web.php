<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/download-zip', function () {
    // Path to the ZIP file
    $filePath = public_path('crud.zip');
    
    // Check if file exists
    if (file_exists($filePath)) {
        // Return the file for download
        return response()->download($filePath);
    } else {
        // If file not found, return an error message
        return response()->json(['error' => 'File not found.'], 404);
    }
});