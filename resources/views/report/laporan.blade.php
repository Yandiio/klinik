@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />
@stop
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Laporan</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Laporan</span></li>
                <li><span> Laporan Klinik</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- header atas -->

    <div class="row">
        <div class="col-md-12">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">List Laporan</h2>
                </header>
                <div class="card">
                    <div class="card-body">
                    <form action="" method="POST" id="formNew">
                    @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Dari Tanggal
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control form-control-sm mb-3" name="from" id="ifrom">
                            </div>
                            <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Sampai Tanggal
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control form-control-sm mb-3" name="to" id="ito">
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">No
                                Rekam medis <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                    id="w2-first-name" readonly="readonly" value="Auto">
                            </div> -->
                            <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Poli
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <select name="poli" id="poli" class="form-control form-control-sm mb-3">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="mb-1 mt-1 mr-1 btn btn-sm btn-light" style="float:right;">
                                    Reset
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button type="submit" id="find" class="mb-1 mt-1 mr-1 btn btn-sm btn-primary" style="float:right;">
                                    Export
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table id="tableLaporan" class="table table-hover table-striped table-bordered"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>No Medis</th>
                                        <th>Asuransi</th>
                                        <th>Nama pasien</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Berat Badan</th>
                                        <th>Nama Poli</th>
                                        <th>Hasil Diagnosa</th>
                                        <th>Status</th>
                                        <!-- <th width="15%">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th width="10%">No</th>
                                    <th>No Medis</th>
                                    <th>Asuransi</th>
                                    <th>Nama pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Berat Badan</th>
                                    <th>Nama Poli</th>
                                    <th>Hasil Diagnosa</th>
                                    <th>Status</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div> 
    </div>
</section>
@endsection
@section('script')

<!-- This is data table -->
<script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
<!-- start - This is for export functionality only -->
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('assets/js/examples/examples.notifications.js')}}"></script>
<script src="{{asset('assets/bootbox/bootbox.all.min.js')}}"></script>


<!-- end - This is for export functionality only -->
<script>

var oTableListReport;

    $(document).ready(function () {
        dataPoli();

    });

    function dataPoli() {
    $.ajax({
        type: "GET",
        url: "{{route('tipePoli_getData')}}",
        //    data: {
        //        'id': id
        //    },
        success: function (data) {
            $.each(data, function (index, value) {
                $('#poli').append('<option id=' + value.id + ' value=' + value
                    .id +
                    '>' + value.nama + '</option>')
                });
            }
        });
    }

    $("#find").click(function(){
        var poli = $('#poli').val();
        var from = $('#ifrom').val();
        var to = $('#ito').val();
        console.log(poli, from, to);
        

        oTableReport = $('#tableLaporan').DataTable({
            responsive: true,
            processing: true,
            destroy: true,
            serverSide: true,
            ajax: "{{ route('Laporan_getList')}}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nomedis', name: 'nomedis' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' },
                { data: 'id', name: 'id' }
            ]
        });
    });

</script>
@stop
