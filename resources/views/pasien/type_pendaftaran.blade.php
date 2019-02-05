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
                    <a class="mb-1 mt-1 mr-1 modal-sizes btn btn-default" href="#modalMD">Medium</a>
                        <button type="button" class="btn btn-success"  style="margin-bottom: 10px" title="Tambah Tipe Pendaftaran !">
                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
					<table class="table table-bordered mb-0" id="dataTable">
						<thead>
						    <tr>
							    <th width="5%">No</th>
								<th>Tipe Pendaftaran</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td >1</td>
							    <td>Umum</td>
							    <td>
                                    <button type="button" href="" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>Pribadi</td>
							    <td>
                                    <button type="button" href="" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>Bpjs</td>
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
        <div id="modalMD" class="modal-block modal-block-md mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Are you sure?</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
							<p class="mb-0">Are you sure that you want to delete this image?</p>
						</div>
					</div>
				    </div>
						<footer class="card-footer">
							<div class="row">
								<div class="col-md-12 text-right">
									<button class="btn btn-primary modal-confirm">Confirm</button>
									<button class="btn btn-default modal-dismiss">Cancel</button>
								</div>
							</div>
						</footer>
			</section>
		</div>
        <!-- modal tambah -->
</section>
@endsection
@section('css')
  
@stop
@section('script')
   <script src="js/examples/examples.modals.js"></script>

@stop