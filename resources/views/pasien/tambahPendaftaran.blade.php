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
                                        <input type="number" class="form-control form-control-sm mb-3" name="nik"
                                            id="w2-first-name" required>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Agama
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="agama" id="agama" class="form-control form-control-sm mb-3" required>
                                            <option value="0">Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen Protestan</option>
                                            <option value="3">Budha</option>
                                            <option value="3">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama
                                        Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="namaLengkap"
                                            id="w2-first-name" required>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="umur"
                                            id="w2-first-name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tempatLahir"
                                            id="w2-last-name" requeired>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Propinsi
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="provinsi" id="provinsi" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option id="itemProvinsi">=========== Pilih Provinsi ======</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker name="tanggalLahir"
                                                class="form-control form-control-sm mb-3" requeired>
                                        </div>
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
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Jenis
                                        Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="jenisKelamin" id="" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="0">Laki-laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="w2-last-name">Kecamatan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kecamatan" id="kecamatan"
                                            class="form-control form-control-sm mb-3" requeired>
                                            <option id="itemKecamatan" value="">============ Kecamatan ========</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan
                                        Darah <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="golonganDarah" id="" class="form-control form-control-sm mb-3"
                                            requeired>
                                            <option value="">Golongan darah</option>
                                            <option value="0">A</option>
                                            <option value="1">B</option>
                                            <option value="2">O</option>
                                            <option value="3">C</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="w2-last-name">Kelurahan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="kelurahan" id="kelurahan"
                                            class="form-control form-control-sm mb-3" requeired>
                                            <option id="itemKelurahan" value="">============ Kelurahan ========</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No
                                        Telepon <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="telepone"
                                            id="w2-first-name" requeired>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" name="alamat"
                                            data-plugin-textarea-autosize></textarea>
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
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tipe
                                        Asuransi <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select data-plugin-selectTwo class="form-control populate form-control-sm mb-3"
                                            id="asuransi">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama
                                        Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kode
                                        Karyawan<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="w2-first-name">Telepone
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No Polis
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Hp
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Akhir Polis <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker
                                                class="form-control form-control-sm mb-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="w2-first-name">Keterangan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" name="keterangan"
                                            data-plugin-textarea-autosize></textarea>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Hubungan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="hubungan" id="" class="form-control form-control-sm mb-3">
                                            <option value="a">Hubungan</option>
                                            <option value="a">Anak</option>
                                            <option value="a">Istri</option>
                                            <option value="a">Dll</option>
                                        </select>
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
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker name="tanggalDaftar"
                                                class="form-control form-control-sm mb-3">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Dokter
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="dokter" id="" class="form-control form-control-sm mb-3">
                                            <option value="a">Pilih Dokter</option>
                                            <option value="a">[GIGI] Drs.Beny Setiawan</option>
                                            <option value="a">[Gizi] Drs.Khoslis Pratama</option>
                                            <option value="a">[Lambung] Drs.Yadi Pamungkas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label class="col-sm-2 control-label text-sm-right pt-1"
                                        for="textareaAutosize">Keluhan
                                        <span class="required">*</span></label>
                                    <div class="col-lg-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" name="keluhan"
                                            data-plugin-textarea-autosize></textarea>
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
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/js/theme.init.js')}}"></script>

<!-- Examples -->
<!-- <script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script> -->
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

        $('#selesai').click(function () {
            $('#dataPribadi').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
        });
        dataAnsuransi();
        tampilProvinsi();

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
        $('#selanjutnya1').click(function () {
            //console.log('selanjutnya 1');
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
        });
    }

    function selanjutnya2() {
        $('#selanjutnya2').click(function () {
            //console.log('selanjutnya 1');
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
    
    $('#formTambah').on('submit', function (e) {
        console.log("asdads");
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

                console.log(data);
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
                // oTable.ajax.reload();
            }
        });
    });


</script>
@stop
