<?php

use App\Http\Controllers\MateriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/admin/materi/detail/{id}', [MateriController::class, 'detailMateri']);
Route::get('/admin/materi/add-sub-materi/{id}', [MateriController::class, 'viewAddSubMateri']);
