@extends('layout.admin')

@yield('title', 'Pendaftaran')

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
                            <a href="#w2-account" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">1</span>
                                Data Dokter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">2</span>
                                Data Pribadi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">3</span>
                                Alamat
                            </a>
                        </li>
                    </ul>
                    <form class="form-horizontal" novalidate="novalidate">
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">
                                        Kode Dokter <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" id="w2-username"
                                            name="" placeholder="Kode Dokter">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">
                                        Poli <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Poli Klinik</option>
                                            <option value="">Poli Umum</option>
                                            <option value="">Poli Gigi</option>
                                            <option value="">Poli Radiologi</option>
                                            <option value="">Poli Anak</option>
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
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">
                                        Foto <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <div class="item">
                                            <img src="{{asset('assets/img/projects/project-3.jpg')}}" alt="" class="rounded-circle"
                                                style="width:40%">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name"></label>
                                    <div class="col-sm-4">

                                        <input type="File" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                        Tanggal Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3"
                                                placeholder="01/01/2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                        Nama Lengkap <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="last-name"
                                            id="w2-last-name" placeholder="Nama Lengkap">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                        Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="last-name"
                                            id="w2-last-name" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-email">
                                        Jenis Kelamin <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Laki - Laki</option>
                                            <option value=""> Perempuan </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                        Email <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control form-control-sm mb-3" name="last-name"
                                            id="w2-last-name" placeholder="Email">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                        No. Telepon <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="last-name"
                                            id="w2-last-name" placeholder="No Telepon">
                                    </div>
                                </div>
                            </div>
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">

                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Provinsi</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">DKI Jakarta</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kabupaten</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kecamatan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Cakung Timur</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kelurahan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm mb-3" name="" id="">
                                            <option value="">Cakung Timur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-alamat">Kode Pos</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="last-name"
                                            id="w2-last-name" placeholder="Kode Pos">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat
                                        Lengkap<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize"
                                            data-plugin-textarea-autosize></textarea>
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
<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/js/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script>


@stop
