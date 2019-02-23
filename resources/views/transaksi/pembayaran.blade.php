@extends('layout.admin')

@yield('title', 'List Apotik')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Apotik</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Apotik</span></li>
                <li><span>List Apotik</span></li>
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

                    <h2 class="card-title">Pembayaran</h2>
                </header>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 control-label text-sm-left pt-1" for="w2-first-name">No Rgistrasi :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control text-sm-left form-control-sm mb-3" name="first-name"
                                value="00001" readonly="readonly" id="w2-first-name">
                        </div>
                        <label class="col-sm-3 control-label text-sm-right pt-1" for="w2-last-name">Atas
                            Nama :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name"
                                value="Sofiyan" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label text-sm-left pt-1" for="w2-first-name">Golongan :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control text-sm-left form-control-sm mb-3" name="first-name"
                                id="w2-first-name" value="Pribadi" readonly="readonly">
                        </div>
                        <label class="col-sm-3 control-label text-sm-right pt-1" for="w2-last-name">Poli
                            Asal :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm mb-3" name="first-name" id="w2-first-name"
                                value="Umum" readonly="readonly">
                        </div>
                    </div>
                    <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>
                                    Pendahtaran
                                    
                                </th>
                                <th style="width:12%">Harga</th>
                                <th style="width:5%"></th>
                                <th style="width:12%">Total</th>
                                <th style="width:10%">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Daftar</td>
                                <td><input type="text" placeholder="0000"></td>
                                <td></td>
                                <td>40000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>
                                    Tindakan
                                    <small>
                                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Tambah Tindakan !">Tambah</button>
                                        <small>
                                </th>
                                <th style="width:12%">Harga</th>
                                <th style="width:5%">qty</th>
                                <th style="width:12%">Total</th>
                                <th style="width:10%">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tindakan 1</td>
                                <td>5000</td>
                                <td>2</td>
                                <td>40000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tindakan 2</td>
                                <td>5000</td>
                                <td>2</td>
                                <td>40000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>
                                    Laboratorium
                                    <small>
                                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Tambah Tindakan !">Tambah</button>
                                        <small>
                                </th>
                                <th style="width:12%">Harga</th>
                                <th style="width:5%">qty</th>
                                <th style="width:12%">Total</th>
                                <th style="width:10%">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>LAB 1</td>
                                <td>5000</td>
                                <td>2</td>
                                <td>40000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>LAB 2</td>
                                <td>5000</td>
                                <td>2</td>
                                <td>40000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>
                                    Produk/Obat
                                    <small>
                                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Tambah Tindakan !">Tambah</button>
                                        <small>
                                </th>
                                <th>Satuan</th>
                                <th style="width:12%">Harga</th>
                                <th style="width:5%">qty</th>
                                <th style="width:12%">Total</th>
                                <th style="width:10%">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Amoxsilin</td>
                                <td>tablet</td>
                                <td>40000</td>
                                <td>2</td>
                                <td>80000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Amoxsilin</td>
                                <td>tablet</td>
                                <td>40000</td>
                                <td>2</td>
                                <td>80000</td>
                                <td>
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" title="Hapus Tindakan !">Hapus</button></td>
                            </tr>

                        </tbody>
                    </table>
                    
                    
                    <div class="row justify-content-end">
                        <div class="col-sm-6">
                            <table class="table h6 text-dark">
                                <tbody>
                                    <tr>
                                        <td>Total Pembayaran</td>
                                        <td>
                                            <input type="number" class="form-control text-sm-left form-control-sm mb-3"
                                                name="first-name" value="100" readonly="readonly" id="total">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Uang Pembayaran</td>
                                        <td>
                                            <input type="Number" class="form-control text-sm-left form-control-sm mb-3"
                                                name="first-name" id="bayar">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kembali</td>
                                        <td>
                                            <input type="number" class="form-control text-sm-left form-control-sm mb-3"
                                                name="first-name" id="kembali">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-right mr-4">
            
            <a href="{{route('invoice')}}" target="_blank" class="btn btn-danger ml-3"><i class="fas fa-print"></i>
                Bayar</a>
        </div>
                </div>
            </section>
        </div>
        <!-- bagian body -->

        @endsection
        @section('css')
        <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

        @stop
        @section('script')
        <script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>

        <script>
    $(document).ready(function(){
        
        

        
        
        $("#bayar").change(function(){
          // var diskon = $("#diskon").val() / 100;
          var total = $("#total").val();
          var bayar = $("#bayar").val();
          var kembali =  bayar - total;
          
          $("#kembali").val(kembali);
          
        });
     

    });
  
  </script>


        @stop
