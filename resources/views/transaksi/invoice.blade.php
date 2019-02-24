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
    <div class="card-body">
        <div class="invoice">
            <header class="clearfix">
                <div class="row">
                    <div class="col-sm-6 mt-3">
                        <h2 class="h2 mt-0 mb-1 text-dark font-weight-bold">Kwintasi</h2>
                        <h4 class="h4 m-0 text-dark font-weight-bold">#76598345</h4>
                    </div>
                    <div class="col-sm-6 text-right mt-3 mb-3">
                        <address class="ib mr-5">
                            Pratama Bina Husada Bakti
                            <br />
                            Jakarta Cilincing
                            <br />
                            Phone: +12 3 4567-8901
                            <br />
                            Pratama@gmail.com
                        </address>
                        <div class="ib">
                            <img src="img/invoice-logo.png" alt="OKLER Themes" />
                        </div>
                    </div>
                </div>
            </header>
            <div class="bill-info">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bill-to">
                            <p class="h5 mb-1 text-dark font-weight-semibold"></p>
                            <address>
                                Helmay Cahyadi
                                <br />
                                Jlan albarokah Rt004 rw005
                                <br />
                                Phone: +61 3 8376 6284
                                <br />
                                info@envato.com
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bill-data text-right">
                            <p class="mb-0">
                                <span class="text-dark">Transaksi Date :</span>
                                <span class="value">05/20/2017</span>
                            </p>
                            <p class="mb-0">
                                <span class="text-dark">Poli :</span>
                                <span class="value">Umum</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-responsive-md invoice-items">
                <thead>
                    <tr class="text-dark">
                        <th id="cell-id" class="font-weight-semibold" style="width:5%">#</th>
                        <th id="cell-item" class="font-weight-semibold" style="width:15%">Jenis Tindakan</th>
						<th id="cell-item" class="font-weight-semibold" style="width:10%">Obat</th>
                        <th id="cell-desc" class="font-weight-semibold" style="width:5%">Qty</th>
						<th id="cell-desc" class="font-weight-semibold" style="width:7%">satuan</th>
                        <th id="cell-qty" class="text-center font-weight-semibold" style="width:7%">Harga</th>
                        <th id="cell-total" class="text-center font-weight-semibold">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark">Tindakan 1</td>
                        <td></td>
						<td>1</td>
						<td></td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					<tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark">Tindakan 1</td>
                        <td></td>
						<td>1</td>
						<td></td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					<tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark"></td>
                        <td class="font-weight-semibold text-dark">Parasetamol</td>
						<td>1</td>
						<td>Tablet</td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					<tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark"></td>
                        <td class="font-weight-semibold text-dark">Betadine</td>
						<td>1</td>
						<td>Tablet</td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					<tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark"></td>
                        <td class="font-weight-semibold text-dark">Betadine</td>
						<td>1</td>
						<td>Tablet</td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					<tr>
                        <td>*</td>
                        <td class="font-weight-semibold text-dark"></td>
                        <td class="font-weight-semibold text-dark">Betadine</td>
						<td>1</td>
						<td>Tablet</td>
                        <td class="text-center">15000</td>
                        <td class="text-center">200000</td>
                        
                    </tr>
					
                </tbody>
            </table>

            <div class="invoice-summary">
                <div class="row justify-content-end">
                    <div class="col-sm-4">
                        <table class="table h6 text-dark">
                            <tbody>
                                <tr class="b-top-0">
                                    <td colspan="2" style="width:62%">Subtotal</td>
                                    <td class="text-left">320000</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Diskon</td>
                                    <td class="text-left">3000</td>
                                </tr>
                                <tr class="h4">
                                    <td colspan="2">Grand Total</td>
                                    <td class="text-left">830000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mr-4">
            <a href="#" class="btn btn-default">Submit Invoice</a>
            <a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-3"><i class="fas fa-print"></i>
                Print</a>
        </div>
    </div>

    <!-- bagian body -->


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
    @stop
