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
                                Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-toggle="tab" class="nav-link text-center" id="penjamin">
                                <span class="badge badge-primary">2</span>
                                Rekam Medis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center" id="daftar">
                                <span class="badge badge-primary">3</span>
                                Tindakan
                            </a>
                        </li>
                    </ul>
                    <form action="#" id="formTambah" method="POST">
                        @csrf
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">NO
                                        Pendafataran</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="noDaftar"
                                            id="w2-first-name" readonly="readonly"
                                            value="{{$pendaftaran[0]->no_daftar}}">
                                        <input type="hidden" class="form-control form-control-sm mb-3" name="idDaftar"
                                            id="w2-first-name" readonly="readonly" value="{{$pendaftaran[0]->id}}">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Poli
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="poli"
                                            id="w2-first-name" readonly="readonly"
                                            value="{{$pendaftaran[0]->poli->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="nik"
                                            id="w2-first-name" placeholder="234543452" disabled
                                            value="{{$pendaftaran[0]->penjamin->pasien->nik}}">
                                    </div>

                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Penjamin
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="penjamin"
                                            id="w2-first-name" placeholder="BPJS" disabled
                                            value="{{$pendaftaran[0]->penjamin->asuransi->nama}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama
                                        Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="namaLengkap"
                                            id="w2-first-name" placeholder="Helmay cahyadi" disabled
                                            value="{{$pendaftaran[0]->pasien->nama_lengkap}}">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="usia"
                                            id="w2-first-name" placeholder="23" disabled
                                            value="{{$pendaftaran[0]->pasien->usia}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="tempatlahir"
                                            id="w2-first-name" placeholder="Bekasi" disabled
                                            value="{{$pendaftaran[0]->pasien->tempat_lahir}}">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan
                                        Darah <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3"
                                            name="golonganDarah" id="w2-first-name" placeholder="B+" disabled
                                            value="{{$pendaftaran[0]->pasien->gd}}">
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
                                            <input type="text" data-plugin-datepicker
                                                class="form-control form-control-sm mb-3" placeholder="23/07/2019"
                                                name="tglLahir" disabled
                                                value="{{$pendaftaran[0]->pasien->tanggal_lahir}}">
                                        </div>

                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Jenis
                                        Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="jenisKelamin"
                                            id="w2-first-name" placeholder="Laki-Laki" disabled
                                            value="{{$pendaftaran[0]->pasien->jk}}">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Pendaftaran<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker
                                                class="form-control form-control-sm mb-3" name="tglPendaftaran" disabled
                                                value="{{$pendaftaran[0]->created_at}}">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Keluhan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" name="keluhan"
                                            data-plugin-textarea-autosize disabled
                                            value="{{$pendaftaran[0]->keluhan}}">{{$pendaftaran[0]->keluhan}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- kontent tabb 1 -->
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">No
                                        Rekam medis <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" readonly="readonly" value="Auto">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Dokter
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="dokter" id="dokter" class="form-control form-control-sm mb-3">
                                            <option value="">Pilih Dokter</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">
                                        Suhu Badan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="suhuBadan"
                                            id="w2-first-name" placeholder="suhu">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tekanan
                                        darah
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tekananDarah"
                                            id="w2-first-name" placeholder="Tekanan Darah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">
                                        Berat Badan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="beratBadan"
                                            id="w2-first-name" placeholder="Berat Badan">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tinngi
                                        badan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="tinggiBadan"
                                            id="w2-first-name" placeholder="Tinngi badan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Tanggal
                                        Tindakan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:28px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="date" class="form-control form-control-sm mb-3"
                                                name="tanggalTindakan">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Keluhan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" name="keterangan"
                                            data-plugin-textarea-autosize></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- kontent tab 2 -->
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <section class="card card-featured card-featured-dark mb-4">
                                            <header class="card-header">
                                                <div class="card-actions">
                                                    <a href="#" class="card-action card-action-toggle"
                                                        data-card-toggle></a>
                                                    <a href="#" class="card-action card-action-dismiss"
                                                        data-card-dismiss></a>
                                                </div>

                                                <h2 class="card-title">Laboratorium</h2>
                                            </header>
                                            <div class="card-body">
                                                <!-- <code>.card-info</code> -->
                                                <table class="table table-bordered table-striped mb-0"
                                                    id="datatable-editable">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:5%">
                                                                <button type="button"
                                                                    class="btn btn-primary float-right"
                                                                    data-toggle="modal" data-target="#modalTambahLab"
                                                                    id="modalLab">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </th>
                                                            <th width="30%">Nama Lab</th>
                                                            <th>Keterangan</th>
                                                            <th style="width:10%">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="bodyLab">

                                                    </tbody>
                                                </table>
                                                <br>
                                                <div class="row">

                                                    <div class="col-lg-4 form-group">

                                                    </div>
                                                    <!-- <div class="col-lg-4 form-group">
                                                        <label class="control-label float-right" for="w2-first-name">Satatus
                                                            <span class="required">*</span></label>
                                                    </div>
                                                    <div class="col-lg-4 form-group">
                                                    <select name="dokter" id="dokter"
                                                                class="form-control form-control-sm mb-3">
                                                                <option value="">Antrian</option>
                                                                <option value="1">Selesai</option>
                                                                
                                                    </select>
                                                    </div> -->
                                                </div>
                                        </section>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="pager">
                                <li class="previous disabled">
                                    <!-- <button ><i class="fas fa-angle-left"></i></button>
                            <a><i class="fas fa-angle-left"></i> Sebelumnya</a> -->
                                    <button id="sebelumnya" class="mb-1 mt-1 mr-1 btn btn-default float-left"
                                        type="button"><i class="fas fa-angle-left"></i> Sebelumnya</button>
                                </li>
                                <li class="finish float-right">
                                    <button id="selesai" class="mb-1 mt-1 mr-1 btn btn-default"
                                        type="submit">Selesai</button>

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

    <!-- modal tambah -->
    <div class="modal" id="modalTambah">
        <div class="modal-dialog modal-block modal-block-lg">
            <div class="modal-content  ">
                <!-- Modal Header -->
                <div class="modal-header card-header">
                    <h2 class="card-title" id="judul">Tambah Diagnosa</h2>
                    <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <div class="col-lg-12">
                                <div class="table-responsive m-t-40">
                                    <table id="tableAjaxDiagnosaList"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Nama Diagnosa</th>
                                                <th>Hasil Diagnosa</th>
                                                <th>Keterangan</th>
                                                <th width="15%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <!-- <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button> -->
                            <button type="button" class="btn btn-default" data-dismiss="modal"
                                id="cancel">Kembali</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal tambah -->

    <!-- modal tambah -->
    <div class="modal" id="modalTambahLab">
        <div class="modal-dialog modal-block modal-block-lg">
            <div class="modal-content  ">
                <!-- Modal Header -->
                <div class="modal-header card-header">
                    <h2 class="card-title" id="judul">Tambah Lab</h2>
                    <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <div class="col-lg-12">

                                <div class="table-responsive m-t-40">
                                    <table id="tableAjaxLabList"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Nama Lab</th>
                                                <th>Keterangan</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <!-- <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button> -->
                            <button type="button" class="btn btn-default" data-dismiss="modal"
                                id="cancel">Kembali</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal tambah -->


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
<!-- <script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script> -->
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>

<script src="{{asset('assets/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js')}}"></script>

<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{ asset('assets/js/examples/examples.advanced.form.js')}}"></script>
<script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>

<script>




</script>

@stop

@section('jscustom')
<script>
    disabledTapAwal();



    $(document).ready(function () {
        selanjutnya1();
        selanjutnya2();
        dataDokter();

        $('#selesai').click(function () {
            $('#dataPribadi').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
        });


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
            $("#daftar").mouseenter(function () {
                $(this).prop("disabled", true);
            });
            $("#penjamini").mouseenter(function () {
                $(this).prop("disabled", true);
            });
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
            url: "{{ route('input_rekam_medis') }}",
            data: $(this).serialize(),
            success: function (data) {

                window.location.href = "{{ url ('rekam-medis/list-rekam-medis') }}";
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });

                // redirect()
            }
        });
    });


    $('#modalLab').on('click', function () {

        oTableDiagnosa = $('#tableAjaxLabList').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('list_lab')}}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);

                        let buttonTambah =
                            '<button type="button" href="" class="btn-sm btn-primary"  title="Hapus Data !" style="margin-right:5px" onclick="buttonAddLab(' +
                            data + ')"><i class="fa fa-plus" aria-hidden="true"></i></button>';
                        return buttonTambah;
                    }
                }
            ]
        });
    });

    $('#modalDiagnosa').on('click', function () {

        oTableDiagnosa = $('#tableAjaxDiagnosaList').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('Diagnosa_getList')}}",
            columns: [{
                    data: 'kode_diagnosa',
                    name: 'kode_diagnosa'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'hasil_diagnosa',
                    name: 'hasil_diagnosa'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);

                        let buttonTambah =
                            '<button type="button" href="" class="btn-sm btn-primary"  title="Hapus Data !" style="margin-right:5px" onclick="buttonAdd(' +
                            data + ')"><i class="fa fa-plus" aria-hidden="true"></i></button>';
                        return buttonTambah;
                    }
                }
            ]
        });
    });





    function buttonAdd(idDiagnosa) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        $.ajax({
            type: "GET",
            url: "{{route('Diagnosa_getEdit')}}",
            data: {
                id: idDiagnosa
            },
            success: function (data) {
                //console.log(data);
                var itemdiagnosa = '<tr><td>' + data.id + '<input type="hidden" name="diagnosa[]" value="' +
                    data.id + '" id="idDiagnosa' + data.id + '"></td><td>' + data.nama + '</td><td>' + data
                    .hasil_diagnosa +
                    '</td><td><button type="button" href="" class="btn btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';

                $('#bodyDiagnosa').append(itemdiagnosa);
            }
        });
    }

    function buttonAddLab(idDiagnosa) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        $.ajax({
            type: "GET",
            url: "{{route('Diagnosa_getEdit')}}",
            data: {
                id: idDiagnosa
            },
            success: function (data) {
                //console.log(data);
                var itemdiagnosa = '<tr><td>' + data.id + '<input type="hidden" name="lab[]" value="' + data
                    .id + '" id="idLab' + data.id + '"></td><td>' + data.nama + '</td><td>' + data
                    .keterangan +
                    '</td><td><button type="button" class="btn btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';

                $('#bodyLab').append(itemdiagnosa);
            }
        });
    }

    $('.table tbody').on('click', '.btn', function () {
        $(this).closest('tr').remove();

    });
    function dataDokter() {
        $.ajax({
            type: "GET",
            url: "{{route('dokter_get_data')}}",
            
            success: function (data) {
                //console.log(data[0].id);
                $.each(data, function (index, value) {
                    $('#dokter').append('<option id=' + value.id + ' value=' + value
                        .id +
                        '>' + value.nama_lengkap + '</option>')
                });
            }

        });
    }

</script>
@stop
