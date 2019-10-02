@extends('layout.admin')

@yield('title', 'List Pendaftaran')

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
                <li><span>List Pendaftaran</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- header atas -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Pendaftaran</h4>
                    <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                    <a href="{{url('pasien/tambah-pendaftaran')}}" class="btn btn-success float-right "
                        style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">Daftar <i
                            class="fa fa-plus"></i></a>
                    <br>
                    <div class="table-responsive m-t-40">
                        <table id="listPendaftaran"
                            class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Asuransi</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Poli</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                    <th>Daftar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Dokter</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                    <th>Daftar</th>
                                </tr>
                            </tfoot>
                            <!-- <tbody>
                                <tr>
                                    <td>D001</td>
                                    <td>BPJS</td>
                                    <td>23432435622</td>
                                    <td>Salahudin</td>
                                    <td>[Gigi] Drs.Khoslis Prtama</td>
                                    <td>12-12-2018</td>
                                    <td>
                                        <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px"
                                            href="{{ url('pasien/edit-pendaftaran') }}"> <i class="fa fa-edit"
                                                aria-hidden="true"></i> </a>
                                    </td>
                                    <td>
                                        <a class="btn-sm btn-success" title="Pendaftaran ulang !"
                                            style="margin-right:5px" href="{{ url('pasien/edit-pendaftaran') }}"> <i
                                                class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>D002</td>
                                    <td>Umum</td>
                                    <td>23432435622</td>
                                    <td>Salahudin</td>
                                    <td>[Gigi] Drs.Khoslis Prtama</td>
                                    <td>12-08-2018</td>
                                    <td>
                                        <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px"
                                            href="{{ url('pasien/edit-pendaftaran') }}"> <i class="fa fa-edit"
                                                aria-hidden="true"></i> </a>
                                    </td>
                                    <td>
                                        <a class="btn-sm btn-success" title="Pendaftaran ulang !"
                                            style="margin-right:5px" href="{{ url('pasien/edit-pendaftaran') }}"> <i
                                                class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>D003</td>
                                    <td>Pribadi</td>
                                    <td>23432435622</td>
                                    <td>Salahudin</td>
                                    <td>[Gigi] Drs.Khoslis Prtama</td>
                                    <td>12-12-2018</td>
                                    <td>
                                        <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px"
                                            href="{{ url('pasien/edit-pendaftaran') }}"> <i class="fa fa-edit"
                                                aria-hidden="true"></i> </a>
                                    </td>
                                    <td>
                                        <a class="btn-sm btn-success" title="Pendaftaran ulang !"
                                            style="margin-right:5px" href="{{ url('pasien/edit-pendaftaran') }}"> <i
                                                class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                    </td>
                                </tr>
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

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


<script>
	var oTable;

    $(document).ready(function () {
        
        oTable = $('#listPendaftaran').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('list_pendaftaran')}}",
            columns: [

                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'asuransi',
                    nama: 'asuransi'
                    
                },
                {
                    data: 'nikPasien',
                    name: 'nikPasien'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'poli',
                    name: 'poli'
                },
                {
                    data: 'tanggalDaftar',
                    name: 'tanggalDaftar'
                },
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'id',
                    name: 'id'
                },
               
            ]
        });

    });

</script>

@stop
