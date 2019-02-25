@extends('layout.admin')

@yield('title', 'Diagnosa')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Diagnosa</h2>
    
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
						
						<h2 class="card-title">Diagnosa</h2>
                    </header>
                    <div class="card">
                        <div class="card-body">
                            <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                                    Tambah 
                                <i class="fa fa-plus"></i>
                            </button>
                            
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
											<th width="5%">No</th>
											<th>Nama Diagnosa</th>
											<th>Hasil Diagnosa</th>
											<th>Keterangan</th>
											<th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>No</th>
											<th>Nama Diagnosa</th>
											<th>Hasil Diagnosa</th>
											<th>Keterangan</th>
											<th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
											<tr>
												<td >1</td>
												<td>Demam</td>
												<td>Beayukugan</td>
												<td>blabla</td>
												<td>
													<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
													<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>  
											</tr>
											<tr>
												<td >2</td>
												<td>Pilek</td>
												<td>awakening</td>
												<td>bla bla</td>
												<td>
												<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
													<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>  
											</tr>
											<tr>
												<td >3</td>
												<td>Kutu air</td>
												<td>amaterasu</td>
												<td>ahsdha</td>
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
        <!-- bagian body -->
                <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Diagnosa</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<label class="control-label">Nama diagnosa <span class="required">*</span></label>	
							<input type="text" name="fullname" class="form-control" placeholder="Nama Diagnosa" required/>	    
						</div>
						<br>
						<div class="modal-text">
							<label class="control-label">Hasil Diagnosa <span class="required">*</span></label>	
							<input type="text" name="fullname" class="form-control" placeholder="Hasil diagnosa" required/>
						</div>
						<br>
						<div class="modal-text">
							<label class="control-label">Keterangan <span class="required"></span></label>	
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