@extends('layout.admin')

@yield('title', 'List Dokter')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Dokter</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Dokter</span></li>
                <li><span>List Dokter</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('tambah_dokter') }}" class="btn btn-success "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">Tambah <i class="fa fa-plus"></i></a>
                            
                        <h4 class="card-title">List Dokter</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Tlp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Tlp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td >1</td>
                                        <td>KD-001</td>
                                        <td>Dr.Agus Setyadi</td>
                                        <td>Poli Umum</td>
                                        <td>081235252</td>
                                        <td>
                                            <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                            <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td >2</td>
                                        <td>KD-002</td>
                                        <td>Drg.Anita</td>
                                        <td>Poli Gigi</td>
                                        <td>241353727</td>
                                        
                                        <td>
                                            <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                            <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td >3</td>
                                        <td>KD-003</td>
                                        <td>Dr.Dilan</td>
                                        <td>Poli Klinik</td>
                                        <td>3535535</td>
                                        <td>
                                            <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
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
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

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