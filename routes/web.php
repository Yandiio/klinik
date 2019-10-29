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

// Route::get('login', function () {
//     return view('login_member');
// });


/* =========================================== dashboard ===================================== */


Route::get('/', function () {
    return view('login_member');
});

route::get('dashboard',function(){
    return view('dashboard.dashboard');
});
route::get('dashboard-user',function(){
    return view('dashboard.dashboarduser');
});

route::post('login','LoginController@postLogin')->name('post_login');
/* =========================================== dashboard ===================================== */


/* =========================================== Pasien ===================================== */

route::get('pasien/list-pendaftaran',function(){
    return view('pasien.listPendaftaran');
})->name('daftar_tampil');

route::get('pasien/tambah-pendaftaran',function(){
    return view('pasien.tambahPendaftaran');
});

route::get('pasien/tipe-asuransi',function(){
    return view('pasien.tipeAsuransi');
});

route::get('pasien/tipe-asuransi/list','Pasien\TipeAsuransiController@tipeAsuransiList')->name('list_tipe_asuransi');
route::get('pasien/tipe-asuransi/data','Pasien\TipeAsuransiController@getAsuransiData')->name('get_asuransi_data');
route::post('pasien/tipe-asuransi/tambah','Pasien\TipeAsuransiController@postTipeAsuransi')->name('post_tipe_asuransi');
route::get('pasien/tipe-asuransi/edit','Pasien\TipeAsuransiController@editTipeAsuransi')->name('edit_tipe_asuransi');
route::post('pasien/tipe-asuransi/update','Pasien\TipeAsuransiController@updateTipeAsuransi')->name('update_tipe_asuransi');
route::get('pasien/tipe-asuransi/delete','Pasien\TipeAsuransiController@deleteTipeAsuransi')->name('delete_tipe_asuransi');


route::get('pasien/list-pendaftaran/list','Pasien\PendaftaranController@pendaftaranList')->name('list_pendaftaran');
route::get('pasien/list-pendaftaran/detail','Pasien\PendaftaranController@pendaftaranDetail')->name('detail_pendaftaran');
route::post('pasien/input-pendaftaran','Pasien\PendaftaranController@tambahPendaftaran')->name('input_pendaftaran');
route::get('print','Pasien\PendaftaranController@print')->name('print_pendaftaran');
route::get('pasien/edit-pendaftaran/{id}','Pasien\PendaftaranController@editPendaftaran')->name('edit_pendaftaran');
route::post('pasien/update-pendaftaran','Pasien\PendaftaranController@updatePendaftaran')->name('update_pendaftaran');


route::get('provinsi','LokasiController@getProvinsi')->name('get_provinsi');
route::get('kota','LokasiController@getKota')->name('get_kota');
route::get('kecamatan','LokasiController@getKecamatan')->name('get_kecamatan');
route::get('kelurahan','LokasiController@getKelurahan')->name('get_kelurahan');



/* =========================================== pasien ===================================== */



/* =========================================== Dokter ===================================== */

route::get('dokter/list-dokter',function(){
    return view('dokter.listDokter');
});

route::get('dokter/list-dokter/list', 'Dokter\DokterController@getDokter_List')->name('Dokter_getList');
route::get('dokter/list-dokter/data', 'Dokter\DokterController@dataDokter')->name('dokter_get_data');

route::get('dokter/tambah-dokter',function(){
    return view('dokter.tambahDokter');
});

route::post('dokter/tambah-dokter/tambah', 'Dokter\DokterController@postDokter_Input')->name('Dokter_postInput');
route::get('dokter/edit-dokter/{id}','Dokter\DokterController@getDokter_Edit')->name('Dokter_getEdit');
route::post('dokter/edit-dokter/pernbarui', 'Dokter\DokterController@postDokter_Update')->name('Dokter_postUpdate');
route::post('dokter/hapus-dokter/hapus', 'Dokter\DokterController@postDokter_Delete')->name('Dokter_postDelete');
// route::get('dokter/edit-dokter',function(){
//     return view('dokter.editDokter');
// });


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
route::get('dokter/tipe-poli/data', 'tipePoliController@gettipePoli_Data')->name('tipePoli_getData');
route::post('dokter/tipe-poli/tambah', 'tipePoliController@posttipePoli_Input')->name('tipePoli_postInput');
route::get('dokter/tipe-poli/ubah', 'tipePoliController@gettipePoli_Edit')->name('tipePoli_getEdit');
route::post('dokter/tipe-poli/perbarui', 'tipePoliController@posttipePoli_Update')->name('tipePoli_PostUpdate');
route::post('dokter/tipe-poli/hapus', 'tipePoliController@posttipePoli_Delete')->name('tipePoli_postDelete');


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

route::get('rekam-medis/pemeriksaan',function(){
    return view('rekamMedis.pemeriksaan');
});

route::get('rekam-medis/pemeriksaan/list','rekamMedis\PemeriksaanController@list')->name('data-list-pemeriksaan');
route::get('rekam-medis/pemeriksaan/data-antrian', 'rekamMedis\PemeriksaanController@dataAntrian')->name('data-antrian');
route::get('rekam-medis/pemeriksaan/detail-antrian-daftar', 'rekamMedis\PemeriksaanController@detailAntrianDaftar')->name('detail-antrian-daftar');
route::post('rekam-medis/pemeriksaan/update', 'rekamMedis\PemeriksaanController@pemeriksaanUpadte')->name('pemeriksaan-update');


route::get('rekam-medis/diagnosa',function(){
    return view('rekamMedis.diagnosa');
});

route::get('rekam-medis/diagnosa/list', 'rekamMedis\DiagnosaController@getDiagnosa_List')->name('Diagnosa_getList');
route::post('rekam-medis/diagnosa/tambah', 'rekamMedis\DiagnosaController@postDiagnosa_Input')->name('Diagnosa_postInput');
route::get('rekam-medis/diagnosa/ubah', 'rekamMedis\DiagnosaController@getDiagnosa_Edit')->name('Diagnosa_getEdit');
route::post('rekam-medis/diagnosa/perbarui', 'rekamMedis\DiagnosaController@postDiagnosa_Update')->name('Diagnosa_postUpdate');
route::post('rekam-medis/diagnosa/hapus', 'rekamMedis\DiagnosaController@postDiagnosa_Delete')->name('Diagnosa_postDelete');

route::get('rekam-medis/laboratorium',function(){
    return view('rekamMedis.laboratorium');
});

route::get('rekam-medis/laboratorium/list','rekamMedis\LabController@labList')->name('list_lab');
route::post('rekam-medis/laboratorium/tambah','rekamMedis\LabController@postLab')->name('post_lab');
route::get('rekam-medis/laboratorium/edit','rekamMedis\LabController@editLab')->name('edit_lab');
route::post('rekam-medis/laboratorium/update','rekamMedis\LabController@updateLab')->name('update_lab');
route::get('rekam-medis/laboratorium/delete','rekamMedis\LabController@deleteLab')->name('delete_lab');


route::get('rekam-medis/list-rekam-medis/list','rekamMedis\RekamMedisController@rekamMedisList')->name('list_rekam_medis');
route::get('rekam-medis/list-rekam-medis/detail','rekamMedis\RekamMedisController@rekamMedisDetail')->name('detail_rekam_medis');
route::post('rekam-medis/input-rekam-medis','rekamMedis\RekamMedisController@tambahrekamMedis')->name('input_rekam_medis');
route::get('rekam-medis/edit-rekam-medis/{id}','rekamMedis\RekamMedisController@editrekamMedis')->name('edit_rekam_medis');
route::post('rekam-medis/update-rekam-medis','rekamMedis\RekamMedisController@updaterekamMedis')->name('update_rekam_medis');
/* =========================================== Rekam Medis===================================== */

/* =========================================== Setting===================================== */
route::get('setting/role',function(){
    return view('setting.role');
});
route::get('setting/user',function(){
    return view('setting.user');
});

route::get('setting/role/list','Setting\RoleController@roleList')->name('list_role');
route::get('setting/role/data','Setting\RoleController@roleData')->name('role_data');


route::get('setting/user/list','Setting\UserController@listUser')->name('list_user');
route::post('setting/user/tambah','Setting\UserController@userTambah')->name('user_tambah');
route::get('setting/user/edit','Setting\UserController@editUser')->name('edit_user');
route::post('setting/user/update','Setting\UserController@updateUser')->name('update_user');
route::get('setting/user/delete','Setting\UserController@deleteUser')->name('delete_user');

/* =========================================== Setting===================================== */

route::get('report/user',function(){
    return view('report');
});

Route::get('qr-code', function () 
{
    return QrCode::size(250)->generate('Welcome to kerneldev.com!'); 
});


/* =========================================== Dashboard===================================== */

route::get('dashboard/jumlah-pasien','DashboardController@jumlahPasien')->name('jumlah_pasien');

route::get('dashboard/jumlah-dokter','DashboardController@jumlahDokter')->name('jumlah_dokter');

route::get('dashboard/jumlah-medis','DashboardController@jumlahRekamMedis')->name('jumlah_medis');

route::get('dashboard/jumlah-poli','DashboardController@jumlahPoli')->name('jumlah_poli');

route::get('dashboard/chart','DashboardController@detailChart')->name('detail_chart');
route::get('dashboard/tabel','DashboardController@tableDashboard')->name('tabel_dashboard');

/* =========================================== Dashboard===================================== */


/* =========================================== Report===================================== */




/* =========================================== Report===================================== */





