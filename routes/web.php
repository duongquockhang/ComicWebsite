<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ChapterTranhController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\TruyenTranhController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleDrive;
use App\Http\Controllers\Auth\LoginController;
	


Route::get('/', [IndexController::class,'home']);
Route::get('/danh-muc/{slug}', [IndexController::class,'danhmuc']);
Route::get('/xem-truyen/{slug}', [IndexController::class,'xemtruyen']);
Route::get('/xem-chapter/{slug_truyen}/{slug}', [IndexController::class,'xemchapter']);
Route::get('/kytu/{kytu}', [IndexController::class,'kytu']);
Route::get('/the-loai/{slug}', [IndexController::class,'theloai']);
Route::get('/doc-sach', [IndexController::class,'docsach']);
Route::get('/truyen-tranh', [IndexController::class,'truyentranh']);
Route::get('/xem-truyen-tranh/{slug_truyen}/{slug}', [IndexController::class,'xemtruyentranh']);
Route::get('/tag/{tag}', [IndexController::class,'tag']);
Route::get('/kytu/{kytu}', [IndexController::class,'kytu']);
    
Route::post('/xemsachnhanh', [IndexController::class,'xemsachnhanh']);
Route::post('/truyennoibat', [TruyenController::class,'truyennoibat']);
Route::post('/tim-kiem', [IndexController::class,'timkiem']);
Route::post('/autocomplete-ajax',[IndexController::class,'autocomplete_ajax']);
Route::post('/show-tranh', [IndexController::class,'show_tranh']);
Route::post('/tabs-danhmuc', [IndexController::class,'tabs_danhmuc']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/sach', SachController::class);
Route::resource('/chapter', ChapterController::class);
Route::resource('/theloai', TheloaiController::class);
Route::resource('/information', InformationController::class);
Route::resource('/truyentranh', TruyenTranhController::class);
Route::resource('/chaptertranh', ChapterTranhController::class);








Route::get('/assignRole/{id}', [HomeController::class, 'assignRole']);
Route::post('/insert_roles/{id}', [HomeController::class, 'insert_roles']);
