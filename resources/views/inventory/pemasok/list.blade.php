@extends('layout.admin')

@yield('title', 'List Supplayer')

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
                <li><span> List Supplayer </span></li>
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
			
							<h2 class="card-title">List Supplayer</h2>
						</header>
						<div class="card">
							<div class="card-body">
								<button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
									Tambah Supplayer
									<i class="fa fa-plus"></i>
								</button>
								
								<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
								<div class="table-responsive m-t-40">
									<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Supplayer</th>
												<th>Nama Supplayer</th>
												<th>Telepon</th>
												<th>Contact Person</th>
												<th>Telepon CP</th>
												<th>Catatan</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>No</th>
												<th>Kode Supplayer</th>
												<th>Nama Supplayer</th>
												<th>Telepon</th>
												<th>Contact Person</th>
												<th>Telepon CP</th>
												<th>Catatan</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td >1</td>
												<td>KP-001</td>
												<td>Supplayer panadol</td>
												<td>089525863219</td>
												<td>Helmay Cahyadi</td>
												<td>089525863219</td>
												<td>Supplier Baru</td>
												<td>
													<span class="float-center badge badge-primary">Aktif</span>
												</td>
												
												<td>
													<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
													<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>  
											</tr>
												
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Tambah Supplayer</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					
						<div class="modal-text">
							<label class="control-label">Nama Supplayer<span class="required">*</span></label>
								<input type="text" name="fullname" class="form-control" placeholder="Nama Supplayer" required/>
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
					<h2 class="card-title">Ubah Data Supplayer</h2>
				</header>
				<div class="card-body">
						<div class="modal-wrapper">
							
							<div class="modal-text">
								<label class="control-label">Nama Supplayer<span class="required">*</span></label>
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
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

@stop
@section('script')
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
 <!-- This is data table -->
 <script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
 <!-- start - This is for export functionality only -->
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
 <script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
 <!-- end - This is for export functionality only -->
 <script>
 $(function() {
     $('#myTable').DataTable();
     $(function() {
         var table = $('#example').DataTable({
             "columnDefs": [{
                 "visible": false,
                 "targets": 2
             }],
             "order": [
                 [2, 'asc']
             ],
             "displayLength": 25,
             "drawCallback": function(settings) {
                 var api = this.api();
                 var rows = api.rows({
                     page: 'current'
                 }).nodes();
                 var last = null;
                 api.column(2, {
                     page: 'current'
                 }).data().each(function(group, i) {
                     if (last !== group) {
                         $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                         last = group;
                     }
                 });
             }
         });
         // Order by the grouping
         $('#example tbody').on('click', 'tr.group', function() {
             var currentOrder = table.order()[0];
             if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                 table.order([2, 'desc']).draw();
             } else {
                 table.order([2, 'asc']).draw();
             }
         });
     });
 });
 $('#example23').DataTable({
     dom: 'Bfrtip',
     buttons: [
         'copy', 'csv', 'excel', 'pdf', 'print'
     ]
 });
 $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
 </script> 

@stop