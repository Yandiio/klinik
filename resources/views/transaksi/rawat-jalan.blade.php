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
                                List Tagihan
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

                                        <h4 class="card-title">Data Export</h4>
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        <div class="table-responsive m-t-40">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th><small>*</small></th>
                                                        <th><small>Pasien</small></th>
                                                        <th><small>Pasien</small></th>
                                                        <th><small>Tipe Asuransi</small></th>
                                                        <th><small>No Kwitansi</small></th>
                                                        <th><small>Tagihan</small></th>
                                                        <th><small>Diskon</small></th>
                                                        <th><small>Total Bayar</small></th>
                                                        <th><small>Aksi</small></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><small>1</small></td>
                                                        <td><small>
                                                                No Daftar : BBH-10298 , <br>
                                                                tgl Regist : 19-02-2019 21:30
                                                            </small>
                                                        </td>
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198 <br>
                                                                Tgl lahir : 19-04-1098
                                                            </small>
                                                        </td>
                                                        <td><small>Bpjs</small></td>
                                                        <td><small>NK213 : 19-02-2018</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>345929278</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('pembayaran')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-warning"
                                                                    title="" style="margin-right:5px"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i> Bayar</a>
                                                            </small>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><small>1</small></td>
                                                        <td><small>
                                                                No Daftar : BBH-10298 , <br>
                                                                tgl Regist : 19-02-2019 21:30
                                                            </small>
                                                        </td>
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198 <br>
                                                                Tgl lahir : 19-04-1098
                                                            </small>
                                                        </td>
                                                        <td><small>Bpjs</small></td>
                                                        <td><small>NK213 : 19-02-2018</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>345929278</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('pembayaran')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-warning"
                                                                    title="" style="margin-right:5px"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i> Bayar</a>
                                                            </small>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><small>1</small></td>
                                                        <td><small>
                                                                No Daftar : BBH-10298 , <br>
                                                                tgl Regist : 19-02-2019 21:30
                                                            </small>
                                                        </td>
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198 <br>
                                                                Tgl lahir : 19-04-1098
                                                            </small>
                                                        </td>
                                                        <td><small>Bpjs</small></td>
                                                        <td><small>NK213 : 19-02-2018</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>345929278</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('pembayaran')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-warning"
                                                                    title="" style="margin-right:5px"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i> Bayar</a>
                                                            </small>
                                                            
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
                            <h4 class="card-title">Data Export</h4>
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        <div class="table-responsive m-t-40">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th><small>*</small></th>
                                                        <th><small>Tanggal/Kuitansi</small></th>
                                                        <th><small>Pasien</small></th>
                                                        <th><small>Golongan Pasien</small></th>
                                                        <th><small>Total</small></th>
                                                        <th><small>Diskon</small></th>
                                                        <th><small>Tunai</small></th>
                                                        <th><small>Petugas</small></th>
                                                        <th><small>Aksi</small></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><small>1</small></td>
                                                        <td><small>
                                                                19-02-2019 21:30
                                                                 <br>
                                                                No kwn : BHB-20199
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>Pribadi</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>5000</small></td>
                                                        <td><small>kasir</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('invoice')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-info"
                                                                    title="" style="margin-right:5px">invoice</a>
                                                            </small>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><small>2</small></td>
                                                        <td><small>
                                                                19-02-2019 21:30
                                                                 <br>
                                                                No kwn : BHB-20199
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>Pribadi</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>5000</small></td>
                                                        <td><small>kasir</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('invoice')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-info"
                                                                    title="" style="margin-right:5px">invoice</a>
                                                            </small>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><small>3</small></td>
                                                        <td><small>
                                                                19-02-2019 21:30
                                                                 <br>
                                                                No kwn : BHB-20199
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>
                                                                Helmay Cahyadi <br>
                                                                No RKM : BHB-20198
                                                            </small>
                                                        </td>
                                                        
                                                        <td><small>Pribadi</small></td>
                                                        <td><small>2.590000</small></td>
                                                        <td><small>2500</small></td>
                                                        <td><small>5000</small></td>
                                                        <td><small>kasir</small></td>
                                                        <td>
                                                            <small>
                                                            <a href="{{route('invoice')}}" class="mb-1 mt-1 mr-1 btn btn-xs btn-info"
                                                                    title="" style="margin-right:5px">invoice</a>
                                                            </small>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                   
                                                </tbody>
                                            </table>
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
