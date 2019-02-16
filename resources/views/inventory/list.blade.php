@extends('layout.admin')

@yield('title', 'List Apotik')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Inventory</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Inventory</span></li>
                <li><span>List Inventory</span></li>
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
						
						<h2 class="card-title">List Inventory</h2>
					</header>
					<div class="card-body">
                        <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                            Tambah Inventory Stock
                            <i class="fa fa-plus"></i>
                        </button>
                        <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
						<thead>
						    <tr>
							    <th width="5%">No</th>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Unit</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Tanggal Expired</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
                                <td >1</td>
                                <td>IO-001</td>
                                <td>Panadol</td>
                                <td>1</td>
                                <td>10.000</td>
                                <td>15.0000</td>
                                <td>1 Janurai 2019</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>IO-002</td>
                                <td>Betadine</td>
                                <td>1</td>
                                <td>10.000</td>
                                <td>15.0000</td>
                                <td>30 Maret 2019</td>
                                
							    <td>
                                    <button type="button" href="" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>IO-003</td>
                                <td>mixagrip</td>
                                <td>1</td>
                                <td>10.000</td>
                                <td>15.0000</td>
                                <td>20 Oktober 2019</td>
							    <td>
                                    <button type="button" href="" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px"><i class="fa fa-edit" aria-hidden="true"></i></button>
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
					<h2 class="card-title">Tambah Inventory Stock</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama Obat <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Nama Obat" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Unit <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Unit" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Harga Jual <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Harga Jual" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Harga Beli<span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Harga Beli" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Tanggal Expired<span class="required">*</span></label>	
                            <input type="text" data-plugin-datepicker class="form-control mb-3" placeholder="01/01/2019">
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
					<h2 class="card-title">Ubah Inventory Stock</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Nama Obat <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Nama Obat" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Unit <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Unit" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Harga Jual <span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Harga Jual" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Harga Beli<span class="required">*</span></label>	
							 <input type="text" name="fullname" class="form-control" placeholder="Harga Beli" required/>  
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Tanggal Expired<span class="required">*</span></label>	
                            <input type="text" data-plugin-datepicker class="form-control mb-3" placeholder="01/01/2019">
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