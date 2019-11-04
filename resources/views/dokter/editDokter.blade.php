@extends('layout.admin')

@yield('title', 'Edit Dokter')

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
                <li><span>Edit Dokter</span></li>
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
                        <form action="#" id="formUpdate" method="POST">
                            <input type="hidden" name="id_dokter_aja" value="{{ $dokter->id }}">
                                {{-- <input type="hidden" class="form-control form-control-sm mb-3" name="iddokter"
                                id="" value="{{ $dokter->id}}"> --}}
                                @csrf
                            <div class="tab-content">
                                <div id="w2-account" class="tab-pane p-3 active">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Kode Dokter <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm mb-3" id="editKode"
                                                name="kd_dokter" value="{{$dokter->kode_dokter}}">
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Poli <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm mb-3" name="poli" id="poli">
                                                    {{-- <option value="{{$poli->id}}" {{ "$poli->id" == "$dokter->id_tipe_poli" ? 'selected' : ''}}>{{$item->nama}}</option> --}}
                                                @foreach ($poli as $item)
                                                    <option value="{{$item->id}}" {{ "$item->id" == "$dokter->id_tipe_poli" ? 'selected' : ''}}>{{$item->nama}}</option>
                                                @endforeach
                                                {{-- <option value="{{$dokter->id_tipe_poli}}">{{$dokter->id_tipe_poli}}</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="">
                                            External Dokter <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm mb-3" name="tipe_dokter" id="editExternal">
                                                {{-- <option value="{{$dokter->tipe_dokter}}">{{$dokter->tipe_dokter}}</option> --}}
                                                <option value="1" {{ $dokter->tipe_dokter =='1' ? 'selected' : ''}}>Yes</option>
                                                <option value="0" {{ $dokter->tipe_dokter =='0' ? 'selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Keterangan<span class="required">*</span></label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" rows="3" id="editKeterangan" name="keterangan" data-plugin-textarea-autosize>{{$dokter->keterangan}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="w2-profile" class="tab-pane p-3">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">NIK<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm mb-3" name="nik" id="editNIK" value="{{$dokter->nik}}" placeholder="NIK">
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Nama Lengkap<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm mb-3" name="namaLengkap" id="editNamaLengkap" value="{{$dokter->nama_lengkap}}">
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
                                            <input type="date" name="tanggalLahir" id="editTanggalLahir" value="{{$dokter->tanggal_lahir}}" class="form-control form-control-sm mb-3" >
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat Lahir <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tempatLahir" id="editTempatLahir" value="{{$dokter->tempat_lahir}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No. Telepon <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm mb-3" name="telepon" id="editNoTelepon" value="{{$dokter->telepon}}">
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No. Handphone <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="hp" id="editHP" value="{{$dokter->hp}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-email">Jenis Kelamin <span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm mb-3" name="jenisKelamin" id="editJenisKelamin" required>
                                                <option value="0" {{ $dokter->jenis_kelamin =='0' ? 'selected' : ''}}>Laki-laki</option>
                                                <option value="1" {{ $dokter->jenis_kelamin =='1' ? 'selected' : ''}}>Perempuan</option>
                                                {{-- <option value="{{$dokter->jenis_kelamin}}">{{$dokter->jenis_kelamin}}</option>
                                                <option value="0">Laki-Laki</option>
                                                <option value="1">Perempuan</option> --}}
                                            </select>
                                        </div>
                                        {{-- <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Email<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control form-control-sm mb-3" name="email" id="editEmail" placeholder="Email" required>
                                        </div> --}}
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm mb-3" name="usia" id="editUsia" value="{{$dokter->usia}}" required>
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Agama<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm mb-3" name="agama" id="editAgama" value="{{$dokter->agama}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="w2-confirm" class="tab-pane p-3">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Provinsi<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="provinsi" id="provinsi" class="form-control form-control-sm mb-3" requeired>
                                                {{-- <option id="itemProvinsi" >{{$dokter->alamatDokter->provinsi}}</option> --}}
                                                @foreach ($alamat as $item)
                                                    <option value="{{$item->id}}" {{ "$item->id" == "$dokter->alamatDokter->provinsi" ? 'selected' : ''}}></option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kota<span class="required">*</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="kota" id="kota" class="form-control form-control-sm mb-3"
                                                requeired>
                                                <option id="itemKota">{{$dokter->alamatDokter->kabupaten}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kecamatan
                                            <span class="required">*</span></label>
                                        <div class="col-sm-4">
                                            <select name="kecamatan" id="kecamatan"
                                                class="form-control form-control-sm mb-3" requeired>
                                                <option id="itemKecamatan" value="{{$dokter->alamatDokter->kecamatan}}">{{$dokter->alamatDokter->kecamatan}}</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kelurahan
                                            <span class="required">*</span></label>
                                        <div class="col-sm-4">
                                            <select name="kelurahan" id="kelurahan"
                                                class="form-control form-control-sm mb-3" requeired>
                                                <option id="itemKelurahan" value="{{$dokter->alamatDokter->kelurahan}}">{{$dokter->alamatDokter->kelurahan}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat Lengkap<span class="required">*</span></label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" rows="3" name="alamat" id="textareaAutosize" value="{{$dokter->alamatDokter->alamat}}" data-plugin-textarea-autosize>{{$dokter->alamatDokter->alamat}}</textarea>
                                            <input type="hidden" name="id_alamat" value="{{$dokter->alamatDokter->id}}">
                                        </div>
                                        {{-- <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kode Pos</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm mb-3" name="kodePos" id="w2-last-name" placeholder="Kode Pos">
                                        </div> --}}
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
                                <button type="submit" class="mb-1 mt-1 mr-1 btn btn-default" id="selesai">EDIT</button>
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

<script>

</script>


@stop

@section('jscustom')

<script>
    disabledTapAwal();
    // view();

    $(document).ready(function () {
        selanjutnya1();
        selanjutnya2();
        
        $('#selesai').click(function () {
            //console.log('#selesai');
            $('#formTambah').trigger("reset");
            $('#dataDokter').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
        });

        tampilProvinsi();
        // dataPoli();
    });

    function disabledTapAwal() {
        $('#dataPribadi').hide();
        $('#idAlamat').hide();
        $('#selanjutnya2').hide();
        $('#selesai').hide();
    }

    function selanjutnya1() {
        $('#selanjutnya1').click(function () {
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
        });
    }

    function selanjutnya2() {
        $('#selanjutnya2').click(function () {
            //console.log('selanjutnya 2');
            $('#idAlamat').show();
            $(this).hide();
            $('#idAlamat').click();
            $('#selesai').show();
            $("#dataPribadi").mouseenter(function () {
                $(this).prop("disabled", true);
            });
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
    var id = $('#provinsi').val("");
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

    $('#formUpdate').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ route('Dokter_postUpdate')}}",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                var id = data;
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
                window.location = '{{ url("dokter/list-dokter")}}'
            }
        });
    });

</script>

@endsection
