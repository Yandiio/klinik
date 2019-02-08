<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('laboratorium', 'LaboratoriumController@list')->name('laboratorium');
Route::get('tambah/tindakan/laboratorium', 'LaboratoriumController@tambah')->name('tambah_lab');

/* Pasien */
Route::get('pasien/tipe-pendaftaran','PasienController@listPasien')->name('tipe_pendaftaran');
Route::get('pasien/pendaftaran','PasienController@Pendaftaran')->name('pendaftaran');
Route::get('pasien/list-pasien','PasienController@listPendaftaran')->name('list_pendaftaran');
Route::get('pasien/edit-pendaftaran','PasienController@editPendaftaran')->name('edit_pendaftaran');
Route::get('pasien/tambah-pendaftaran','PasienController@tambahPendaftaran')->name('tambah_pendaftaran');
/* pasien */

/* --- Apotik --- */
Route::get('apotik/list-apotik', 'ApotikController@listApotik')->name('list_apotik');
Route::get('apotik/suplayer', 'ApotikController@listSuplayer')->name('list_suplayer');
Route::get('apotik/racikan-obat', 'ApotikController@listRacikan')->name('list_racikan');
Route::get('apotik/tipe-obat', 'Apotik\TipeObatController@listTipeobat')->name('list_tipeobat');
/* === Apotik === */

/* --- Inventory --- */
Route::get('inventory/list-inventory', 'InventoryController@listInventory')->name('list_inventory');
Route::get('inventory/report-inventory', 'InventoryController@reportInventory')->name('report_inventory');
/* +++ Inventpry === */

/* =================================== ROUTE MENU DOKTER =============================================== */
/* --- Dokter ---*/
Route::get('dokter/tambah-dokter', 'Dokter\DokterController@tambahDokter')->name('tambah_dokter');
Route::get('dokter/list-dokter', 'Dokter\DokterController@listDokter')->name('list_dokter');
Route::get('dokter/edit_dokter', 'Dokter\DokterController@editDokter')->name('edit_dokter');
Route::get('dokter/lihat-dokter', 'Dokter\DokterController@lihatDokter')->name('lihat_dokter');

/* --- Jadwal Dokter --- */
Route::get('dokter/jadwal-dokter', 'Dokter\JadwalController@jadwalDokter')->name('jadwal_dokter');

/* --- Dokter Rawat Jalan --- */
Route::get('dokter/dokter-rawat-jalan', 'Dokter\RawatJalanController@cariDokter')->name('rawat_jalan');
/* --- Tipe Poli --*/
Route::get('dokter/tipe-poli', 'Dokter\PoliController@tipePoli')->name('tipe_poli');
/* === Tipe Poli ===*/

/* =================================== ROUTE MENU DOKTER =============================================== */

/* =================================== ROUTE MENU ASURANSI =============================================== */
Route::get('asurani/list-asuransi', 'AsuransiController@listAsuransi')->name('list_asuransi');
/* =================================== ROUTE MENU ASURANSI =============================================== */

