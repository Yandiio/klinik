@extends('layout.admin')

@yield('title', 'List Resep Dokter')

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
                <li><span> Rawat Jalan </span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        
        <div class="row">
				<div class="col">
					<section class="card">
						<header class="card-header">
							<div class="card-actions">
								<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
							</div>
			
							<h2 class="card-title">Resep</h2>
						</header>
						<div class="card-body">
							<button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
								Buat Resep
								<i class="fa fa-plus"></i>
							</button>
							<table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
									<thead>
											<tr>
                                                <th style="text-align:center">No</th>
                                                <th style="text-align:center">Tanggal</th>
												<th style="text-align:center">Nama Pasien</th>
												<th style="text-align:center">Resep</th>
												<th style="text-align:center">Jumlah Obat</th>
												<th style="text-align:center">Tipe Obat</th>
												<th style="text-align:center">Dosis</th>
												{{-- <th style="text-align:center">Hari</th> --}}
												<th style="text-align:center">Tipe Harga</th>
												<th style="text-align:center">Aksi</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td style="text-align:center">10/02/2019</td>
												<td style="text-align:center">Helmay</td>
												<td style="text-align:center">Panadol</td>
												<td style="text-align:center">1</td>
												<td style="text-align:center">Kapsul</td>
												<td style="text-align:center">2 x 1 /hari</td>
												<td style="text-align:center">
													<span class="float-center badge badge-success">BPJS</span>
												</td>
												
												<td>
													<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
													<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>  
											</tr>
												
										</tbody>
							</table>
						</div>
					</section>
				</div>
			</div>
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Tambah Resep</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Pilih Nama Pasien<span class="required">*</span></label>
                            <select class="form-control mb-3" name="" id="">
                                <option value="">Helmay</option>
                                <option value="">Agus</option>
                                <option value="">Anto</option>
                            </select>
						</div>
						<div class="modal-text">
							<label class="control-label">Tanggal<span class="required">*</span></label>
                            <input type="text" data-plugin-datepicker class="form-control mb-3" placeholder="01/01/2019">
						</div>
						
							<div class="modal-text">
								<label class="control-label">Nama Resep<span class="required">*</span></label>
								<input type="text" name="fullname" class="form-control" placeholder="Nama Resep" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Provinsi<span class="required">*</span></label>
								<select class="form-control mb-3" name="" id="">
										<option value="">DKI Jakarta</option>
									</select>
							</div>
							<div class="modal-text">
								<label class="control-label">Kota<span class="required">*</span></label>
									<select class="form-control mb-3" name="" id="">
										<option value="">DKI Jakarta</option>
										<option value="">Bekasi</option>
									</select>
							</div>
							<div class="modal-text">
								<label class="control-label">Alamat<span class="required">*</span></label>
									<textarea name="" class="form-control" id="" cols="30" rows="3" id="textareaAutosize" data-pluginn-textarea-autosize></textarea>
							</div>
							<div class="modal-text">
								<label class="control-label">Kode Pos<span class="required">*</span></label>
									<input type="number" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Email<span class="required">*</span></label>
									<input type="text" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Telepon<span class="required">*</span></label>
									<input type="number" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Contact Person<span class="required">*</span></label>
								<textarea name="" class="form-control" id="" cols="30" rows="3" value="Helmay" id="textareaAutosize" data-pluginn-textarea-autosize></textarea>
							</div>
							
							<div class="modal-text">
								<label class="control-label">Telepon CP<span class="required">*</span></label>
									<input type="number" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Catatan<span class="required">*</span></label>
									<textarea name="" class="form-control" id="" cols="30" rows="3" id="textareaAutosize" data-pluginn-textarea-autosize></textarea>
							</div>
							<div class="modal-text">
								<label class="control-label">Status<span class="required">*</span></label>
								<select class="form-control mb-3" name="" id="">
									<option value="">Aktif</option>
									<option value="">Tidak Aktif</option>
								</select>
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
					<h2 class="card-title">Ubah Data Pemasok</h2>
				</header>
				<div class="card-body">
						<div class="modal-wrapper">
							<div class="modal-text">
								<label class="control-label">Kode Pemasok<span class="required">*</span></label>
								 <input type="text" name="fullname" class="form-control" value="KP-001" placeholder="Nama Asuransi" required/>
							</div>
							<div class="modal-text">
								<label class="control-label">Nama Pemasok<span class="required">*</span></label>
									<input type="text" name="fullname" class="form-control" value="Panadol" placeholder="Nama Asuransi" required/>
							</div>
							
								<div class="modal-text">
									<label class="control-label">Negara<span class="required">*</span></label>
										<select class="form-control mb-3" name="" id="">
											<option value="">Indonesia</option>
											<option value="">Singapore</option>
											<option value="">Malaysia</option>
										</select>
								</div>
								<div class="modal-text">
									<label class="control-label">Provinsi<span class="required">*</span></label>
										<select class="form-control mb-3" name="" id="">
											<option value="">DKI Jakarta</option>
										</select>
								</div>
								<div class="modal-text">
									<label class="control-label">Kota<span class="required">*</span></label>
										<select class="form-control mb-3" name="" id="">
											<option value="">DKI Jakarta</option>
											<option value="">Bekasi</option>
										</select>
								</div>
								<div class="modal-text">
									<label class="control-label">Alamat<span class="required">*</span></label>
										<textarea name="" class="form-control" id="" cols="30" rows="3" id="textareaAutosize" data-pluginn-textarea-autosize>Jalan Cakung timur</textarea>
								</div>
								<div class="modal-text">
									<label class="control-label">Kode Pos<span class="required">*</span></label>
										<input type="number" name="fullname" class="form-control" value="13910" placeholder="Nama Asuransi" required/>
								</div>
								<div class="modal-text">
									<label class="control-label">Email<span class="required">*</span></label>
										<input type="text" name="fullname" class="form-control" value="cahyadihelmay@gmail.com" placeholder="Nama Asuransi" required/>
								</div>
								<div class="modal-text">
									<label class="control-label">Telepon<span class="required">*</span></label>
										<input type="number" name="fullname" class="form-control" value="08324234324234" placeholder="Nama Asuransi" required/>
								</div>
								<div class="modal-text">
									<label class="control-label">Contact Person<span class="required">*</span></label>
										<input type="number" name="fullname" class="form-control" value="Helmay" placeholder="Contact Person" required/>
								</div>
								<div class="modal-text">
									<label class="control-label">Telepon CP<span class="required">*</span></label>
										<input type="number" name="fullname" class="form-control" value="0824234324" placeholder="Nama Asuransi" required/>
								</div>
								<div class="modal-text">
									<label class="control-label">Catatan<span class="required">*</span></label>
									<textarea name="" class="form-control" id="" cols="30" rows="3" id="textareaAutosize" data-pluginn-textarea-autosize></textarea>
								</div>
								<div class="modal-text">
									<label class="control-label">Status<span class="required">*</span></label>
									<select class="form-control mb-3" name="" id="">
										<option value="">Aktif</option>
										<option value="">Tidak Aktif</option>
									</select>
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
