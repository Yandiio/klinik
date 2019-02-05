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
/* pasien */

/* --- Apotik --- */
Route::get('apotik/list-apotik', 'ApotikController@listApotik')->name('list_apotik');
Route::get('apotik/suplayer', 'ApotikController@listSuplayer')->name('list_suplayer');
Route::get('apotik/racikan-obat', 'ApotikController@listRacikan')->name('list_racikan');
Route::get('apotik/tipe-obat', 'ApotikController@listTipeobat')->name('list_tipeobat');
/* === Apotik === */

/* --- Inventory --- */
Route::get('inventory/list-inventory', 'InventoryController@listInventory')->name('list_inventory');
Route::get('inventory/report-inventory', 'InventoryController@reportInventory')->name('report_inventory');
/* +++ Inventpry === */