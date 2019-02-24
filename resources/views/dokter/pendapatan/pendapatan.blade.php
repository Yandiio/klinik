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
			<div class="col-12">
				<section class="card">
					<header class="card-header">
						<div class="card-actions">
							<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
							<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
						</div>
						
						<h2 class="card-title">List Tipe Pasien</h2>
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
											<th>No</th>
											<th>Dokter</th>
											<th>Tipe Pasien</th>
											<th>Obat</th>
											<th>Duduk</th>
											<th>Tindakan</th>
											<th>Uang makan</th>
											<th>Aksi</th>
											
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Dokter</th>
											<th>Tipe Pasien</th>
											<th>Obat</th>
											<th>Duduk</th>
											<th>Tindakan</th>
											<th>Uang makan</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td >1</td>
											<td>[gigi] Ahmad sofian</td>
											<td>Rawat inap</td>
											<td>10%</td>
											<td>10%</td>
											<td>10%</td>
											<td>Rp.120.000</td>
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
											<td>Rp.120.000</td>
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
											<td>Rp.120.000</td>
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
</section>		
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
                            <label class="control-label">Gaji Pokok <span class="required">*</span></label>
                            <div class="input-group ">
								<div class="input-group">
									<input type="number" class="form-control col-md-2 form-control-sm mb-2" placeholder="">
										
								</div>
                            </div>	
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
							<label class="control-label">Gaji Pokok <span class="required">*</span></label>
							<div class="input-group ">
								<div class="input-group">
									<input type="number" value="10" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										<span class="input-group-append">
											<span class="input-group-text" style="height:25px">
												%
											</span>
										</span>
								</div>
							</div>	
							<label class="control-label">Obat <span class="required">*</span></label>
							<div class="input-group ">
								<div class="input-group">
									<input type="number" value="10" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
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
									<input type="number" value="10" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
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
									<input type="number" value="10" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
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
									<input type="number" value="120000" class="form-control col-md-2 form-control-sm mb-2" placeholder="Persen">
										
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