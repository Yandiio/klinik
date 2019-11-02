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
                        <div class="form-group row">
                            <!-- <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">No
                                        Rekam medis <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" readonly="readonly" value="Auto">
                                    </div> -->
                            <label class="col-sm-2 control-label text-sm-left pt-1" for="w2-last-name">Nama Poli
                                <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <select name="poli" id="poli" class="form-control form-control-sm mb-3">
                                    <option value="">Pilih Poli</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary" style="margin-bottom: 10px">

                            Cari
                            <i class="fas fa-search"></i>
                        </button>
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
        <!-- bagian body -->
        <!-- modal tambah -->
        <div class="modal" id="modalTambah">
            <div class="modal-dialog modal-block">
                <div class="modal-content  ">
                    <!-- Modal Header -->
                    <div class="modal-header card-header">
                        <h2 class="card-title" id="judul">Tambah Asuransi</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formTambah">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <label class="control-label">Tipe Asuransi<span class="required">*</span></label>
                                    <input id="name" type="text" name="name" class="form-control"
                                        placeholder="Tipe Asuransi" required />
                                    <input id="id" type="hidden" name="id" class="form-control"
                                        placeholder="Tipe Asuransi" required />
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"
                                        id="cancel">Kembali</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal tambah -->
        <!-- modal edit -->
        <div class="modal" id="myModalEdit">
            <div class="modal-dialog modal-block">
                <div class="modal-content  ">
                    <!-- Modal Header -->
                    <div class="modal-header card-header">
                        <h2 class="card-title" id="judul">Ubah Tipe Asuransi</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formUpdate">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <label class="control-label">Tipe Asuransi<span class="required">*</span></label>
                                    <input id="editName" type="text" name="name" class="form-control"
                                        placeholder="Tipe Asuransi" required />
                                    <input id="editId" type="hidden" name="id" class="form-control"
                                        placeholder="Tipe Asuransi" required />
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"
                                        id="cancelEdit">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
            columns: [
                {
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
                        }else if(row.status === "1"){
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
                            return bagess;
                        }else if(row.status === "2"){
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        }else{
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

</script>
@stop
