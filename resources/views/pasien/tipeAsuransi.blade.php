@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@stop
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
                <li><span> Tipe Asuransi </span></li>
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

                    <h2 class="card-title">List Tipe Poli</h2>
                </header>
                <div class="card">
                    <div class="card-body">
                        <button type="button" href="#modalMD" class="btn btn-success modal-sizes float-right"
                            style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="table-responsive">
                            <table id="tableTipeAsuransi" class="table table-hover table-striped table-bordered"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Tipe Asuransi</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tipe Asuransi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <!-- <tbody>
										<tr>
											<td >1</td>
											<td>Poli Kebidanan dan Penyakit Kandungan</td>
											<td>
												<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
												<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</td>  
										</tr>
										<tr>
											<td >2</td>
											<td>Poli Anak</td>
											<td>
												<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
												<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</td>  
										</tr>
										<tr>
											<td >3</td>
											<td>Poli Gigi dan Mulut</td>
											
											<td>
												<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
												<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Tambah Tipe Poli</h2>
                </header>
                <div class="card-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <label class="control-label">Tipe Poli<span class="required">*</span></label>
                            <input type="text" name="fullname" class="form-control" placeholder="Tipe Poli" required />
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-default modal-dismiss">Batal</button>
                            <button type="submit" class="btn btn-success modal-confirm">Simpan</button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
        <!-- modal tambah -->
        <!-- modal Edit -->
        <div id="modalMDEdit" class="modal-block modal-header-color modal-block-success mfp-hide">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Ubah Tipe Poli</h2>
                </header>
                <div class="card-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <label class="control-label">Tipe Poli <span class="required">*</span></label>

                            <input type="text" name="fullname" value="	Poli Kebidanan dan Penyakit Kandungan"
                                class="form-control" placeholder="Tipe Poli" required />

                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-default modal-dismiss">Batal</button>
                            <button type="submit" class="btn btn-success modal-confirm">Simpan</button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
        <!-- modal Edit-->
</section>
@endsection
@section('script')

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


</script>


<script>
    $(document).ready(function () {
        oTable = $('#tableTipeAsuransi').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('list_tipe_asuransi')}}",
            columns: [

                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);
                        let buttonEdit =
                            '<button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>';
                        let buttonHapus =
                            '<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>';

                        // let buttonEdit = '<button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#showModalUpdate" style="margin-right:5px;" onclick="buttonEdit(\''+data+'\');">Update</button>';
                        // let buttonHapus = '<button type="button" class="btn-sm btn-danger" onclick="buttonDelete(\''+data+'\');" >Delete</button>';
                        return buttonEdit + buttonHapus;
                    }
                }
            ]
        });

    });

</script>
@stop
