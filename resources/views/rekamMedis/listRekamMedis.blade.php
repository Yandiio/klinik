@extends('layout.admin')

@yield('title', 'List Tindakan')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Dokter</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Dokter</span></li>
                <li><span>List Tindakan</span></li>
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
						
						<h2 class="card-title">List Tindakan</h2>
                    </header>
                    
                    <div class="card">
                        <div class="card-body">
                            
                            
                            <div class="table-responsive m-t-40">
                                <table id="listRekamMedis" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Daftar</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pasien</th>
                                            <th>Usia</th>
                                            <th>Poli</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>No Daftar</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pasien</th>
                                            <th>Usia</th>
                                            <th>Poli</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <!-- <tbody>
                                        <tr style="text-align:center">
                                            <td >1</td>
                                            <td>RM-001</td>
                                            <td>01 Februari 2019</td>
                                            <td>Helmay</td>
                                            <td>Dr.Agus Setyadi</td>
                                            <td>Poli Umum</td>
                                            
                                            <td>
                                                <span class="badge badge-danger">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{url('rekam-medis/detail-rekam-medis')}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn-sm btn-warning" title="Buat Tindakan!" style="margin-right:5px" href="{{url('rekam-medis/tambah-rekam-medis')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>
                                            </td>  
                                        </tr>
                                        <tr style="text-align:center">
                                            <td >2</td>
                                            <td>RM-001</td>
                                            <td>20 Januari 2019</td>
                                            <td>Anto</td>
                                            <td>Drg.Anita</td>
                                            <td>Poli Gigi</td>
                                            
                                            <td>
                                                <span class="badge badge-danger">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{url('rekam-medis/detail-rekam-medis')}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn-sm btn-warning" title="Buat Tindakan!" style="margin-right:5px" href="{{url('rekam-medis/tambah-rekam-medis')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td style="text-align:center">3</td>
                                            <td style="text-align:center">19 Januari 2019</td>
                                            <td>RM-001</td>
                                            <td style="text-align:center">Milea</td>
                                            <td style="text-align:center">Dr.Dilan</td>
                                            <td style="text-align:center">Poli Klinik</td>
                                            
                                            <td style="text-align:center">
                                                <span class="badge badge-success">Complete</span>
                                            </td>
                                            <td>
                                            <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{url('rekam-medis/detail-rekam-medis')}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn-sm btn-warning" title="Buat Tindakan!" style="margin-right:5px" href="{{url('rekam-medis/tambah-rekam-medis')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>
                                                
                                            </td>  
                                        </tr>
                                                    
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
			</section>
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
    var oTable;

    $(document).ready(function () {

        oTable = $('#listRekamMedis').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('list_rekam_medis')}}",
            columns: [

                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'noDaftar',
                    nama: 'noDaftar'

                },
                {
                    data: 'tanggalDaftar',
                    name: 'tanggalDaftar'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'usia',
                    name: 'usia'
                },
                {
                    data: 'poli',
                    name: 'poli'
                },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (row.status === "0") {
                            let bagess = '<div class="badge badge-warning">Pending</div>';
                            return bagess;
                        } else if (row.status === "1") {
                            let bagess = '<div class="badge badge-primary">sucess</div>';
                            return bagess;
                        } else {
                            let bagess = '<div class="badge badge-success">NO</div>';
                            return bagess;
                        }
                    }
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);
                        var url = '{{ url("rekam-medis/edit-rekam-medis", "id") }}';
                        url = url.replace('id', row.id);
                        let buttonMedis =
                            ' <a class="btn-sm btn-primary" title="Buat Tindakan!" style="margin-right:5px" href="'+url+'"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>';
                        let buttonView =
                            ' <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalTambah" id="tambah" style="margin-right:5px" onclick="buttonView(' +
                            row.id + ')"><i class="fa fa-eye"></i></button>';
                        
                        return  buttonView + buttonMedis  ;
                    }
                },


            ]
        });

    });

    function buttonView(idEdit) {


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
                console.log(data[0]);

                $('#nama').text(data[0].nama);
                $('#jenisKelamin').text(data[0].jenisKelamin);
                $('#kota').text(data[0].kabupaten);
                $('#kecamatan').text(data[0].kecamatan);
                $('#kelrahan').text(data[0].kelurahan);
                $('#usia').text(data[0].usia);
                $('#alamat').text(data[0].alamat);
            }
        });

    }

</script>

@stop