@extends('layout.admin')

@yield('title', 'List Asuransi')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Asuransi</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Apotik</span></li>
                <li><span> List Asuransi </span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                            Tambah Asuransi
                            <i class="fa fa-plus"></i>
                        </button>
                        <h4 class="card-title">Asuransi</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Asuransi</th>
                                        <th>Nama Asuransi</th>
                                        <th>No Telp Asuransi</th>
                                        <th>Alamat Asuransi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No Asuransi</th>
                                        <th>Nama Asuransi</th>
                                        <th>No Telp Asuransi</th>
                                        <th>Alamat Asuransi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td >1</td>
                                        <td>12312312</td>
                                        <td>Sinarmas MSIG</td>
                                        <td>0234234324234</td>
                                        <td>Jalan Rawa Badung</td>
                                        <td>
                                            <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                            <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td >2</td>
                                        <td>12312312</td>
                                        <td>BPJS</td>
                                        <td>0234234324234</td>
                                        <td>Jalan Cakung Timur</td>
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
            
            </div>
        </div>
       
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Tambah Asuransi</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
                        <div class="modal-text">
                            <label class="control-label">No Asuransi<span class="required">*</span></label>
                                <input type="text" name="fullname" class="form-control" placeholder="Nomor Asuransi" required/>
                        </div>
					    <div class="modal-text">
                            <label class="control-label">Nama Asuransi<span class="required">*</span></label>
							 <input type="text" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
                        </div>
                        
                        <div class="modal-text">
                            <label class="control-label">No Telepon Asuransi<span class="required">*</span></label>
                                <input type="text" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Alamat<span class="required">*</span></label>
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
					<h2 class="card-title">Ubah Asuransi</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
                            <div class="card-body">
                                <div class="modal-wrapper">
                                    <div class="modal-text">
                                        <label class="control-label">No Asuransi<span class="required">*</span></label>
                                            <input type="text" value="12312312	" name="fullname" class="form-control" placeholder="Nomor Asuransi" required/>
                                    </div>
                                    <div class="modal-text">
                                        <label class="control-label">Nama Asuransi<span class="required">*</span></label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
                                    </div>
                                    
                                    <div class="modal-text">
                                        <label class="control-label">No Telepon Asuransi<span class="required">*</span></label>
                                            <input type="text" value="0234234324234" name="fullname" class="form-control" placeholder="Nama Asuransi" required/>
                                    </div>
                                    <div class="modal-text">
                                        <label class="control-label">Alamat<span class="required">*</span></label>
                                        <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize>Jalan Rawa Badung</textarea>
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