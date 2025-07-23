<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kontraktor');
})->name('home');

Route::get('/konstruksi', function () {
    return view('konstruksi');
})->name('konstruksi');
Route::get('/pricelist', function () {
    return view('pricelist');
})->name('pricelist');
Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentang-kami');
Route::get('/review-bapak-ari',function(){
    return view('detailarirumarso');
})->name('ari');
Route::get('/review-haji-toni',function(){
    return view('detailHtoni');
})->name('toni');
Route::get('/review-bapak-yudi',function(){
    return view('detailyudi');
})->name('yudi');
Route::get('/outher-project',function(){
    return view('outherproject');
})->name('outher-project');
Route::get('/Rumah-Bapak-Reynaldo', function () {
    return view('detailReynaldo');
})->name('Reynaldo');
Route::get('/Rumah-Ibu-Irawaty-Melisa', function () {
    return view('detailIrawatyMelisa');
})->name('Melisa');
Route::get('/Masjid-Nurul-Mustofa', function () {
    return view('MasjidNurulMustofa');
})->name('Mustofa');
Route::get('/Rumah-Ibu-Azza', function () {
    return view('RumahIbuAzza');
})->name('Azza');
Route::get('/Rumah-Bp.-H.-Azzam', function () {
    return view('RumahAzzam');
})->name('Azzam');
Route::get('/Ruko-Mutiara-Karawaci', function () {
    return view('RukoMutiaraKarawaci');
})->name('Karawaci');
Route::get('/Ruko-Dasana-Xenter-Bonang', function () {
    return view('DasanaXenterBonang');
})->name('DasanaXenterBonang');
Route::get('/Water-Boom-Dasana-Xenter-Bonang', function () {
    return view('WaterBoomDasanaXenterBonang');
})->name('WaterBoomDasanaXenterBonang');
Route::get('/Perumahan-Mutiara-Gading', function () {
    return view('PerumahanMutiaraGading');
})->name('PerumahanMutiaraGading');
Route::get('/Marketing-Gallery-Mutiara-Gading', function () {
    return view('MarketingGalleryMutiaraGading');
})->name('MarketingGalleryMutiaraGading');
Route::get('/Ruko-La-Vresco-Mutiara-Gading', function () {
    return view('RukoLaVrescoMutiaraGading');
})->name('RukoLaVrescoMutiaraGading');
Route::get('/Ruko-Plaza-Pasadena-Villa-Tomang', function () {
    return view('RukoPlazaPasadenaVillaTomang');
})->name('RukoPlazaPasadenaVillaTomang');
Route::get('/Perumahan-Dukuh-Bima', function () {
    return view('PerumahanDukuhBima');
})->name('PerumahanDukuhBima');
Route::get('/Perumahan-Pluit-Samudra', function () {
    return view('PerumahanPluitSamudra');
})->name('PerumahanPluitSamudra');
Route::get('/Ruko-Dramaga', function () {
    return view('RukoDramaga');
})->name('RukoDramaga');
