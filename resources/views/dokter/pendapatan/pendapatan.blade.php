@extends('layout.admin')

@yield('title', 'Pendapatan Dokter')

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
                <li><span>Dokter</span></li>
                <li><span>Pendapatan Dokter</span></li>
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
						
						<h2 class="card-title">Pendapatan Dokter</h2>
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
								<th>Dokter</th>
								<th>Tipe Pasien</th>
                                <th>Obat</th>
                                <th>Duduk</th>
                                <th>Tindakan</th>
                                <th>Uang makan</th>
                                <th>Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td >1</td>
							    <td>[gigi] Ahmad sofian</td>
                                <td>Rawat inap</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>Rp.120000</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >1</td>
							    <td>[gigi] Ahmad sofian</td>
                                <td>Rujukan</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>Rp.120000</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >1</td>
							    <td>[gigi] Ahmad sofian</td>
                                <td>Bukan Rujukan</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td>Rp.120000</td>
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
					<h2 class="card-title">Pendapatan Dokter</h2>
				</header>
				<div class="card-body">
                    <div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama dokter <span class="required">*</span></label>	
                            <select class="form-control form-control-sm mb-2" name="" id="">
                                 <option value="">dr. Joko Priyanto, Sp.PD. M.Sc.</option>
                                 <option value="">dr. Dian Hananto, Sp.PD</option>
                             </select>	    
						</div>
                        <div class="modal-text">
                            <label class="control-label">Tipe Pasien <span class="required">*</span></label>	
                            <select class="form-control form-control-sm mb-2" name="" id="">
                                 <option value="">Bukan Rujukan</option>
                                 <option value="">Rujukan</option>
                                 <option value="">Rawat inap</option>
                             </select>	 
						</div>
                        <div class="modal-text">
                            <label class="control-label">Obat <span class="required">*</span></label>
                            <div class="input-group ">
								<div class="input-group">
									<input type="number" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										<span class="input-group-append">
											<span class="input-group-text" style="height:25px">
												%
											</span>
										</span>
								</div>
                            </div>	
							 	    
						</div>
                        <div class="modal-text">
                            <label class="control-label">Duduk <span class="required">*</span></label>	
                            <div class="input-group ">
								<div class="input-group">
									<input type="number" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										<span class="input-group-append">
											<span class="input-group-text" style="height:25px">
												%
											</span>
										</span>
								</div>
                            </div>    
						</div>
                        <div class="modal-text">
                            <label class="control-label">Tindakan <span class="required">*</span></label>	
                            <div class="input-group ">
								<div class="input-group">
									<input type="number" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										<span class="input-group-append">
											<span class="input-group-text" style="height:25px">
												%
											</span>
										</span>
								</div>
                            </div>    
						</div>
                        <div class="modal-text">
                            <label class="control-label">Uang Makan <span class="required">*</span></label>	
                            <div class="input-group ">
								<div class="input-group">
                                    <span class="input-group-append">
										<span class="input-group-text" style="height:25px">
										Rp	
										</span>
									</span>
									<input type="number" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										
								</div>
                            </div>	    
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
					<h2 class="card-title">Ubah Tipe Pendaftaran</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Tipe Pendaftaran <span class="required">*</span></label>
								
							 <input type="text" name="fullname" class="form-control" placeholder="Tipe Pendaftaran" required/>
							    
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
  

@stop