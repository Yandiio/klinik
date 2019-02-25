@extends('layout.admin')

@yield('title', 'Stock Adjusment')

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
                <li><span> Stock adjustment </span></li>
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

                    <h2 class="card-title">Stock Obat</h2>
                </header>
                <div class="card">
                    <div class="card-body">


                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Supplayer</th>
                                        <th>Kode Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Unit</th>
                                        <th>Qty</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Supplayer</th>
                                        <th>Kode Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Unit</th>
                                        <th>Qty</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>OBT-021</td>
                                        <td>KP-001</td>
                                        <td>Panadol</td>
                                        <td>kapsul</td>
                                        <td>20</td>
                                        <td>
                                            <span class="float-center badge badge-primary">Aktif</span>
                                        </td>

                                        <td>
                                            <button type="button" class="btn-sm btn-warning modal-sizes" title="Ubah Data !"
                                                style="margin-right:5px" href="#modalMDEdit">Tambah</button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>OBT-022</td>
                                        <td>KP-002</td>
                                        <td>Panadol</td>
                                        <td>kapsul</td>
                                        <td>20</td>
                                        <td>
                                            <span class="float-center badge badge-primary">Aktif</span>
                                        </td>

                                        <td>
                                            <button type="button" class="btn-sm btn-warning modal-sizes" title="Ubah Data !"
                                                style="margin-right:5px" href="#modalMDEdit">Tambah</button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>OBT-023</td>
                                        <td>KP-003</td>
                                        <td>Panadol</td>
                                        <td>kapsul</td>
                                        <td>20</td>
                                        <td>
                                            <span class="float-center badge badge-primary">Aktif</span>
                                        </td>

                                        <td>
                                            <button type="button" class="btn-sm btn-warning modal-sizes" title="Ubah Data !"
                                                style="margin-right:5px" href="#modalMDEdit">Tambah</button>

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
   
    <!-- modal Edit -->
    <div id="modalMDEdit" class="modal-block modal-header-color modal-block-success mfp-hide">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Tambah Stok Obat </h2>
            </header>
            <div class="card-body">
                <div class="modal-wrapper">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputCity">Kode Obat</label>
                            <input type="text" class="form-control form-control-sm mb-3" readonly="readonly" value="KB-001" aria-invalid="false" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Nama Obat</label>
                            <input type="text" class="form-control form-control-sm mb-3" readonly="readonly" value="Panadol" aria-invalid="false">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputZip">unit</label>
                            <input type="text" class="form-control form-control-sm mb-3" id="inputCity" readonly="readonly" value="Tablet" aria-invalid="false">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Qty</label>
                            <input type="number" class="form-control form-control-sm mb-3" id="inputCity">
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
    $(function () {
        $('#myTable').DataTable();
        $(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
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
