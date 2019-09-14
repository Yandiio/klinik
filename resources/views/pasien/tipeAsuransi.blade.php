@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />
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

                    <h2 class="card-title">List Tipe Asuransi</h2>
                </header>
                <div class="card">
                    <div class="card-body">
                        <button type="button" href="#modalTambah" class="btn btn-success modal-sizes float-right"
                            style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !" id="modalForm">
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
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalTambah" class="modal-block modal-header-color modal-block-success mfp-hide">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title" id="judul">Tambah Tipe Asuransi</h2>
                </header>
                <form action="" id="formTambah" method="POST">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                    @csrf
                <div class="card-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <label class="control-label">Tipe Asuransi<span class="required">*</span></label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Tipe Asuransi" required />
                            <input id="id" type="hidden" name="id" class="form-control" placeholder="Tipe Asuransi" required />
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button id="closeModal" class="btn btn-default modal-dismiss">Batal</button>
                            <button type="submit" class="btn btn-success" id="simpan">Simpan</button>
                            <button type="submit" class="btn btn-success" id="ubah">Ubah</button>
                        </div>
                    </div>
                </footer>
                </form>
            </section>
        </div>
        <!-- modal tambah -->
        <!-- modal Edit -->
       
    </div>

        
        <!-- modal Edit-->
</section>
@endsection
@section('script')

<!-- This is data table -->
<script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
<!-- start - This is for export functionality only -->
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('assets/js/examples/examples.notifications.js')}}"></script>


<!-- end - This is for export functionality only -->

<script>


</script>


<script>

    var  oTable;
    $('#ubah').hide();
    function closeModal(){
        $('#closeModal').click();
        $('#formTambah').trigger("reset");
    }
    function editTombol(){
        $('#ubah').show();
        $('#simpan').hide();
    }
    $('#closeModal').on("click",function(){
        $('#formTambah').trigger("reset");
    });


    
    $(document).ready(function () {
        closeModal();
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
                            '<button type="button" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px" onclick="buttonEdit('+data+');"><i class="fa fa-edit" aria-hidden="true"></i></button>';
                            // '<button type="button" href="#modalEdit" class="btn btn-success modal-sizes float-right" style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">Tambah<i class="fa fa-plus"></i>';
                        let buttonHapus =
                            '<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px" onclick="buttonDelete('+data+');"><i class="fa fa-trash" aria-hidden="true"></i></button>';

                        // let buttonEdit = '<button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#showModalUpdate" style="margin-right:5px;" onclick="buttonEdit(\''+data+'\');">Update</button>';
                        // let buttonHapus = '<button type="button" class="btn-sm btn-danger" onclick="buttonDelete(\''+data+'\');" >Delete</button>';
                        return buttonEdit + buttonHapus;
                    }
                }
            ]
        });

    });
    

    $('#formTambah').on('submit', function (e) {
        $('#closeModal').click();

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        
        $.ajax({
            type: "POST",
            url: "{{ route('post_tipe_asuransi')}}",
            data: $(this).serialize(),
            success: function (response) {
               closeModal();
               new PNotify({
			title: 'Regular Notice',
			text: 'Check me out! I\'m a notice.',
			type: 'success'
		});
		
               
            }
        });
    });

    /* ======================= EDIT========================= */
    function buttonEdit(idEdit){
        //console.log(idEdit);
        $('#judul').text("Ubah Tipe Asuransi");
        editTombol();
        $('#modalForm').click();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "GET",
            url: "{{route('edit_tipe_asuransi')}}",
            data: {
                id:idEdit
            },
            success: function (data) {
                //console.log(data);
               oTable.ajax.reload();
               $("#formTambah").attr('formEdit');
               $('#name').val(data.nama);
               $('#id').val(data.id);
            }
        });

    }

    /* ======================= EDIT========================= */
    /* ======================= UPDaTE========================= */
    $('#ubah').on("click",function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{route('update_tipe_asuransi')}}",
            data: $('#formTambah').serialize(),
            success: function (data) {
                //console.log(data);
                oTable.ajax.reload();
                
                
            }
        });
    });
    /* ======================= UPDate========================= */

    /* ======================= Delete========================= */
    function buttonDelete(idDelete){
        console.log(idDelete);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "GET",
            url: "{{route('delete_tipe_asuransi')}}",
            data: {
                id:idDelete
            },
            success: function (data) {
                //console.log(data);
               oTable.ajax.reload();
               new PNotify({
			title: 'Hapus',
			text: 'Berhasil hapus',
			type: 'danger'
		    });
               
            }
        });

    }

    /* ======================= Delete========================= */
</script>
@stop
