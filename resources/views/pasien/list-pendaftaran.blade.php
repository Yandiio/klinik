@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

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
					<table class="table table-bordered mb-0" id="dataTable">
						<thead>
						    <tr>
							    <th width="5%">No</th>
                                <th>Tipe</th>
								<th>Nik</th>
                                <th>Nama</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
								<th width="12%">Aksi</th>
                                <th>Daftar</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td>D001</td>
							    <td>Umum</td>
                                <td>23432435622</td>
                                <td>Salahudin</td>
                                <td>[Gigi] Drs.Khoslis Prtama</td>
                                <td>12 Desember 2018</td>
							    <td>
                                    <button type="button" href="" class="btn-sm btn-info"  title="Tampil Data !" style="margin-right:5px"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                   
                                </td>
                                <td>
                                    <button type="button" href="" class="btn-sm btn-success"  title="Pendaftaran ulang !" style="margin-right:5px"><i class="fas fa-plus-square" aria-hidden="true"></i></button>
                                </td>
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>Pribadi</td>
							    <td>
                                <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>Bpjs</td>
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
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Tambah Tipe Pendaftaran</h2>
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
        <!-- modal tambah -->
        <!-- modal Edit -->
        <div id="modalMDEdit" class="modal-block modal-block-lg mfp-hide">
			<section class="card">
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
								</div>
								    <div id="w2-profile" class="tab-pane p-3">
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
									<div id="w2-confirm" class="tab-pane p-3">
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
													<input type="number" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name" >
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
								<a><i class="fas fa-angle-left"></i> Kembali</a>
							</li>
							<li class="finish hidden float-right">
								<a>Selesai</a>
							</li>
							<li class="next">
								<a>Lanjut <i class="fas fa-angle-right"></i></a>
							</li>
						</ul>
					</div>
				</section>
			</div>
        
                </div>
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