<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Ibadah_Controller;
use App\Http\Controllers\Validasi_Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Pengumuman_Controller;
use App\Http\Controllers\Persembahan_Controller;
use App\Http\Controllers\Umat_Controller;
use App\Http\Controllers\Pendeta_Controller;
use App\Http\Controllers\Lingkungan_Controller;
use App\Http\Controllers\Katekisasi_Controller;
use App\Http\Controllers\Baptis_Controller;
use App\Http\Controllers\Nikah_Controller;
use App\Livewire\IbadahSyukur;

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
// Auth::routes();
//HALAMAN UTAMA
Route::get('/',[Home_Controller::class, 'index']);
Route::get('/umat',[Home_Controller::class, 'indexumat']);
Route::get('/pendeta',[Home_Controller::class, 'indexpendeta']);
Route::get('/api/getId', [Home_Controller::class, 'searchId']);
//Route::get('/umat',[Home_Controller::class, 'indexumat']);
//HALAMAN DAFTAR IBADAH
Route::get('/ibadah',[Ibadah_Controller::class, 'index']);
Route::view('login','livewire.homeauth');
//HALAMAN VALIDASI
Route::get('/validasi',[Validasi_Controller::class, 'index']);
Route::get('/validasibaptis',[Validasi_Controller::class, 'indexbaptis']);
Route::get('/validasikatekisasi',[Validasi_Controller::class, 'indexkatekisasi']);
Route::get('/validasinikah',[Validasi_Controller::class, 'indexnikah']);
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Login Post
Route::post('/login',[LoginController::class,'Login'])->name('user.login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');
//HALAMAN ADMIN
Route::view('/halamanadmin','admin.index')->middleware(['auth', 'admin']);
Route::view('/dashboard','admin.dashboard');
Route::view('/halamanpengumuman','admin.pengumuman');
Route::view('/halamanpendeta','admin.pendeta');
Route::view('/halamanlingkungan','admin.lingkungan');
Route::view('/halamankatekisasi','admin.katekisasi');
Route::view('/halamanbaptis','admin.baptis');
Route::view('/halamanberkatnikah','admin.nikah');
Route::get('/halamanpersembahan',[Admin_Controller::class, 'indexpersembahan']);
Route::get('/halamanumat',[Admin_Controller::class, 'indexumat']);
//HALAMAN PENGUMUMAN
Route::get('/pengumuman',[Pengumuman_Controller::class, 'index']);
//HALAMAN PERSEMBAHAN
Route::get('/persembahan',[Persembahan_Controller::class, 'index']);
//HALAMAN PENDETA
Route::get('/jadwal',[Pendeta_Controller::class, 'index']);
//HALAMAN PROFIL UMAT
Route::view('/profil','livewire.profil-page');
//HALAMAN KETUA LINGKUNGAN
Route::view('/halamanketualingkungan','lingkungan.index')->middleware(['auth', 'ketling']);
//IBADAH SYUKUR
Route::view('form-ibadah-syukur','livewire.umat');
Route::get('/getpendeta/{tanggal}/{pendeta_id}', [Umat_Controller::class, 'getPendeta']);
//KATEKISASI
Route::get('/katekisasi',[Katekisasi_Controller::class, 'index']);
//BAPTIS
Route::get('/baptis',[Baptis_Controller::class, 'index']);
//NIKAH
Route::get('/nikah',[Nikah_Controller::class, 'index']);