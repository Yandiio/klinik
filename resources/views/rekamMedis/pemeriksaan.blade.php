@extends('layout.admin')

@yield('title', 'Pemeriksaan')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Pemeriksaan</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Rekam Medis</span></li>
                <li><span>Pemeriksaan</span></li>
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

                    <h2 class="card-title">Pemeriksaan</h2>
                </header>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#modalTambah" id="tambah" style="margin-bottom: 10px">
                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="table-responsive m-t-40">
                            <table id="tableAjaxDiagnosaList"
                                class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>Keluhan</th>
                                        <th>Hasil Diagnosa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>Keluhan</th>
                                        <th>Hasil Diagnosa</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Sulistiono</td>
                                        <td>19</td>
                                        <td>Pusing</td>
                                        <td>Migren</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- bagian body -->
        <!-- bagian body -->
        <!-- modal tambah -->
        <div class="modal" id="modalTambah">
            <div class="modal-dialog modal-lg">
                <div class="modal-content  ">
                    <!-- Modal Header -->
                    <div class="modal-header card-header">
                        <h2 class="card-title" id="judul">Data Pemeriksaan</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formTambah">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="tableAjaxAntrianList"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">No Medis</th>
                                                <th>Nama Pasien</th>
                                                <th>Umur</th>
                                                <th>Tanggal</th>
                                                <th>status</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th width="5%">No Medis</th>
                                                <th>Nama Pasien</th>
                                                <th>Umur</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <!-- <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Sulistiono</td>
                                        <td>19</td>
                                        <td>Pusing</td>
                                        <td>Antri</td>
										<th>
										<button type="button" class="btn-sm btn-primary"  title="" style="margin-right:5px" data-toggle="modal" data-target="#modalUbah" onclick="buttonPeriksa()">Pemeriksaan</button>
										</th>
                                    </tr>
                                </tbody> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <!-- <button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button> -->
                                    <button type="button" class="btn btn-default" data-dismiss="modal"
                                        id="cancel">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal Edit -->
        <div class="modal" id="modalUbah">
            <div class="modal-dialog modal-block">
                <div class="modal-content  ">
                    <!-- Modal Header -->
                    <div class="modal-header card-header">
                        <h2 class="card-title" id="judul">Tambah Pemeriksaan</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formUpdate">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <label class="control-label">No Medis</label>
                                    <input type="text" name="noDaftar" id="noDaftar" class="form-control" placeholder="Kode Diagnosa"
                                          readonly />
                                    <input type="hidden" name="idDaftar" id="idDaftar" class="form-control" placeholder="Kode Diagnosa"
                                           />
                                    <input type="hidden" name="idMedis" id="idMedis" class="form-control" placeholder="Kode Diagnosa"
                                          />
                                </div>
                                <div class="modal-text">
                                    <label class="control-label">Nama Pasien</label>
                                    <input type="text" name="namaPasien" id="namaPasien" class="form-control" placeholder="Nama Diagnosa"
                                          required readonly />
                                </div>
                                <div class="modal-text">
                                    <label class="control-label">Umur </label>
                                    <input type="text" name="umur" class="form-control" id="umur" placeholder="Hasil diagnosa"
                                        readonly />
                                </div>
                                <div class="modal-text">
                                    <label class="control-label">Keluhan </label>
                                    <textarea class="form-control" name="keluhan" rows="3" id="keluhan"
                                         data-plugin-textarea-autosize></textarea>
                                </div>
                                <!-- <div class="modal-text">
                                    <label class="control-label">Status </label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Se</option>
                                    </select>
                                </div> -->
                                <br>

                                <div class="modal-text">
                                    <label class="control-label">Hasil diagnosa <button type="button"
                                            class="mb-1 mt-1 mr-1 btn btn-xs btn-default"
                                            id="add">Tambah</button></label>
                                    <div id="items">
                                        <div class="bb input-group mb-3">
                                            <input type="text" class="form-control" name="hasilDiagnosa[]">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-warning float-right"><i
                                                        class="fa fa-trash"></i></button>
                                            </span>
                                        </div>
                                    </div>
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



</section>
@endsection
@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

@stop
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
    function closeModal() {
        $('#cancelEdit').click();
        $('#cancel').click();
        $('#formTambah').trigger("reset");
    }

    $(document).ready(function () {

        oTableData = $('#tableAjaxDiagnosaList').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('data-list-pemeriksaan')}}",
            columns: [{
                    data: 'noMedis',
                    name: 'noMedis'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'umur',
                    name: 'umur'
                },
                {
                    data: 'keluhan',
                    name: 'keluhan'
                },
                {
                    data: 'diagnosa',
                    name: 'diagnosa'
                },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (row.status === "2") {
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        } 
                    }
                },
                
            ]
        });
    });


    $('#add').on('click', function () {

        $('#items').append(
            '<div class="input-group mb-3"><input type="text" class="form-control" name="hasilDiagnosa[]"><span class="input-group-append"><button type="button" class="bb btn btn-warning float-right"><i class="fa fa-trash"></i></button></span></div>'
        );

    });
    $('#items').on('click', '.btn', function () {
        $(this).closest('.input-group ').remove();

    });

    
    $('#tambah').on('click', function () {

        oTableAntrian = $('#tableAjaxAntrianList').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('data-antrian')}}",
            columns: [{
                    data: 'noMedis',
                    name: 'noMedis'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'umur',
                    name: 'umur'
                },
                {
                    data: 'tanggaldaftar',
                    name: 'tanggaldaftar'
                },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (row.status === "0") {
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
                            return bagess;
                        } else if (row.status === "1") {
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
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

                        let buttonPeriksa =
                            '<button type="button" class="btn-sm btn-info"  title="" style="margin-right:5px" data-toggle="modal" data-target="#modalUbah" onclick="buttonPeriksa('+data+')">Pemeriksaan</button>';

                        return buttonPeriksa;
                    }
                }
            ]
        });
        filterInput();
    })
    function buttonPeriksa(idData) {
        //console.log(idData);
        $('#cancel').click();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{route('detail-antrian-daftar')}}",
            data: {
                id: idData
            },
            success: function (data) {
                
                $('#noDaftar').val(data[0].noDaftar);
                $('#namaPasien').val(data[0].nama);
                $('#keluhan').val(data[0].keluhan);
                $('#umur').val(data[0].umur);
                $('#idDaftar').val(data[0].idPendaftaran);
                $('#idMedis').val(data[0].id);
                
                
            }
        });

    }

    $('#formUpdate').on("submit", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{route('pemeriksaan-update')}}",
            data: $('#formUpdate').serialize(),
            success: function (data) {
                //console.log(data);
                oTableData.ajax.reload();
                closeModal();
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });

               
            }
        });
    });

    function filterInput(){
        $('#tableAjaxAntrianList_filter').css("width", "315");
    }
    

</script>
@stop
