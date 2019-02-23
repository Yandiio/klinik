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

/* Diagnosa */
Route::get('diagnosa','DiagnosaController@diagnosa')->name('diagnosa');
Route::post('tes-insert','Dokter\DokterController@testTambah')->name('test_tambah');

/* Diagnosa */

/* Pasien */
Route::get('pasien/tipe-penjamin','PasienController@listPasien')->name('tipe_pendaftaran');
Route::get('pasien/tipe-pasien','PasienController@tipePasien')->name('tipe_pasien');
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
/* =================================== ROUTE MENU INVENTORY =============================================== */
/* --- Inventory --- */
Route::get('inventory/list-inventory', 'InventoryController@listInventory')->name('list_inventory');
Route::get('inventory/report-inventory', 'InventoryController@reportInventory')->name('report_inventory');
Route::get('inventory/list-pemasok', 'Inventory\PemasokController@listPemasok')->name('list_pemasok');
Route::get('inventory/list-expired', 'InventoryController@listExpired')->name('list_expired');
/* +++ Inventpry === */

/* =================================== ROUTE MENU INVENTORY =============================================== */
/* --- Dokter ---*/
Route::get('dokter/tambah-dokter', 'Dokter\DokterController@tambahDokter')->name('tambah_dokter');
Route::get('dokter/list-dokter', 'Dokter\DokterController@listDokter')->name('list_dokter');
Route::get('dokter/edit_dokter', 'Dokter\DokterController@editDokter')->name('edit_dokter');
Route::get('dokter/lihat-dokter', 'Dokter\DokterController@lihatDokter')->name('lihat_dokter');

Route::get('dokter/pendapatan','Dokter\PendapatanController@pendapatan')->name('pendapatan');

/* --- Jadwal Dokter --- */
Route::get('dokter/jadwal-dokter', 'Dokter\JadwalController@jadwalDokter')->name('jadwal_dokter');
/* --- Tindakan --- */
Route::get('dokter/master-tindakan','Dokter\TindakanController@getMasterTindakan')->name('get_master_tindakan');
Route::get('dokter/tindakan', 'Dokter\TindakanController@buatTindakan')->name('tindakan');
Route::get('dokter/list-tindakan', 'Dokter\TindakanController@listTindakan')->name('list_tindakan');
Route::get('dokter/lihat-tindakan', 'Dokter\TindakanController@lihatTindakan')->name('lihat_tindakan');
/* --- Tipe Poli --*/
Route::get('dokter/tipe-poli', 'Dokter\PoliController@tipePoli')->name('tipe_poli');
/* === Tipe Poli ===*/
/* ==========================Transaksi ========================== */
Route::get('transaksi/rawat-jalan','Transaksi\TransaksiController@listRawatJalan')->name('list_rawat_jalan');
Route::get('transaksi/rawat-inap','Traansaksi\TransaksiController@listRawatInap')->name('list_rawat_inap');
Route::get('transaksi/pembayaran','Transaksi\TransaksiController@pembayaran')->name('pembayaran');
Route::get('transaksi/page-invoice','Transaksi\TransaksiController@invoice')->name('invoice');
/* ==========================Transaksi ========================== */

/* =================================== ROUTE MENU DOKTER =============================================== */

/* =================================== ROUTE MENU ASURANSI =============================================== */
Route::get('asurani/list-asuransi', 'AsuransiController@listAsuransi')->name('list_asuransi');
/* =================================== ROUTE MENU ASURANSI =============================================== */

/* =================================== ROUTE MENU REPORT ============================================ */

Route::get('report/report-klinik', 'ReportController@datareportPasien')->name('report-klinik');