@extends('layout.admin')

@yield('title', 'Tambah Dokter')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dokter</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Dokter</span></li>
                <li><span>Tambah Dokter</span></li>
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
                            <a href="#w2-account" data-toggle="tab" class="nav-link text-center" id="dataDokter">
                                <span class="badge badge-primary">1</span>
                                Data Dokter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-toggle="tab" class="nav-link text-center" id="dataPribadi">
                                <span class="badge badge-primary">2</span>
                                Data Pribadi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center" id="idAlamat">
                                <span class="badge badge-primary">3</span>
                                Alamat
                            </a>
                        </li>
                    </ul>
                    <form action="#" id="formTambah" method="POST">
                            @csrf
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Kode Dokter <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" id="kd_dokter" name="kd_dokter" placeholder="Kode Dokter">
                                        <p class="form-text text-danger" id="forEror" style="margin-top:-15; font-size: smaller;"></p>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Poli <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="poli" id="poli" value="">
                                            <option value="">====== PILIH ======</option>
                                        </select>
                                        <p class="form-text text-danger" id="forPoliEror" style="margin-top:-15;font-size: smaller;"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="">
                                        External Dokter <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="tipe_dokter" id="tipe_dokter">
                                            <option value="">====== PILIH ======</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <b class="form-text text-danger" id="forTipeDokterEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Keterangan<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="keterangan" name="keterangan" data-plugin-textarea-autosize></textarea>
                                        <b class="form-text text-danger" id="forKeteranganEror" style="font-size: smaller;"></b>
                                    </div>
                                </div>
                            </div>
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">NIK<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="nik" id="nik" placeholder="NIK">
                                        <b class="form-text text-danger" id="forNIKEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Nama Lengkap<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap">
                                        <b class="form-text text-danger" id="forNamaEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:28px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="date" name="tanggalLahir" class="form-control form-control-sm mb-3" id="tanggalLahir" >
                                        </div>
                                        <b class="form-text text-danger" id="forTglLahirEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir" required>
                                        <b class="form-text text-danger" id="forTempatLahirEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No. Telepon <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="telepon" id="telepon" placeholder="No Telepon">
                                        <b class="form-text text-danger" id="forTeleponEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No. Handphone <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="hp" id="iHp" placeholder="No Handphone" required>
                                        <b class="form-text text-danger" id="forHpEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-email">Jenis Kelamin <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="jenisKelamin" id="jenisKelamin" required>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="0">Laki-Laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                        <b class="form-text text-danger" id="forJenisKelaminEror" style="margin-top:-15;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="usia" id="usia" placeholder="Usia" required>
                                        <b class="form-text text-danger" id="forUsiaEror" style="margin-top:-15;font-siza:smaller;font-size: smaller;"></b>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Email<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control form-control-sm mb-3" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Agama<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="agama" id="agama" placeholder="Agama" required>
                                        <b class="form-text text-danger" id="forAgamaEror" style="margin-top:-15;font-siza:smaller;font-size: smaller;"></b>
                                    </div>
                                </div>
                            </div>
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Propinsi
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="provinsi" id="provinsi" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option id="itemProvinsi">=========== Pilih Provinsi ======</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kota
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kota" id="kota" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option id="itemKota">=========== Pilih Kota ======</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kecamatan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kecamatan" id="kecamatan"
                                            class="form-control form-control-sm mb-3" requeired>
                                            <option id="itemKecamatan" value="">============ Kecamatan ========</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kelurahan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kelurahan" id="kelurahan"
                                            class="form-control form-control-sm mb-3" requeired>
                                            <option id="itemKelurahan" value="">============ Kelurahan ========</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kode Pos</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="kodePos" id="w2-last-name" placeholder="Kode Pos">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat Lengkap<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" name="alamat" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
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
                        <li class="next">
                            <button id="selanjutnya1" class="mb-1 mt-1 mr-1 btn btn-default float-right"
                                type="button">Selanjutnya <i class="fas fa-angle-right"></i></button>
                            <button id="selanjutnya2" class="mb-1 mt-1 mr-1 btn btn-default float-right"
                                type="button">Selanjutnya <i class="fas fa-angle-right"></i></button>
                        </li>
                        <li class="finish float-right">
                            <button type="submit" class="mb-1 mt-1 mr-1 btn btn-default" id="selesai">Selesai</button>
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
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{asset('assets/css/skins/default.css')}}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

<!-- Head Libs -->
<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

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
<script src="{{asset('assets/js/jquery.validation.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>
<script src="{{asset('assets/js/validation.js')}}"></script>

<script>

</script>


@stop

@section('jscustom')

<script>

    disabledTapAwal();

    $(document).ready(function () {
        selanjutnya1();
        selanjutnya2();
        
        $('#selesai').click(function () {
            console.log('#selesai');
            $('#formTambah').trigger("reset");
            $('#dataDokter').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
        });

        tampilProvinsi();
        dataPoli();
    });

    function disabledTapAwal() {
        $('#dataPribadi').hide();
        $('#idAlamat').hide();
        $('#selanjutnya2').hide();
        $('#selesai').hide();
    }

    function selanjutnya1() {
        $('#selanjutnya1').click(function (e) {
            e.preventDefault();
            // validation();
            if ($('#kd_dokter').val() === '') {
                $('#forEror').html('*Silahkan input kode');
                $('#kd_dokter').focus();
                return false;
            }
            else if ( $('#poli').val() === '' ) {
                $('#forPoliEror').html('*Silahkan pilih poli');
                $('#poli').focus();
                return false;
            }
            else if($('#tipe_dokter').val() === "") {
                $('#forTipeDokterEror').html('*Silahkan pilh tipe dokter');
                $('#tipe_dokter').focus();
                return false;
            } 
            else if ($('#keterangan').val() === "") {
                $('#forKeteranganEror').html('*Silahkan input keterangan');
                $('#keterangan').focus();
                return false;
            } 
            else{
                //console.log('selanjutnya 1');
                $('#dataPribadi').show();
                $('#dataDokter').show();
                /* fungsi button */
                $(this).hide();
                $('#selanjutnya2').show();
                $('#dataPribadi').click();
                $("#idAlamat").mouseenter(function () {
                    $(this).prop("disabled", true);
                });
                $("#dataDokter").mouseenter(function () {
                    $(this).prop("disabled", true);
                });
            }
        });
    }

    function selanjutnya2() {
        $('#selanjutnya2').click(function (e) {
            e.preventDefault();
            if ($('#nik').val() === '') {
                $('#forNIKEror').html('*Silahkan isi data NIK');
                return false;
            }
            else if ($('#namaLengkap').val() === '') {
                $('#forNamaEror').html('*Silahkan isi data Nama Lengkap');
                return false;
            }
            else if ($('#tanggalLahir').val() === '') {
                $('#forTglLahirEror').html('*Silahkan isi data tanggal lahir');
                return false;
            }
            else if ($('#tempatLahir').val() === '') {
                $('#forTempatLahirEror').html('*Silahkan isi data tempat lahir');
                return false;
            }
            else if ($('#telepon').val() === '') {
                $('#forTeleponEror').html('*Silahkan isi data No.Telepon');
                return false;
            }
            else if ($('#iHp').val() === '') {
                $('#forHpEror').html('*Silahkan isi data No.Handphone');
                return false;
            }
            else if ( $('#jenisKelamin').val() === '' ) {
                $('#forJenisKelaminEror').html('*Silahkan pilih jenis kelamin');
                return false;
            }
            else if ($('#usia').val() === ''){
                $('#forUsiaEror').html('*Silahkan isi data usia');
                return false;
            }
            else if ($('#agama').val() === ''){
                $('#forAgamaEror').html('*Silahkan isi data Agama');
                return false;
            }
            else{
            //console.log('selanjutnya 2');
            $('#idAlamat').show();
            $(this).hide();
            $('#idAlamat').click();
            $('#selesai').show();
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

    $('#formTambah').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('Dokter_postInput')}}",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                var id = data;
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
            }
        });
    });

    // $('html').bind('keypress', function(e) { 
    //     if(e.keyCode == 13)
    //     {
    //         return false;
    //     }
    // });

</script>

@endsection
