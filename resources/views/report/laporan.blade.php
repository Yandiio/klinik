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
                    <form action="" method="POST" id="formTambah">
                    @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Dari Tanggal
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control form-control-sm mb-3" name="dari"
                                    id="w2-first-name">
                            </div>
                            <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Sampai Tanggal
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                            <input type="date" class="form-control form-control-sm mb-3" name="sampai"
                                    id="w2-first-name">
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
                                    

                                </select>
                            </div>
                        </div>
                        <button type="submit" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">

                            Export
                            <i class="fas fa-search"></i>
                        </button>
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
    $(document).ready(function () {
        dataPoli();

        oTableData = $('#tableLaporan').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('list_laporan')}}",
            columns: [{
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nomedis',
                    name: 'nomedis'
                },
                {
                    data: 'asuransi',
                    name: 'asuransi'
                },
                {
                    data: 'namapasien',
                    name: 'namapasien'
                },
                {
                    data: 'jk',
                    name: 'jk'
                },
                {
                    data: 'beratbadan',
                    name: 'beratbadan'
                },
                {
                    data: 'poli',
                    name: 'poli'
                },
                {
                    data: 'hasildiagnosa',
                    name: 'hasildiagnosa'
                },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (row.status === "0") {
                            let bagess = '<div class="badge badge-danger">Menunggu</div>';
                            return bagess;
                        } else if (row.status === "1") {
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
                            return bagess;
                        } else if (row.status === "2") {
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        } else {
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        }
                    }
                },
            ]
        });


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

    $('#formTambah').on('submit', function (e) {
        
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('post_laporan')}}",
            data: $(this).serialize(),
            success: function (response) {

                
            }
        });
    });

</script>
@stop
