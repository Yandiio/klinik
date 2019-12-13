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
                    <a href="{{url('pasien/tambah-pendaftaran')}}" class="btn btn-primary float-right "
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
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jenis kelamin</th>
                                    <th>Usia</th>
                                    <th>Tempat lahir</th>
                                    <th>Aksi</th>
                                    <th>Daftar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jenis kelamin</th>
                                    <th>Usia</th>
                                    <th>Tempat lahir</th>
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

    <!-- modal tambah -->
    <div class="modal" id="modalTambah">
        <div class="modal-dialog modal-block">
            <div class="modal-content  ">
                <!-- Modal Header -->
                <div class="modal-header card-header">
                    <h2 class="card-title" id="judul">Detail Pasien</h2>
                    <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" id="formTambah">
                    @csrf
                    <div class="modal-body">
                        <ul class="list-unstyled search-results-list">
                            <li>
                                <p class="result-type" id="barcode">
                                    <span class="badge badge-primary">PASIEN</span>
                                </p>
                                <div id="qrcode"></div>

                                <div class="result-data">
                                    <p class="h3 title text-primary" id="nama">Calendar</p>
                                    <p class="description">
                                        <small id="jenisKelamin">Laki2</small>
                                        <br>
                                        <small id="usia">25 Thn</small>
                                        <br>
                                        <small id="tempatLahir">Bekasi, </small> &nbsp<small id="tanggalLahir">25
                                            agustus
                                            1989</small>
                                    </p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kota :</td>
                                                <td id="kota">Dki Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi :</td>
                                                <td id="provinsi">Dki Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td>Kelurahan:</td>
                                                <td id="kelurahan">Dki Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td>Kecamatan :</td>
                                                <td id="kecamatan">Dki Jakarta</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="h4 title" id="alamat">Calendar</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                {{-- <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button> --}}
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
<script src="{{ asset('assets/js/jquery.qrcode.min.js') }}"></script>



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
                    data: 'nikPasien',
                    nama: 'nikPasien'

                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'jenisKelamin',
                    name: 'jenisKelamin'
                },

                {
                    data: 'usia',
                    name: 'usia'
                },
                {
                    data: 'lahir',
                    name: 'lahir'
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);
                        let buttonEdit =
                            ' <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalTambah" id="tambah" style="margin-right:5px" onclick="buttonView(' +
                            row.id + ')"><i class="fa fa-eye"></i></button>';
                        return buttonEdit;
                    }
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);
                        var url = '{{ url("pasien/edit-pendaftaran", "id") }}';
                        url = url.replace('id', row.id);
                        let buttondaftarUlang =
                            '<a class="btn-sm btn-success" title="Pendaftaran ulang !"style="margin-right:5px" href="' +
                            url +
                            '"> <i class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>';
                        return buttondaftarUlang;
                    }
                },


            ]
        });

    });

    function buttonView(idEdit) {

        //console.log(idEdit);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{route('detail_pendaftaran')}}",
            data: {
                id: idEdit
            },
            success: function (data) {
                //console.log(data[0]);

                $('#nama').text(data[0].nama);
                $('#jenisKelamin').text(data[0].jenisKelamin);
                $('#kota').text(data[0].kabupaten);
                $('#kecamatan').text(data[0].kecamatan);
                $('#kelrahan').text(data[0].kelurahan);
                $('#usia').text(data[0].usia);
                $('#alamat').text(data[0].alamat);
                generate_qrcode(data[0].qrcode);
                

            }
        });

    }

    function generate_qrcode(teks) {
        

        $('#qrcode canvas').remove();
        $('#qrcode').qrcode({
            render: 'canvas',
            text: teks,
            width: 100,
	        height: 100
        });
    }
</script>
@stop
