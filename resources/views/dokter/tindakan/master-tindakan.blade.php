@extends('layout.admin')

@yield('title', 'Master Tindakan')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Mater Tindakan</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Tindakan</span></li>
                <li><span>Master Tindakan</span></li>
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
						
						<h2 class="card-title">Tipe Pasien</h2>
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
								<th>Nama Master Tindakan</th>
                                <th>Harga</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td >1</td>
							    <td>Tindakan 1</td>
                                <td>Rp. 1000000</td>
							    <td>
                                    <button type="button" href="" class="btn-sm btn-info"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>Tindakan 2</td>
                                <td>Rp. 1000000</td>
							    <td>
                                <button type="button" href="" class="btn-sm btn-info"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>Tindakan 3</td>
                                <td>Rp. 1000000</td>
							    <td>
                                <button type="button" href="" class="btn-sm btn-info"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>Dll</td>
                                <td>Rp. 1000000</td>
							    <td>
                                <button type="button" href="" class="btn-sm btn-info"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-eye" aria-hidden="true"></i></button>
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
					<h2 class="card-title">Tambah Master Tindakan</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama Master Tindakan <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Tipe Pendaftaran" required/>	    
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Harga <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Tipe Pendaftaran" required/>	    
						</div>
                        <br>
                        <div class="modal-text">
                            <label class="control-label">Tambah Item <span class="required">*</span></label>
							<div class="form-group">
								<form action="#" name="add_name" id="add_name">
									<table class="" id="dynamic_field">
										<tr>
											<td>
                                                <a href="#" id="addItem" class="btn btn-default" >+</a>
												
											</td>
											<td width="50%">
												<input type="Text" class="form-control" placeholder="Nama Item" id="name">
											</td>
											<td width="50%">
												<input type="Text" class="form-control" placeholder="Keterangan" id="name">
											</td>
											<td>
                                                <a href="#" id="add" class="btn btn-danger">x</a>
											</td>
										</tr>
									</table>
									
								</form>
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
					<h2 class="card-title">Ubah Tipe Pasien</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Tipe Pasien <span class="required">*</span></label>
								
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
        <!-- modal Edit aja-->
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

@stop
@section('script')
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
<script>
			$(document).ready(function(){
				var i = 1;
				$(this).on('click','#addItem',function(){
					i++;
					
					$('#dynamic_field').append('<tr id="row'+i+'"><td><a href="#" id="addItem" class="btn btn-default" >+</a></td><td width="50%"><input type="Text" class="form-control" placeholder="Nama Item" id="name"></td><td width="50%"><input type="Text" class="form-control" placeholder="Keterangan" id="name"></td><td><a href="#" id="'+i+'" class="btn btn-danger btn-remove">x</a></td></tr>');
				});	
				$(document).on('click','.btn-remove',function(){
					var button_id = $(this).attr("id");
					$('#row'+button_id+'').remove();

				});

			});
		
		</script>
  

@stop