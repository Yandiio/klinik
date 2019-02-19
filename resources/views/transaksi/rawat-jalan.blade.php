@extends('layout.admin')

@yield('title', 'Tambah Pendaftaran')

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
				<section class="card form-wizard" id="w2">
				    <div class="tabs">
						<ul class="nav nav-tabs nav-justify">
							<li class="nav-item active">
								<a href="#w2-account" data-toggle="tab" class="nav-link text-center">
									<span class="badge badge-primary">1</span>
										List transaksi
								</a>
							</li>
							<li class="nav-item">
								<a href="#w2-profile" data-toggle="tab" class="nav-link text-center">
									<span class="badge badge-primary">2</span>
										Data Transaksi
								</a>
							</li>
						</ul>
						<form class="form-horizontal" novalidate="novalidate">
							<div class="tab-content">
								<div id="w2-account" class="tab-pane p-3 active">
                                <div class="card">
                <div class="card-body">
                    <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                        Tambah
                        <i class="fa fa-plus"></i>
                    </button>
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>No Daftar</th>
                                    <th>Pasien</th>
                                    <th>Dokter</th>
                                    <th>Golongan Pasien</th>
                                    <th>Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td >1</td>
                                    <td>Umum</td>
                                    <td>
                                        <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                        <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                </div>
            </div>
        
										
								</div>
                                <!-- kontent tabb 1 -->
							    <div id="w2-profile" class="tab-pane p-3">
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
										
										
								</div>
                                <!-- kontent tab 2 -->
							    <div id="w2-confirm" class="tab-pane p-3">
                               
								</div>
							
							</div>
						</form>
					</div>
				
				</section>
			</div>
        </div>
        
        
</section>
@endsection
@section('css')
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- caresolul -->
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}" />
        <link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

@stop
@section('script')
        <!-- Vendor -->
        <script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('assets/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('assets/vendor/common/common.js')}}"></script>
		<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<!-- <script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script> -->
		<script src="{{asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
		<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script>
		<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>
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
