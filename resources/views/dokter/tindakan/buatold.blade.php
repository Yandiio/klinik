@extends('layout.admin')

@yield('title', 'Dokter | Buat Tindakan')

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
                <li><span>Tindakan</span></li>
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
                                                Data Pasien
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center">
                                            <span class="badge badge-primary">2</span>
                                            Tindakan
                                        </a>
                                    </li>
                                </ul>
                                <form class="form-horizontal" novalidate="novalidate">
                                    <div class="tab-content">
                                        <div id="w2-account" class="tab-pane p-3 active">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">
                                                    Nama Pasien <span class="required">*</span>
                                                </label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control mb-3" name="" id="">
                                                            <option value="">Agus</option>
                                                            <option value="">Yuliantoro</option>
                                                        </select>
                                                    </div>
                                                <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">
                                                    Nama Dokter <span class="required">*</span>
                                                </label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control mb-3" name="" id="">
                                                            <option value="">Dr.Kholis</option>
                                                            <option value="">Dr.Helmay</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">
                                                    Diagnosa <span class="required">*</span>
                                                </label>
                                                <div class="col-sm-4">
                                                    <select class="form-control mb-3" name="" id="">
                                                        <option value="">Demam</option>
                                                        <option value="">Pilek</option>
                                                    </select>
                                                </div>
                                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="">
                                                        Tanggal Tindakan <span class="required">*</span>
                                                    </label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control mb-3" name="" id="">
                                                            <option value="">Lab 1</option>
                                                            <option value="">Lab 2</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">
                                                    Laboratorium <span class="required">*</span>
                                                </label>
                                                    <div class="col-sm-4">
                                                        <input type="text" data-plugin-datepicker class="form-control mb-3" placeholder="01/01/2019">
                                                    </div>
                                                    
                                            </div>
                                            
                                        </div>
                                        <div id="w2-confirm" class="tab-pane p-3">
                                            
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                                        Nama Obat <span class="required">*</span>
                                                    </label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control mb-3" name="" id="">
                                                                <option value="">Pilih Obat</option>
                                                                <option value="">Panadol</option>
                                                                <option value="">Mixagrip</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                                            Jumlah Obat <span class="required">*</span>
                                                        </label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control mb-3" name="last-name" id="w2-last-name" placeholder="Jumlah Obat">
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-email">
                                                            Tipe Obat <span class="required">*</span>
                                                    </label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control mb-3" name="" id="">
                                                            <option value="">Sirup</option>
                                                            <option value=""> Kapsul </option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                                        Dosis <span class="required">*</span>
                                                    </label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control mb-3" name="last-name" id="w2-last-name" placeholder="Dosis">
                                                        </div>
                                                        
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control mb-3" name="last-name" id="w2-last-name" placeholder="Dosis">
                                                        </div>
                                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">
                                                            Tipe Harga <span class="required">*</span>
                                                        </label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control mb-3" name="" id="">
                                                                    <option value="">BPJS</option>
                                                                    <option value="">Asuransi</option>
                                                                </select>
                                                            </div>
                                                </div>
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