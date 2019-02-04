@extends('layout.admin')

@section('title', 'Klinik')
@section('css')
<!-- Specific Page Vendor CSS -->

<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/pnotify/pnotify.custom.css') }}" />
@endsection
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
                <li><span>List Inventory</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <section class="card">
                
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>
        
                <div class="box-header">
                        <a class="modal-with-form btn btn-primary" href="#modalForm">Tambah Obat</a>
                    </div>
            </header>
            <div class="card-body">
                    <!-- Modal Form -->
									<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                                            <section class="card">
                                                <header class="card-header">
                                                    <h2 class="card-title">Tambah Obat</h2>
                                                </header>
                                                <div class="card-body">
                                                    <form class="form-horizontal" method="post" data-toogle="validator">
                                                        @csrf {{ method_field('POST') }}
                                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                                        <input type="hidden" id="id" name="id">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNamaObat">Nama Obat</label>
                                                                <input type="text" name="nama_obat" class="form-control" id="inputNamaObat" placeholder="Nama Obat">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-3 mb-lg-0">
                                                                <label for="jumlahObat">Jumlah Obat</label>
                                                                <input type="number" class="form-control" id="jumlahObat" placeholder="Jumlah Obat">
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                <footer class="card-footer">
                                                    <div class="row">
                                                        <div class="col-md-12 text-right">
                                                            <button type="submit" class="btn btn-primary modal-confirm">Save</button>
                                                            <button type="button" class="btn btn-default modal-dismiss">Cancel</button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </section>
                                        </div>
                    <table class="table table-bordered table-striped" id="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama Obat</th>
                            <th style="text-align:center">Jumlah Obat</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </section>
    <!-- end: page -->
</section>
@endsection

@section('script')
<script src="{{ asset('assets/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/examples/examples.datatables.ajax.js') }}"></script>
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
<script src="{{ asset('assets/vendor/pnotify/pnotify.custom.js') }}"></script>
<script>
     
        var table, save_method;
       
    $(function(){
       table = $('.table').DataTable({
         "processing" : true,
         "serverside" : true,
         "ajax" : {
           "url" : "{{ route('inventory.data') }}",
           "type" : "GET"
         },
         'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false
          }],
          'order': [1, 'asc']
       }); 
       
   
    
      
    });
    
    
    
    
         
        
        </script>
@endsection