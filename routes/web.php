<?php

use App\Http\Controllers\AdvisoryController;
use App\Http\Controllers\BizmatchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\MarcomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileBuyerController;
use App\Http\Controllers\ReleaseController;
use App\Models\Umkm;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome.greetings');
});

Route::get('/pdf',[UmkmController::class,'view_pdf'])->name('pdf');;
Route::get('/umkm/export/excel',[UmkmController::class,'export_excel']);
Route::get('/umkm/import',[UmkmController::class,'importdata']);
//Route::post('/umkm/thankyou',[UmkmController::class,'store']);

// Route::get('/umkm/daftar',[IndoRegionController::class,'form'])->('form');

Route::post('/umkm/import-proses',[UmkmController::class,'import_proses'])->name('umkm.import-proses');


//WELCOME PAGE
Route::get('/welcome/greetings',[PagesController::class,'greetings']);


Route::post('/getkabupaten', [UmkmController::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [UmkmController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [UmkmController::class, 'getdesa'])->name('getdesa');

Route::get('/umkm/daftar', [UmkmController::class, 'create'])->name('umkm.form');
Route::post('/umkm/daftar', [UmkmController::class, 'uploadImages'])->name('umkm.daftar');
// Route::post('/umkm/preview', [UmkmController::class, 'store'])->name('umkm.preview');
Route::post('/umkm/thankyou', [UmkmController::class, 'confirm'])->name('umkm.thankyou');
Route::post('/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');


Route::delete('/umkm/{id}',[UmkmController::class,'destroy']);


Route::get('/umkm/export/cataloguepdf/{id}',[UmkmController::class,'exportpdf']);
Route::get('/umkm/export/cataloguepdf2/{id}',[UmkmController::class,'exportpdf2']);
Route::get('/umkm/export/cataloguepdf3/{id}',[UmkmController::class,'exportpdf3']);




Route::get('/dashboard', function () {
    $umkm = Umkm::all();
    return view('dashboard',compact(['umkm']));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // portofolio
    Route::get('dashboard/portofolio', [PortofolioController::class, 'portofolio'])->name('portofolio');

    // umkm
    Route::get('dashboard/dashumkm', [UmkmController::class, 'dashumkm'])->name('dashumkm');

    //profile buyeer
    Route::get('dashboard/profilebuyer', [ProfileBuyerController::class, 'profilebuyer'])->name('profilebuyer');
    Route::get('dashboard/profilebuyer/daftar', [ProfileBuyerController::class, 'addprofilebuyer'])->name('addprofilebuyer');
    Route::post('dashboard/profilebuyer/store', [ProfileBuyerController::class, 'store'])->name('profilebuyer.store');
    Route::get('dashboard/profilebuyer/export/excel',[ProfileBuyerController::class,'export_excel']);
    Route::get('dashboard/profilebuyer/export/pdf', [ProfileBuyerController::class, 'exportPDF'])->name('profilebuyer.export_pdf');
    Route::get('dashboard/profilebuyer/import',[ProfileBuyerController::class,'importdata']);
    Route::post('dashboard/profilebuyer/import-proses',[ProfileBuyerController::class,'import_proses'])->name('profilebuyer.import-proses');
    Route::delete('dashboard/profilebuyer/{id}',[ProfileBuyerController::class,'destroy']);
    Route::get('dashboard/profilebuyer/{id}', [ProfileBuyerController::class, 'detail'])->name('profilebuyerdetail');
    Route::get('dashboard/profilebuyer/{id}/edit', [ProfileBuyerController::class, 'edit'])->name('profilebuyeredit');
    Route::post('dashboard/profilebuyer/{id}/update', [ProfileBuyerController::class, 'update'])->name('profilebuyer.update');
    
    // advisory
    Route::get('dashboard/advisory', [AdvisoryController::class, 'advisory'])->name('advisory');
    Route::get('dashboard/advisory/daftar', [AdvisoryController::class, 'addadvisory'])->name('addadvisory');
    Route::post('dashboard/advisory/store', [AdvisoryController::class, 'store'])->name('advisory.store');
    Route::get('dashboard/advisory/export/excel',[AdvisoryController::class,'export_excel']);
    Route::get('dashboard/advisory/export/pdf', [AdvisoryController::class, 'exportPDF'])->name('advisory.export_pdf');
    Route::get('dashboard/advisory/import',[AdvisoryController::class,'importdata']);
    Route::post('dashboard/advisory/import-proses',[AdvisoryController::class,'import_proses'])->name('advisory.import-proses');
    Route::delete('dashboard/advisory/{id}',[AdvisoryController::class,'destroy']);
    Route::get('dashboard/advisory/{id}', [AdvisoryController::class, 'detail'])->name('advisorydetail');
    Route::get('dashboard/advisory/{id}/edit', [AdvisoryController::class, 'edit'])->name('advisoryedit');
    Route::post('dashboard/advisory/{id}/update', [AdvisoryController::class, 'update'])->name('advisory.update');
    
    // bizmatch
    Route::get('dashboard/bizmatch', [BizmatchController::class, 'bizmatch'])->name('bizmatch');
    Route::get('dashboard/bizmatch/daftar', [BizmatchController::class, 'addbizmatch'])->name('addbizmatch');
    Route::post('dashboard/bizmatch/store', [BizmatchController::class, 'store'])->name('bizmatch.store');
    Route::get('dashboard/bizmatch/export/excel',[BizmatchController::class,'export_excel']);
    Route::get('dashboard/bizmatch/export/pdf', [BizmatchController::class, 'exportPDF'])->name('bizmatch.export_pdf');
    Route::get('dashboard/bizmatch/import',[BizmatchController::class,'importdata']);
    Route::post('dashboard/bizmatch/import-proses',[BizmatchController::class,'import_proses'])->name('bizmatch.import-proses');
    Route::delete('dashboard/bizmatch/{id}',[BizmatchController::class,'destroy']);
    Route::get('dashboard/bizmatch/{id}', [BizmatchController::class, 'detail'])->name('bizmatchdetail');
    Route::get('dashboard/bizmatch/{id}/edit', [BizmatchController::class, 'edit'])->name('bizmatchedit');
    Route::post('dashboard/bizmatch/{id}/update', [BizmatchController::class, 'update'])->name('bizmatch.update');
    
    // event
    Route::get('dashboard/event', [EventController::class, 'event'])->name('event');
    Route::get('dashboard/event/daftar', [EventController::class, 'addevent'])->name('addevent');
    Route::post('dashboard/event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('dashboard/event/export/excel',[EventController::class,'export_excel']);
    Route::get('dashboard/event/export/pdf', [EventController::class, 'exportPDF'])->name('event.export_pdf');
    Route::get('dashboard/event/import',[EventController::class,'importdata']);
    Route::post('dashboard/event/import-proses',[EventController::class,'import_proses'])->name('event.import-proses');
    Route::delete('dashboard/event/{id}',[EventController::class,'destroy']);
    Route::get('dashboard/event/{id}', [EventController::class, 'detail'])->name('eventdetail');
    Route::get('dashboard/event/{id}/edit', [EventController::class, 'edit'])->name('eventedit');
    Route::post('dashboard/event/{id}/update', [EventController::class, 'update'])->name('event.update');

    // marcom
    Route::get('dashboard/marcom', [MarcomController::class, 'marcom'])->name('marcom');
    Route::get('dashboard/marcom/daftar', [MarcomController::class, 'addmarcom'])->name('addmarcom');
    Route::post('dashboard/marcom/store', [MarcomController::class, 'store'])->name('marcom.store');
    Route::get('dashboard/marcom/export/excel',[MarcomController::class,'export_excel']);
    Route::get('dashboard/marcom/export/pdf', [MarcomController::class, 'exportPDF'])->name('marcom.export_pdf');
    Route::get('dashboard/marcom/import',[MarcomController::class,'importdata']);
    Route::post('dashboard/marcom/import-proses',[MarcomController::class,'import_proses'])->name('marcom.import-proses');
    Route::delete('dashboard/marcom/{id}',[MarcomController::class,'destroy']);
    Route::get('dashboard/marcom/{id}', [MarcomController::class, 'detail'])->name('marcomdetail');
    Route::get('dashboard/marcom/{id}/edit', [MarcomController::class, 'edit'])->name('marcomedit');
    Route::post('dashboard/marcom/{id}/update', [MarcomController::class, 'update'])->name('marcom.update');

    // release
    Route::get('dashboard/release', [ReleaseController::class, 'release'])->name('release');
    Route::get('dashboard/release/daftar', [ReleaseController::class, 'addrelease'])->name('addrelease');
    Route::post('dashboard/release/store', [ReleaseController::class, 'store'])->name('release.store');
    Route::get('dashboard/release/export/excel',[ReleaseController::class,'export_excel']);
    Route::get('dashboard/release/export/pdf', [ReleaseController::class, 'exportPDF'])->name('release.export_pdf');
    Route::get('dashboard/release/import',[ReleaseController::class,'importdata']);
    Route::post('dashboard/release/import-proses',[ReleaseController::class,'import_proses'])->name('release.import-proses');
    Route::delete('dashboard/release/{id}',[ReleaseController::class,'destroy']);
    Route::get('dashboard/release/{id}', [ReleaseController::class, 'detail'])->name('releasedetail');
    Route::get('dashboard/release/{id}/edit', [ReleaseController::class, 'edit'])->name('releaseedit');
    Route::post('dashboard/release/{id}/update', [ReleaseController::class, 'update'])->name('release.update');
    
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //catalogue
    Route::get('/umkm/profile/{id}',[UmkmController::class,'profileumkm'])->name('profileumkm');
    Route::get('/umkm/profile/edit/{id}',[UmkmController::class,'editumkm']);
    Route::put('/umkm/profile/{id}',[UmkmController::class,'updateumkm']);

});

require __DIR__.'/auth.php';
