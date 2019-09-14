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


/* =========================================== dashboard ===================================== */

route::get('/',function(){
    return view('dashboard.dashboard');
});
/* =========================================== dashboard ===================================== */


/* =========================================== Pasien ===================================== */

route::get('pasien/list-pendaftaran',function(){
    return view('pasien.listPendaftaran');
});




route::get('pasien/tambah-pendaftaran',function(){
    return view('pasien.tambahPendaftaran');
});
route::get('pasien/edit-pendaftaran',function(){
    return view('pasien.editPendaftaran');
});
route::get('pasien/tipe-asuransi',function(){
    return view('pasien.tipeAsuransi');
});

route::get('pasien/tipe-asuransi/list','Pasien\TipeAsuransiController@tipeAsuransiList')->name('list_tipe_asuransi');
route::post('pasien/tipe-asuransi/tambah','Pasien\TipeAsuransiController@postTipeAsuransi')->name('post_tipe_asuransi');
route::get('pasien/tipe-asuransi/edit','Pasien\TipeAsuransiController@editTipeAsuransi')->name('edit_tipe_asuransi');
route::post('pasien/tipe-asuransi/update','Pasien\TipeAsuransiController@updateTipeAsuransi')->name('update_tipe_asuransi');
route::get('pasien/tipe-asuransi/delete','Pasien\TipeAsuransiController@deleteTipeAsuransi')->name('delete_tipe_asuransi');

/* =========================================== pasien ===================================== */



/* =========================================== Dokter ===================================== */

route::get('dokter/list-dokter',function(){
    return view('dokter.listDokter');
});

route::get('dokter/tambah-dokter',function(){
    return view('dokter.tambahDokter');
});
route::get('dokter/edit-dokter',function(){
    return view('dokter.editDokter');
});
route::get('dokter/detail-dokter',function(){
    return view('dokter.detailDokter');
});
route::get('dokter/tipe-poli',function(){
    return view('dokter.tipePoli');
});

route::get('dokter/tipe-poli/list', 'tipePoliController@gettipePoli_List')->name('tipePoli_getList');
/* =========================================== Dokter ===================================== */


/* =========================================== Rekam Medis ===================================== */

route::get('rekam-medis/list-rekam-medis',function(){
    return view('rekamMedis.listRekamMedis');
});
route::get('rekam-medis/tambah-rekam-medis',function(){
    return view('rekamMedis.tambahRekamMedis');
});
route::get('rekam-medis/detail-rekam-medis',function(){
    return view('rekamMedis.detailRekamMedis');
});
route::get('rekam-medis/diagnosa',function(){
    return view('rekamMedis.diagnosa');
});

route::get('rekam-medis/laboratorium',function(){
    return view('rekamMedis.laboratorium');
});



/* =========================================== Rekam Medis===================================== */

/* =========================================== Setting===================================== */
route::get('setting/role',function(){
    return view('setting.role');
});
route::get('setting/user',function(){
    return view('setting.user');
});


/* =========================================== Setting===================================== */

route::get('report/user',function(){
    return view('report');
});



/* =========================================== Report===================================== */




/* =========================================== Report===================================== */





