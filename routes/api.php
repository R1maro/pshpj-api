<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('test', function (Request $request) {
    return response()->json(['test']);
});

Route::get('checkAuth', [AuthenticatedSessionController::class, 'checkAuth']);

require __DIR__.'/auth.php';
