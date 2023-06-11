<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* =========================================== dashboard ===================================== */

/* Route::get('dashboard-user',function(){
    return view('dashboard.dashboarduser');
}); */

Route::post('login','LoginController@postLogin')->name('post_login');
/* =========================================== dashboard ===================================== */


Route::get('/', function () {
    return view('login_member');
});

Route::get('dashboard',function(){
    return view('dashboard.dashboard');
});
/* =========================================== Pasien ===================================== */

Route::get('pasien/list-pendaftaran',function(){
    return view('pasien.listPendaftaran');
})->name('daftar_tampil');

Route::get('pasien/tambah-pendaftaran',function(){
    return view('pasien.tambahPendaftaran');
});

Route::get('pasien/tipe-asuransi',function(){
    return view('pasien.tipeAsuransi');
});

Route::get('notif/rekam','NotifikasiController@rekamnotifList')->name('notif_rekam');
Route::get('notif/dokter','NotifikasiController@dokternotifList')->name('notif_dokter');

Route::get('pasien/tipe-asuransi/list','Pasien\TipeAsuransiController@tipeAsuransiList')->name('list_tipe_asuransi');
Route::get('pasien/tipe-asuransi/data','Pasien\TipeAsuransiController@getAsuransiData')->name('get_asuransi_data');
Route::post('pasien/tipe-asuransi/tambah','Pasien\TipeAsuransiController@postTipeAsuransi')->name('post_tipe_asuransi');
Route::get('pasien/tipe-asuransi/edit','Pasien\TipeAsuransiController@editTipeAsuransi')->name('edit_tipe_asuransi');
Route::post('pasien/tipe-asuransi/update','Pasien\TipeAsuransiController@updateTipeAsuransi')->name('update_tipe_asuransi');
Route::get('pasien/tipe-asuransi/delete','Pasien\TipeAsuransiController@deleteTipeAsuransi')->name('delete_tipe_asuransi');


Route::get('pasien/list-pendaftaran/list','Pasien\PendaftaranController@pendaftaranList')->name('list_pendaftaran');
Route::get('pasien/list-pendaftaran/detail','Pasien\PendaftaranController@pendaftaranDetail')->name('detail_pendaftaran');
Route::post('pasien/input-pendaftaran','Pasien\PendaftaranController@tambahPendaftaran')->name('input_pendaftaran');
Route::get('print','Pasien\PendaftaranController@print')->name('print_pendaftaran');
Route::get('pasien/edit-pendaftaran/{id}','Pasien\PendaftaranController@editPendaftaran')->name('edit_pendaftaran');
Route::post('pasien/update-pendaftaran','Pasien\PendaftaranController@updatePendaftaran')->name('update_pendaftaran');


Route::get('provinsi','LokasiController@getProvinsi')->name('get_provinsi');
Route::get('kota','LokasiController@getKota')->name('get_kota');
Route::get('kecamatan','LokasiController@getKecamatan')->name('get_kecamatan');
Route::get('kelurahan','LokasiController@getKelurahan')->name('get_kelurahan');



/* =========================================== pasien ===================================== */



/* =========================================== Dokter ===================================== */

Route::get('dokter/list-dokter',function(){
    return view('dokter.listDokter');
});

Route::get('dokter/list-dokter/list', 'Dokter\DokterController@getDokter_List')->name('Dokter_getList');
Route::get('dokter/list-dokter/data', 'Dokter\DokterController@dataDokter')->name('dokter_get_data');

Route::get('dokter/tambah-dokter',function(){
    return view('dokter.tambahDokter');
});

Route::post('dokter/tambah-dokter/tambah', 'Dokter\DokterController@postDokter_Input')->name('Dokter_postInput');
Route::get('dokter/edit-dokter/{id}','Dokter\DokterController@getDokter_Edit')->name('Dokter_getEdit');
Route::post('dokter/edit-dokter/pernbarui', 'Dokter\DokterController@postDokter_Update')->name('Dokter_postUpdate');
Route::post('dokter/hapus-dokter/hapus', 'Dokter\DokterController@postDokter_Delete')->name('Dokter_postDelete');
// Route::get('dokter/edit-dokter',function(){
//     return view('dokter.editDokter');
// });


Route::get('dokter/edit-dokter',function(){
    return view('dokter.editDokter');
});
Route::get('dokter/detail-dokter',function(){
    return view('dokter.detailDokter');
});
Route::get('dokter/tipe-poli',function(){
    return view('dokter.tipePoli');
});

Route::get('dokter/tipe-poli/list', 'tipePoliController@gettipePoli_List')->name('tipePoli_getList');
Route::get('dokter/tipe-poli/data', 'tipePoliController@gettipePoli_Data')->name('tipePoli_getData');
Route::post('dokter/tipe-poli/tambah', 'tipePoliController@posttipePoli_Input')->name('tipePoli_postInput');
Route::get('dokter/tipe-poli/ubah', 'tipePoliController@gettipePoli_Edit')->name('tipePoli_getEdit');
Route::post('dokter/tipe-poli/perbarui', 'tipePoliController@posttipePoli_Update')->name('tipePoli_PostUpdate');
Route::post('dokter/tipe-poli/hapus', 'tipePoliController@posttipePoli_Delete')->name('tipePoli_postDelete');


/* =========================================== Dokter ===================================== */


/* =========================================== Rekam Medis ===================================== */

Route::get('rekam-medis/list-rekam-medis',function(){
    return view('rekamMedis.listRekamMedis');
});
Route::get('rekam-medis/tambah-rekam-medis',function(){
    return view('rekamMedis.tambahRekamMedis');
});
Route::get('rekam-medis/detail-rekam-medis',function(){
    return view('rekamMedis.detailRekamMedis');
});

Route::get('rekam-medis/pemeriksaan',function(){
    return view('rekamMedis.pemeriksaan');
});

Route::get('rekam-medis/pemeriksaan/list','rekamMedis\PemeriksaanController@list')->name('data-list-pemeriksaan');
Route::get('rekam-medis/pemeriksaan/data-antrian', 'rekamMedis\PemeriksaanController@dataAntrian')->name('data-antrian');
Route::get('rekam-medis/pemeriksaan/detail-antrian-daftar', 'rekamMedis\PemeriksaanController@detailAntrianDaftar')->name('detail-antrian-daftar');
Route::post('rekam-medis/pemeriksaan/update', 'rekamMedis\PemeriksaanController@pemeriksaanUpadte')->name('pemeriksaan-update');


Route::get('rekam-medis/diagnosa',function(){
    return view('rekamMedis.diagnosa');
});

Route::get('rekam-medis/diagnosa/list', 'rekamMedis\DiagnosaController@getDiagnosa_List')->name('Diagnosa_getList');
Route::post('rekam-medis/diagnosa/tambah', 'rekamMedis\DiagnosaController@postDiagnosa_Input')->name('Diagnosa_postInput');
Route::get('rekam-medis/diagnosa/ubah', 'rekamMedis\DiagnosaController@getDiagnosa_Edit')->name('Diagnosa_getEdit');
Route::post('rekam-medis/diagnosa/perbarui', 'rekamMedis\DiagnosaController@postDiagnosa_Update')->name('Diagnosa_postUpdate');
Route::post('rekam-medis/diagnosa/hapus', 'rekamMedis\DiagnosaController@postDiagnosa_Delete')->name('Diagnosa_postDelete');

Route::get('rekam-medis/laboratorium',function(){
    return view('rekamMedis.laboratorium');
});

Route::get('rekam-medis/laboratorium/list','rekamMedis\LabController@labList')->name('list_lab');
Route::post('rekam-medis/laboratorium/tambah','rekamMedis\LabController@postLab')->name('post_lab');
Route::get('rekam-medis/laboratorium/edit','rekamMedis\LabController@editLab')->name('edit_lab');
Route::post('rekam-medis/laboratorium/update','rekamMedis\LabController@updateLab')->name('update_lab');
Route::get('rekam-medis/laboratorium/delete','rekamMedis\LabController@deleteLab')->name('delete_lab');


Route::get('rekam-medis/list-rekam-medis/list','rekamMedis\RekamMedisController@rekamMedisList')->name('list_rekam_medis');
Route::get('rekam-medis/list-rekam-medis/detail','rekamMedis\RekamMedisController@rekamMedisDetail')->name('detail_rekam_medis');
Route::post('rekam-medis/input-rekam-medis','rekamMedis\RekamMedisController@tambahrekamMedis')->name('input_rekam_medis');
Route::get('rekam-medis/edit-rekam-medis/{id}','rekamMedis\RekamMedisController@editrekamMedis')->name('edit_rekam_medis');
Route::post('rekam-medis/update-rekam-medis','rekamMedis\RekamMedisController@updaterekamMedis')->name('update_rekam_medis');
/* =========================================== Rekam Medis===================================== */

/* =========================================== Setting===================================== */
Route::get('setting/role',function(){
    return view('setting.role');
});
Route::get('setting/user',function(){
    return view('setting.user');
});

Route::get('setting/role/list','Setting\RoleController@roleList')->name('list_role');
Route::get('setting/role/data','Setting\RoleController@roleData')->name('role_data');


Route::get('setting/user/list','Setting\UserController@listUser')->name('list_user');
Route::post('setting/user/tambah','Setting\UserController@userTambah')->name('user_tambah');
Route::get('setting/user/edit','Setting\UserController@editUser')->name('edit_user');
Route::post('setting/user/update','Setting\UserController@updateUser')->name('update_user');
Route::get('setting/user/delete','Setting\UserController@deleteUser')->name('delete_user');

/* =========================================== Setting===================================== */

Route::get('report/user',function(){
    return view('report');
});

Route::get('qr-code', function () 
{
    return QrCode::size(250)->generate('Welcome to kerneldev.com!'); 
});


/* =========================================== Dashboard===================================== */

Route::get('dashboard/jumlah-pasien','DashboardController@jumlahPasien')->name('jumlah_pasien');

Route::get('dashboard/jumlah-dokter','DashboardController@jumlahDokter')->name('jumlah_dokter');

Route::get('dashboard/jumlah-medis','DashboardController@jumlahRekamMedis')->name('jumlah_medis');

Route::get('dashboard/jumlah-poli','DashboardController@jumlahPoli')->name('jumlah_poli');

Route::get('dashboard/chart','DashboardController@detailChart')->name('detail_chart');
Route::get('dashboard/tabel','DashboardController@tableDashboard')->name('tabel_dashboard');

/* =========================================== Dashboard===================================== */


/* =========================================== Report===================================== */

Route::get('report/laporan',function(){
    return view('report.laporan');
});

Route::get('report/laporan/list', 'Laporan\LaporanController@listLaporan')->name('Laporan_getList');
Route::get('report/laporan/filter', 'Laporan\LaporanController@postLaporan')->name('Laporan_getData');

Route::get('pendaftaran/print',function(){
    return view('print.printnomer');
});
Route::get('report/laporan/export',function(){
    return view('report.laporanpdf');
});


/* =========================================== Report===================================== */





