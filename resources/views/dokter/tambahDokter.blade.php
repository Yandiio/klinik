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
                    <form class="form-horizontal" novalidate="novalidate">
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Kode Dokter <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" id="w2-username"
                                            name="" placeholder="Kode Dokter">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Poli <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="">
                                        External Dokter <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">NIK<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="" id="" placeholder="NIK">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Nama Lengkap<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="" id="" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3" placeholder="01/01/2019">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="" id="" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Email<span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control form-control-sm mb-3" name="email" id="email" placeholder="Email">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No. Telepon <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="" id="" placeholder="No Telepon">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-email">Jenis Kelamin <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="0">Laki - Laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Provinsi</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kabupaten</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kecamatan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kelurahan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kode Pos</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="" id="w2-last-name" placeholder="Kode Pos">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat Lengkap<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-10">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" name="terms" id="w2-terms" required>
                                            <label for="w2-terms">I agree to the terms of service</label>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <a><i class="fas fa-angle-left"></i> Previous</a>
                        </li>
                        <li class="finish hidden float-right">
                            <a>Finish</a>
                        </li>
                        <li class="next">
                            <a>Next <i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
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

    $(document).ready(function () {
        selanjutnya1();
        selanjutnya2();
        $('#selesai').click(function () {
            $('#dataDokter').click();
            $('#selesai').hide();
            $('#selanjutnya1').show();
            disabledTapAwal();
        });
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
                // console.log(data);
                var id = data;
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
            }
        });
    });

</script>

@endsection
