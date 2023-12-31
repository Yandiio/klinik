@extends('layout.admin')

@yield('title', 'Tambah Pendaftaran')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Pasien</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Pasien</span></li>
                <li><span>Tipe Pendaftaran</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- header atas -->
    <div class="row">
        <div class="col-lg-12">
            <section class="card form-wizard" id="w2">
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justify">
                        <li class="nav-item active">
                            <a href="#w2-account" data-toggle="tab" class="nav-link text-center" id="dataPribadi">
                                <span class="badge badge-primary">1</span>
                                Data Pribadi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-toggle="tab" class="nav-link text-center" id="penjamin">
                                <span class="badge badge-primary">2</span>
                                Penjamin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center" id="daftar">
                                <span class="badge badge-primary">3</span>
                                Daftar
                            </a>
                        </li>
                    </ul>
                    <form action="#" id="formTambah" method="POST">
                        @csrf
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="nik" id="nikPribadi">
                                        <b class="form-text text-danger" id="forNikEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Agama
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="agama" id="agama" class="form-control form-control-sm mb-3">
                                            <option value="">Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen Protestan</option>
                                            <option value="3">Budha</option>
                                            <option value="4">Hindu</option>
                                            <option value="5">Khatolik</option>
                                        </select>
                                        <b class="form-text text-danger" id="forAgamaEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="namaLengkap" id="namaLengkap" >
                                        <b class="form-text text-danger" id="forNamaLengkapEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="umur" id="umur">
                                        <b class="form-text text-danger" id="forUmurEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tempatLahir" id="tempatLahir" >
                                        <b class="form-text text-danger" id="forTempatLahirEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Propinsi
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="provinsi" id="provinsi" class="form-control form-control-sm mb-3" required>
                                            <option id="itemProvinsi" value="">=========== Pilih Provinsi ======</option>
                                        </select>
                                        <b class="form-text text-danger" id="forProvinsiEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal Lahir 
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:28px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="date" name="tanggalLahir" class="form-control form-control-sm mb-3" id="tanggalLahir" requeired>
                                        </div>
                                        <b class="form-text text-danger" id="forTanggalLahirEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kota
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kota" id="kota" class="form-control form-control-sm mb-3" >
                                            <option id="itemKota" value="">=========== Pilih Kota ======</option>
                                        </select>
                                        <b class="form-text text-danger" id="forKotaEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Jenis
                                        Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="jenisKelamin" id="jenisKelamin" class="form-control form-control-sm mb-3" required>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="0">Laki-laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                        <b class="form-text text-danger" id="forJenisKelaminEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kecamatan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kecamatan" id="kecamatan" class="form-control form-control-sm mb-3" required>
                                            <option id="itemKecamatan" value="">============ Kecamatan ========</option>
                                        </select>
                                        <b class="form-text text-danger" id="forKecamatanEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan
                                        Darah <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="golonganDarah" id="golonganDarah" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option value="">Golongan darah</option>
                                            <option value="0">A</option>
                                            <option value="1">B</option>
                                            <option value="2">O</option>
                                            <option value="3">AB</option>
                                        </select>
                                        <b class="form-text text-danger" id="forGolonganDarahEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kelurahan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kelurahan" id="kelurahan" class="form-control form-control-sm mb-3" requeired>
                                            <option id="itemKelurahan" value="">============ Kelurahan ========</option>
                                        </select>
                                    </div>
                                    <b class="form-text text-danger" id="forKelurahanEror" style="margin-top:-15;font-size: smaller;"></b>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No Telepon <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="telepone" id="telepon" requeired>
                                        <b class="form-text text-danger" id="forTeleponEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="alamat" name="alamat" data-plugin-textarea-autosize></textarea>
                                        <b class="form-text text-danger" id="forAlamatEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                </div>
                            </div>
                            <!-- kontent tabb 1 -->
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="nikAs" id="nikAs">
                                        <b class="form-text text-danger" id="forNikAsEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tipe
                                        Asuransi <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select data-plugin-selectTwo class="form-control populate form-control-sm mb-3" id="asuransi" name="ansuransiAs">
                                            <option value="">====== PILIH ======</option>
                                        </select>
                                        <b class="form-text text-danger" id="forTipeAsuransiEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="namaLengkapAs" id="namaLengkapAs">
                                        <b class="form-text text-danger" id="forNamaLengkapAsEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kode Karyawan<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="kodeKaryawanAs" id="kodeKaryawan">
                                        <b class="form-text text-danger" id="forKdKaryawanEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Telepone
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="teleponeAs" id="teleponAs">
                                        <b class="form-text text-danger" id="forTeleponAsEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No Polis
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="noPolisAs" id="noPolis">
                                        <p class="form-text text-danger" id="forNoPolisEror" style="margin-top:-15;font-size: smaller;"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Hp
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="hpAs" id="noHP">
                                        <b class="form-text text-danger" id="forNoHpEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal Akhir Polis 
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:28px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="date" class="form-control form-control-sm mb-3" name="tanggalAkhirPolisAs" id="akhirPolis">
                                        </div>
                                        <b class="form-text text-danger" id="forAkhirPolisEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Keterangan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="keterangan" name="keteranganAs" data-plugin-textarea-autosize></textarea>
                                        <b class="form-text text-danger" id="forKeteranganEror" style="font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Hubungan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="hubunganAs" id="hubungan" class="form-control form-control-sm mb-3">
                                            <option value="0">========= PILIH =========</option>
                                            <option value="">Pribadi</option>
                                            <option value="1">Bapak</option>
                                            <option value="2">Ibu</option>
                                            <option value="3">Anak</option>
                                            <option value="4">Kaka</option>
                                            <option value="5">Adik</option>
                                            <option value="6">Kake</option>
                                            <option value="7">Nenek</option>
                                        </select>
                                        <b class="form-text text-danger" id="forHubunganEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                            </div>
                            <!-- kontent tab 2 -->
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Tanggal
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:28px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="date" name="tanggalDaftar" id="tanggalDaftar" class="form-control form-control-sm mb-3">
                                        </div>
                                        <b class="form-text text-danger" id="fortanggalDaftarEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Poli
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="poli" id="poli" class="form-control form-control-sm mb-3">
                                            <option value="">Pilih Poli</option>
                                        </select>
                                        <b class="form-text text-danger" id="forPoliEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="textareaAutosize">Keluhan
                                        <span class="required">*</span></label>
                                    <div class="col-lg-4">
                                        <textarea class="form-control" rows="3" name="keluhan" id="keluhan" data-plugin-textarea-autosize></textarea>
                                        <b class="form-text text-danger" id="forKeluhanEror" style="font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <div class="checkbox-custom">
                                            <!-- <input type="checkbox" name="terms" id="w2-terms" required>
                                        <label for="w2-terms">I agree to the terms of service</label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <!-- <button ><i class="fas fa-angle-left"></i></button>
                            <a><i class="fas fa-angle-left"></i> Sebelumnya</a> -->
                            <button id="sebelumnya" class="mb-1 mt-1 mr-1 btn btn-default float-left" type="button"><i
                                    class="fas fa-angle-left"></i> Sebelumnya</button>
                        </li>
                        <li class="finish float-right">
                            <button id="selesai" class="mb-1 mt-1 mr-1 btn btn-default" type="submit">Selesai</button>
                        </li>
                        <li class="next">
                            <button id="selanjutnya1" class="mb-1 mt-1 mr-1 btn btn-default float-right"
                                type="button">Selanjutnya <i class="fas fa-angle-right"></i></button>
                            <button id="selanjutnya2" class="mb-1 mt-1 mr-1 btn btn-default float-right"
                                type="button">Selanjutnya <i class="fas fa-angle-right"></i></button>
                        </li>
                    </ul>
                </div>
                </form>
            </section>
        </div>
    </div>


</section>
@endsection
@section('css')
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

<!-- Specific Page Vendorccc CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{asset('assets/css/skins/default.css')}}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

<!-- Head Libs -->
<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

<!-- caresolul -->
<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}" />

@stop
@section('script')
<!-- Vendor -->
<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('assets/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/common/common.js')}}"></script>
<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
<!-- <script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script> -->
<script src="{{asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/js/theme.init.js')}}"></script>

<!-- Examples -->
{{-- <script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script> --}}
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>

<script src="{{asset('assets/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js')}}"></script>

<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{ asset('assets/js/examples/examples.advanced.form.js')}}"></script>


<script>




</script>

@stop

@section('jscustom')
<script>
    disabledTapAwal();



    $(document).ready(function () {
        selanjutnya1();
        selanjutnya2();

        $('#selesai').click(function (e) {
            if ($('#tanggalDaftar').val() === '' ) {
                $('#fortanggalDaftarEror').html('* Silahkan input tanggal daftar');
                $('#tanggalDaftar').focus();
                return false;
            }
            if ($('#poli').val() === '' ) {
                $('#forPoliEror').html('* Silahkan pilih poli');
                $('#poli').focus();
                return false;
            }
            if ($('#keluhan').val() === '' ) {
                $('#forKeluhanEror').html('* Silahkan input keluhan pasien');
                $('#keluhan').focus();
                return false;
            }
            else {
            $('#dataPribadi').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
            }       
        });
        dataAnsuransi();
        tampilProvinsi();
        dataPoli();
    
    });

    function disabledTapAwal() {
        // $('#penjamin').prop("disabled",true);
        // $('#daftar').prop("disabled",true);
        $('#penjamin').hide();
        $('#daftar').hide();
        $('#selanjutnya2').hide();
        $('#selesai').hide();
    }

    function selanjutnya1() {
        $('#selanjutnya1').click(function (e) {
            e.preventDefault();
            if ($('#nikPribadi').val() === '' ) {
                $('#forNikEror').html('* Silahkan input data NIK');
                $('#nik').focus();
                return false;
            }
            else if ($('#namaLengkap').val() === '' ) {
                $('#forNamaLengkapEror').html('* Silahkan input Nama Lengkap');
                $('#namaLengkap').focus();
                return false;
            }
            else if ($('#tempatLahir').val() === '' ) {
                $('#forTempatLahirEror').html('* Silahkan input tempat lahir');
                $('#tempatLahir').focus();
                return false;
            }
            else if ($('#tanggalLahir').val() === '' ) {
                $('#forTanggalLahirEror').html('* Silahkan input tanggal lahir');
                $('#tanggalLahir').focus();
                return false;
            }
            else if ($('#jenisKelamin').val() === '' ) {
                $('#forJenisKelaminEror').html('* Silahkan input pilih jenis kelamin');
                $('#jenisKelamin').focus();
                return false;
            }
            else if ($('#golonganDarah').val() === '' ) {
                $('#forGolonganDarahEror').html('* Silahkan input pilih golongan darah');
                $('#golonganDarah').focus();
                return false;
            }
            else if ($('#telepon').val() === '' ) {
                $('#forTeleponEror').html('* Silahkan input telepon');
                $('#telepon').focus();
                return false;
            }
            else if ($('#agama').val() === '' ) {
                $('#forAgamaEror').html('* Silahkan pilih agama');
                $('#agama').focus();
                return false;
            }
            else if ($('#umur').val() === '' ) {
                $('#forUmurEror').html('* Silahkan input umur');
                $('#umur').focus();
                return false;
            }
            else if ($('#provinsi').val() === '' ) {
                $('#forProvinsiEror').html('* Silahkan pilihin provinsi');
                $('#provinsi').focus();
                return false;
            }
            else if ($('#kota').val() === '' ) {
                $('#forKotaEror').html('* Silahkan pilih kota');
                $('#kota').focus();
                return false;
            }
            else if ($('#kecamatan').val() === '' ) {
                $('#forKecamatanEror').html('* Silahkan pilih kecamatan');
                $('#kecamatan').focus();
                return false;
            }
            else if ($('#kelurahan').val() === '' ) {
                $('#forKelurahanEror').html('* Silahkan pilih kelurahan');
                $('#kelurahan').focus();
                return false;
            }
            else if ($('#alamat').val() === '' ) {
                $('#forAlamatEror').html('* Silahkan pilih kelurahan');
                $('#alamat').focus();
                return false;
            }
            else {
            $('#penjamin').show();
            $('#dataPribadi').show();
            /* fungsi button */
            $(this).hide();
            $('#selanjutnya2').show();
            $('#penjamin').click();
            $("#daftar").mouseenter(function () {
                $(this).prop("disabled", true);
            });
            $("#dataPribadi").mouseenter(function () {
                $(this).prop("disabled", true);
            });
            }
        });
    }

    function selanjutnya2() {
        $('#selanjutnya2').click(function (e) {
            //console.log('selanjutnya 1');
            e.preventDefault();

            $('#daftar').show();
            $(this).hide();
            $('#selesai').show();
            $('#daftar').click();
            
        });
    }

    function tampilProvinsi() {
        $.ajax({
            type: "GET",
            url: "{{route('get_provinsi')}}",
            // data: {
            //     'id': id
            // },
            success: function (data) {
                // the next thing you want to do 
                // $city.empty();
                for (var i = 0; i < data.length; i++) {
                    $('#provinsi').append('<option id=' + data[i].id + ' value=' + data[i].id +
                        '>' + data[i].name + '</option>');
                }
            }
        });
    }

    $("#provinsi").change(function () {

        // console.log($('#provinsi').val());
        var id = $('#provinsi').val();
        $.ajax({
            type: "GET",
            url: "{{route('get_kota')}}",
            data: {
                'id': id
            },
            success: function (data) {
                // the next thing you want to do 
                //console.log(data);
                // $city.empty();
                for (var i = 0; i < data.length; i++) {
                    $('#kota').append('<option id=' + data[i].id + ' value=' + data[i].id + '>' +
                        data[i].name + '</option>');
                }
            }
        });
    });


    $("#kota").click(function () {

        //console.log($('#kota').val());
        var id = $('#kota').val();
        $.ajax({
            type: "GET",
            url: "{{route('get_kecamatan')}}",
            data: {
                'id': id
            },
            success: function (data) {
                // the next thing you want to do 
                //console.log(data);
                // $city.empty();
                for (var i = 0; i < data.length; i++) {
                    $('#kecamatan').append('<option id=' + data[i].id + ' value=' + data[i].id +
                        '>' + data[i].name + '</option>');
                }
            }
        });
    });

    $("#kecamatan").click(function () {

        //console.log($('#kota').val());
        var id = $('#kecamatan').val();
        $.ajax({
            type: "GET",
            url: "{{route('get_kelurahan')}}",
            data: {
                'id': id
            },
            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                    $('#kelurahan').append('<option id=' + data[i].id + ' value=' + data[i].id +
                        '>' + data[i].name + '</option>');
                }
            }
        });
    });


    function dataAnsuransi() {
        $.ajax({
            type: "GET",
            url: "{{route('get_asuransi_data')}}",
            //    data: {
            //        'id': id
            //    },
            success: function (data) {
                $.each(data, function (index, value) {
                    $('#asuransi').append('<option id=' + value.id + ' value=' + value
                        .id +
                        '>' + value.nama + '</option>')
                });
            }

        });
    }

    function dataPoli() {
        $.ajax({
            type: "GET",
            url: "{{route('tipePoli_getData')}}",
            //    data: {
            //        'id': id
            //    },
            success: function (data) {
                $.each(data, function (index, value) {
                    $('#poli').append('<option id=' + value.id + ' value=' + value
                        .id +
                        '>' + value.nama + '</option>')
                });
            }

        });
    }

    $('#formTambah').on('submit', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('input_pendaftaran')}}",
            data: $(this).serialize(),
            success: function (data) {

                // console.log(data);
                var id = data;
                // window.location.href= "{{ route ('print_pendaftaran'),'_blank' }}";
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
                print(data);
                

            }
        });
    });

    function print(idx){
        console.log(idx)
        $.ajax({
                
                type: "GET",
                url: "{{ route('print_pendaftaran')}}",
                data: {
                    'id' : idx,
                },
                success: function (data) {


                }
            });
    }

</script>
@stop
