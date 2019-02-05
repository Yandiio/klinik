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

Route::get('inventory/data', 'InventoryController@listData')->name('inventory.data');
Route::get('inventory', 'InventoryController@listInventory')->name('inventory');

Route::get('apotik', 'ApotikController@listApotik')->name('apotik');

Route::get('laboratorium', 'LaboratoriumController@list')->name('laboratorium');
Route::get('tambah/tindakan/laboratorium', 'LaboratoriumController@tambah')->name('tambah_lab');

/* Pasien */
Route::get('pasien/tipe-pendaftaran','PasienController@listPasien')->name('tipe_pendaftaran');
Route::get('pasien/pendaftaran','PasienController@listPendaftaran')->name('pendaftaran');
/* pasien */