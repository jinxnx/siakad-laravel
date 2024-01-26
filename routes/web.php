<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\TampilanSiswaController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\DataFasilitasController;
use App\Http\Controllers\DataStaffController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\JadwalPelajaranController;
use App\Http\Controllers\IdentitasSekolahController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

 Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    //CRUD Data Siswa
    Route::get('/datasiswa', [DataSiswaController::class, 'index'])->name('datasiswa');
    Route::get('/datasiswa/{id_siswa?}', [DataSiswaController::class, 'show'])->name('tampilan_siswa');
    Route::get('/datasiswa/{id_siswa?}/edit', [DataSiswaController::class, 'edit'])->name('edit_siswa');
    Route::put('/datasiswa/{id_siswa?}', [DataSiswaController::class, 'update']);
    Route::get('/nilaisiswa', [NilaiSiswaController::class, 'index'])->name('nilaisiswa');
    Route::get('/nilaisiswa', [NilaiSiswaController::class, 'user_image']);
    
    // CRUD Guru
    Route::get('/dataguru', [DataGuruController::class, 'index'])->name('dataguru');
    Route::get('/dataguru/{id_guru?}', [DataGuruController::class, 'show'])->name('tampilan_guru');
    Route::get('/dataguru/{id_guru?}/edit', [DataGuruController::class, 'edit'])->name('edit_guru');
    Route::put('/dataguru/{id_guru?}', [DataGuruController::class, 'update']);

    // CRUD Fasilitas
    Route::get('/fasilitas', [DataFasilitasController::class, 'index'])->name('datafasilitas');
    Route::put('/fasilitas/{$id_fasilitas}', [DataFasilitasController::class, 'update']);
    Route::get('/fasilitas/{$id_fasilitas}/edit', [DataFasilitasController::class, 'edit'])->name('edit_fasilitas');    
 
 
    Route::get('/datastaff', [DataStaffController::class, 'index'])->name('datastaff');
    Route::get('/datakelas', [DataKelasController::class, 'index'])->name('datakelas');
    Route::get('/jadwalpelajaran', [JadwalPelajaranController::class, 'index'])->name('jadwalpelajaran');
    
    Route::get('/identitas', [IdentitasSekolahController::class, 'index']);
    Route::get('/identitas', [IdentitasSekolahController::class, 'show']);
    Route::post('/identitas', [IdentitasSekolahController::class, 'update'])->name('update_identitas');
});


Route::get('/tampilanstaff/{id_staff?}', [DataStaffController::class, 'show'])->middleware('auth')->name('tampilan_staff');
Route::get('/tampilannilai/{id_siswa?}', [NilaiSiswaController::class, 'show', 'destroy'])->middleware('auth')->name('tampilan_nilai');
Route::get('/datastaff/{id_staff?}/edit', [DataStaffController::class, 'edit'])->middleware('auth')->name('edit_staff');
Route::put('/datastaff/{id_staff?}', [DataStaffController::class, 'update'])->middleware('auth');
Route::get('/tampilankelas/{id_kelas?}', [DataKelasController::class, 'show'])->middleware('auth')->name('tampilan_kelas');



Route::resource('jadwal_pelajaran', \App\Http\Controllers\JadwalPelajaranController::class);
Route::resource('datasiswa', \App\Http\Controllers\DataSiswaController::class);
Route::resource('tampilan_siswa', \App\Http\Controllers\DataSiswaController::class);
Route::resource('nilaisiswa', \App\Http\Controllers\NilaiSiswaController::class);
Route::resource('tampilannilai', \App\Http\Controllers\NilaiSiswaController::class);
Route::resource('dataguru', \App\Http\Controllers\DataGuruController::class);
Route::resource('fasilitas', \App\Http\Controllers\DataFasilitasController::class);
Route::resource('staff', \App\Http\Controllers\DataStaffController::class);
Route::resource('kelas', \App\Http\Controllers\DataKelasController::class);
Route::resource('mapel', \App\Http\Controllers\DataMapelController::class);
Route::resource('editsiswa', \App\Http\Controllers\DataSiswaController::class);






