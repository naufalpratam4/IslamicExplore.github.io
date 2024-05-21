<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MateriController;
use App\Models\materi;
use App\Models\sub_materi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.welcome');
});

Route::get('/course', function () {
    $materi = materi::all();
    return view('course.main', compact('materi'));
});

Route::get('/course/{id}', function ($id) {
    $materi = materi::find($id);
    $submateri = sub_materi::where('materi_id', $materi->id)->get();
    return view('course langganan.main', compact('materi', 'submateri'));
})->name('course.detail');

Route::get('/course/{materi_id}/{id}', function ($materi_id, $id) {
    $materi = materi::find($materi_id);
    $videoSubMateri = sub_materi::find($id);
    $listSubMateri = sub_materi::where('materi_id', $materi->id)->get(); // Gunakan get() untuk mendapatkan koleksi

    // Mengirimkan variabel yang benar ke view
    return view('course langganan.sub_materi.sub_materi', compact('materi', 'videoSubMateri', 'listSubMateri'));
})->name('course.sub.detail');

Route::get('/mentoring', function () {
    return view('mentoring.main');
});
Route::get('/event', function () {
    return view('event.main');
});
Route::get('/cs', function () {
    return view('cs.main');
});

// admin
Route::get('/login', function () {
    return view('auth.loginUser');
});
route::get('/register', function () {
    return view('auth.registerUser');
});

Route::post('/register', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/login', [AuthController::class, 'loginUser'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard.main');
    });

    Route::get('/admin/materi', [MateriController::class, 'materi'])->name('admin.materi');
    Route::get('/admin/materi/detail/{id}', [MateriController::class, 'detailMateri'])->name('admin.detailMateri');
    Route::get('admin/materi/tambah-materi', function () {
        return view('admin.materi.addMateri');
    });
    Route::post('admin/materi/tambah-materi', [MateriController::class, 'addMateri'])->name('admin.addMateri');
    Route::delete('admin/materi/delete/{id}', [MateriController::class, 'deleteMateri'])->name('admin.delete.materi');
    Route::get('/admin/materi/add-sub-materi/{id}', [MateriController::class, 'viewAddSubMateri'])->name('admin.addSubMateri');
    Route::post('/admin/materi/add-sub-materi/{id}', [MateriController::class, 'addSubMateri'])->name('admin.addSubMateri');
    Route::delete('/admin/materi/delete-sub-materi/{id}', [MateriController::class, 'deleteSubMateri'])->name('admin.delete.submateri');

    Route::get('/admin/contact', [ContactController::class, 'contact']);
    Route::post('/kirim-pesan', [ContactController::class, 'kirimPesan'])->name('kirim.pesan');
    Route::delete('/admin/pesan/delete/{id}', [ContactController::class, 'deletePesan'])->name('delete.pesan');
});
