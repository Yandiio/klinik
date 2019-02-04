@extends('layout.admin')

@yield('title', 'Klinik')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/pnotify/pnotify.custom.css') }}" />
@stop
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Laboratorium</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Laboratorium</span></li>
                <li><span>List Tindakan</span></li>
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
        
                <h2 class="card-title">List Tindakan Laboratorium</h2>
            </header>
            <div class="card-body">
                    <div class="card-header">
                    <a class="btn btn-info" href="{{ route('tambah_lab') }}">Tambah Tindakan Laboratorium</a>
                    </div>
            <table class="table table-bordered table-striped" id="datatable-ajax" data-url="{{ asset('assets/ajax/lab.json') }}">
                    <thead>
                        <tr>
                            <th width="20%">Cabang</th>
                            <th width="25%">Nama Tindakan</th>
                            <th width="25%">Nilai Normal</th>
                            <th width="15%">Biaya</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
@stop