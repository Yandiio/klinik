@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@stop
@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Setting</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Setting</span></li>
                <li><span>Role</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <button type="button"  href="#modalMD" class="btn btn-success modal-sizes float-right "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                        Tambah
                        <i class="fa fa-plus"></i>
                    </button> -->
                    <h4 class="card-title">List Role</h4>
                    <br>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Role</th>
                                    <th>Keterangan</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Role</th>
                                    <th>Keterangan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td >1</td>
                                    <td>Petugas Locket</td>
                                    <td>Modul Pendaftaran</td>
                                </tr>
                                <tr>
                                    <td >2</td>
                                    <td>Administratif</td>
                                    <td>Modul Rekam Medis dan dokter</td>
                                </tr>
                                <tr>
                                    <td >3</td>
                                    <td>Kepala Klinik</td>
                                    <td>Laporan dan dashboard</td>
                                </tr>
                                <tr>
                                    <td >4</td>
                                    <td>Dokter</td>
                                    <td>Hasil Diagnosa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
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
        <div id="modalMDEdit" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Ubah Tipe Pendaftaran</h2>
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
        <!-- modal Edit-->
@endsection
@section('script')
 
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
    <script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function(){
        oTable = $('#example23').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('list_role')}}",
            columns: [

                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'name_role',
                    name: 'name_role'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
                },
                
            ]
        });
    });
    </script>
@stop