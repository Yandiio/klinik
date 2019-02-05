@extends('layout.admin')

@yield('title', 'Pendaftaran')

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
										Daftar
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
										Penjamin
								</a>
							</li>
						</ul>
						<form class="form-horizontal" novalidate="novalidate">
							<div class="tab-content">
								<div id="w2-account" class="tab-pane p-3 active">
									<div class="form-group row">
										<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control form-control-sm mb-3" id="w2-username" name="username" required>
											</div>
                                        <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-username">Username</label>
											<div class="col-sm-4">
												<input type="text" class="form-control form-control-sm mb-3" id="w2-username" name="username" required>
											</div>
									</div>
								<div class="form-group row">
									<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Password</label>
										<div class="col-sm-4">
											<input type="password" class="form-control form-control-sm mb-3" name="password" id="w2-password" required minlength="6">
										</div>
                                    	<label class="col-sm-2 control-label text-sm-right pt-1" for="w2-password">Password</label>
										<div class="col-sm-4">
											<input type="password" class="form-control form-control-sm mb-3" name="password" id="w2-password" required minlength="6">
										</div>
								</div>
								</div>
								    <div id="w2-profile" class="tab-pane p-3">
										<div class="form-group row">
											<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-first-name">First Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="first-name" id="w2-first-name" required>
											    </div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-last-name">Last Name</label>
											    <div class="col-sm-8">
													<input type="text" class="form-control" name="last-name" id="w2-last-name" required>
												</div>
										</div>
									</div>
									<div id="w2-confirm" class="tab-pane p-3">
										<div class="form-group row">
											<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-email">Email</label>
											    <div class="col-sm-8">
												    <input type="text" class="form-control" name="email" id="w2-email" required>
											    </div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
												<div class="col-sm-10">
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