@extends('layout.admin')

@yield('title', 'Diagnosa')

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
                <li><span>Labortorium</span></li>
                <li><span>Diagnosa</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        
        <div class="row">
			<div class="col-lg-12">
				<section class="card">
				    <header class="card-header">
						<div class="card-actions">
							<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
							<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
						</div>
						
						<h2 class="card-title">Tipe Pendaftaran</h2>
					</header>
					<div class="card-body">
                        <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
					<table class="table table-responsive-lg table-bordered table-striped table-sm mb-0" id="dataTable">
						<thead>
						    <tr>
							    <th width="5%">No</th>
								<th>Nama Diagnosa</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td >1</td>
							    <td>Demam</td>
                                <td>Rp.15000</td>
                                <td>blabla</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>Pilek</td>
                                <td>Rp.200000</td>
                                <td>bla bla</td>
							    <td>
                                <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>Kutu air</td>
                                <td>Rp.300000</td>
                                <td>ahsdha</td>
							    <td>
                                <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            			
						</tbody>
					</table>
				</section>
			</div>
			
		</div>
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Diaknosa</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama diagnosa <span class="required">*</span></label>	
							<input type="text" name="fullname" class="form-control" placeholder="Tipe Pendaftaran" required/>	    
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Harga <span class="required">*</span></label>	
							<div class="input-group ">
								<div class="input-group">
                                    <span class="input-group-append">
										<span class="input-group-text">
										Rp	
										</span>
									</span>
									<input type="number" class="form-control" placeholder="Harga">
										
								</div>
                            </div>	        
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Keterangan <span class="required">*</span></label>	
							<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>	    
						</div>
					</div>
				</div>
				<footer class="card-footer">
					<div class="row">
					    <div class="col-md-12 text-right">
                            <button class="btn btn-default modal-dismiss">Batal</button>
							<button type="submit" class="btn btn-success modal-confirm">Simpan</button>
						</div>
					</div>
				</footer>
			</section>
		</div>
        <!-- modal tambah -->
        <!-- modal Edit -->
        <div id="modalMDEdit" class="modal-block modal-header-color modal-block-success mfp-hide">
            <section class="card">
				<header class="card-header">
					<h2 class="card-title">Diagnosa</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama Diagnosa <span class="required">*</span></label>	
							<input type="text" name="fullname" class="form-control" placeholder="Tipe Pendaftaran" required/>	    
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Harga <span class="required">*</span></label>	
							<div class="input-group ">
								<div class="input-group">
                                    <span class="input-group-append">
										<span class="input-group-text">
										Rp	
										</span>
									</span>
									<input type="number" class="form-control" placeholder="Harga">
										
								</div>
                            </div>	        
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Keterangan <span class="required">*</span></label>	
							<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>	    
						</div>
					</div>
				</div>
				<footer class="card-footer">
					<div class="row">
					    <div class="col-md-12 text-right">
                            <button class="btn btn-default modal-dismiss">Batal</button>
							<button type="submit" class="btn btn-success modal-confirm">Simpan</button>
						</div>
					</div>
				</footer>
			</section>
		</div>
        <!-- modal Edit-->
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

@stop
@section('script')
        <script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
        <script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>
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