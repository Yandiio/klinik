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
								<a href="#w2-account" data-toggle="tab" class="nav-link text-center">
									<span class="badge badge-primary">1</span>
										Data Pribadi
								</a>
							</li>
							<li class="nav-item">
								<a href="#w2-profile" data-toggle="tab" class="nav-link text-center">
									<span class="badge badge-primary">2</span>
										Penjamin
								</a>
							</li>
							<li class="nav-item">
							    <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center">
								    <span class="badge badge-primary">3</span>
										Daftar
								</a>
							</li>
						</ul>
						<form class="form-horizontal" novalidate="novalidate">
							<div class="tab-content">
								<div id="w2-account" class="tab-pane p-3 active">
                                    <div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Foto</label>
												<div class="col-sm-4">
													<div class="item">
														<img src="{{asset('assets/img/projects/project-3.jpg')}}" alt="" class="rounded-circle" style="width:40%">
													</div>
											    </div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name"></label>
												<div class="col-sm-4">
													
													<input type="File" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No Telepon <span class="required">*</span></label>
											    <div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Agama <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Agama</option>
														<option value="">Islam</option>
														<option value="">Hindu</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama Lengkap <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="text" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Negara <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Negara</option>
														<option value="">Indonesia</option>
														<option value="">Singapura</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat Lahir <span class="required">*</span></label>
											    <div class="col-sm-4">
													<input type="text" class="form-control form-control-sm mb-3" name="last-name" id="w2-last-name">
												</div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Propinsi <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Jawa Barat</option>
														<option value="">Jawa Timur</option>
														<option value="">Jawa Tenggah</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia <span class="required">*</span></label>
											    <div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="last-name" id="w2-last-name" min="1" >
												</div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kabupaten <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Banjar Negara</option>
														<option value="">Kepulauan Seribu</option>
														<option value="">Bayumas</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Jenis Kelamin <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Jenis Kelamin</option>
														<option value="">Laki-laki</option>
														<option value="">Perempuan</option>		
													</select>
												</div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kecamatan <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Kecamatan</option>
														<option value="">Pondok Melati</option>
														<option value="">Pondok Unggu</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan Darah <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3" >
														<option value="">Golongan darah</option>
														<option value="d">A</option>
														<option value="d">B</option>	
														<option value="d">O</option>
														<option value="d">C</option>			
													</select>
												</div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kelurahan <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3" >
														<option value="h">Harapan Jaya</option>
														<option value="d">JatiRahayu</option>
														<option value="d">Pondok Mulia</option>		
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal Lahir <span class="required">*</span></label>
											    <div class="col-sm-4">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text" style="height:25px">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3" >
													</div>
												</div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat <span class="required">*</span></label>
											    <div class="col-sm-4">
												<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
												</div>
									</div>
								</div>
                                <!-- kontent tabb 1 -->
							    <div id="w2-profile" class="tab-pane p-3">
                                    <div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tipe penjamin <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Umum</option>
														<option value="">Pribadi</option>
														<option value="">BPJS</option>	
													</select>
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama Lengkap <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="text" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Kode Karyawan<span class="required">*</span></label>
											    <div class="col-sm-4">
												<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Telepone <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No Polis <span class="required">*</span></label>
											<div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											</div>
											
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Hp <span class="required">*</span></label>
												<div class="col-sm-4">
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal Akhir Polis <span class="required">*</span></label>
											    <div class="col-sm-4">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text" style="height:25px">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3" >
													</div>													
												</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Keterangan <span class="required">*</span></label>
												<div class="col-sm-4">
                                                    <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
											    </div>
											<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Hubungan <span class="required">*</span></label>
											    <div class="col-sm-4">
													<select name="" id="" class="form-control form-control-sm mb-3">
														<option value="">Hubungan</option>
														<option value="">Anak</option>
														<option value="">Istri</option>	
														<option value="">Dll</option>
													</select>
												</div>
										</div>
										
								</div>
                                <!-- kontent tab 2 -->
							    <div id="w2-confirm" class="tab-pane p-3">
                                <div class="form-group row">
										<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Tipe Pendaftaran <span class="required">*</span></label>
											<div class="col-sm-4">
												
												<select name="" id="" class="form-control form-control-sm mb-3">
													<option value="">Umum</option>
													<option value="">Pribadi</option>
													<option value="">BPJS</option>
													
												</select>
											</div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Tanggal <span class="required">*</span></label>
											<div class="col-sm-4">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text" style="height:25px">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3">
													</div>
											</div>
									</div>
								<div class="form-group row">
									<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Pasien Rujukan <span class="required">*</span></label>
										<div class="col-sm-4">
											<!-- <input type="password" class="form-control form-control-sm mb-3" name="password" id="w2-password" required minlength="6"> -->
											<select name="" id="" class="form-control form-control-sm mb-3">
													<option value="">Bukan Pasie Rujukkan</option>
													<option value="">Pasien Rujukan</option>		
											</select>
										</div>
										
                                    	<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Dokter <span class="required">*</span></label>
										<div class="col-sm-4">
											<!-- <input type="password" class="form-control form-control-sm mb-3" name="password" id="w2-password" required minlength="6"> -->
											<select name="" id="" class="form-control form-control-sm mb-3">
													<option value="">Pilih Dokter</option>
													<option value="">[GIGI] Drs.Beny Setiawan</option>
													<option value="">[Gizi] Drs.Khoslis Pratama</option>
													<option value="">[Lambung] Drs.Yadi Pamungkas</option>			
											</select>
										</div>
										<label class="col-sm-2 control-label text-sm-right pt-1" for="textareaAutosize">Keluhan <span class="required">*</span></label>
											<div class="col-lg-4">
												<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
											</div>
								</div>
									<div class="form-group row">
									<div class="col-sm-2"></div>
										<div class="col-sm-4">
											<div class="checkbox-custom">
												<input type="checkbox" name="terms" id="w2-terms" required>
													<label for="w2-terms">I agree to the terms of service</label>
											</div>
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
		<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script>
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
		<script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script>
		<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>
  

@stop