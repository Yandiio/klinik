@extends('layout.admin')

@yield('title', 'Tipe Pendaftaran')

@section('css')
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />
@stop
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Setting</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Setting</span></li>
                <li><span> User </span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
   
    <div class="row">
        <div class="col-md-12">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">List User</h2>
                </header>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#modalTambah" id="tambah" style="margin-bottom: 10px">

                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="table-responsive">
                            <table id="tableUser" class="table table-hover table-striped table-bordered"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        
                                        <th width="15%">Aksi</th>
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
        <div class="modal" id="modalTambah">
            <div class="modal-dialog modal-block">
                <div class="modal-content  ">
                    <!-- Modal Header -->
                    <div class="modal-header card-header">
                        <h2 class="card-title" id="judul">Tambah User</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formTambah">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <label class="control-label">Name <span class="required">*</span></label>
                                    <input id="name" type="text" name="nama" class="form-control" placeholder="Name"
                                        required />
                                   
                                    <label class="control-label">Password <span class="required">*</span></label>
                                    <input id="password" type="password" name="password" class="form-control"
                                        placeholder="Password" required />
                                    <label class="control-label">Role <span class="required">*</span></label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="">Pilih Role</option>
                                    </select>
                                    <br>
                                    <div id="tampilDokter"> 
                                    <label class="control-label">dokter <span class="required">*</span></label>
                                    <select name="dokter" id="dokter" class="form-control">
                                        <option value="">Pilih Dokter</option>
                                    </select>
                                    </div>
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
                        <h2 class="card-title" id="judul">Ubah User</h2>
                        <button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
                    </div>
                    <form method="POST" id="formUpdate">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <label class="control-label">Name <span class="required">*</span></label>
                                    <input id="editName" type="text" name="editName" class="form-control" placeholder="Name"
                                        required />
                                    <input id="idEdit" type="text" name="id" class="form-control" placeholder="Name"
                                        required />
                                   
                                    <label class="control-label">Password <span class="required">*</span></label>
                                    <input id="editPassword" type="password" name="editPassword" class="form-control"
                                        placeholder="Password" required />
                                    <label class="control-label">Role <span class="required">*</span></label>
                                    <select name="editRole" id="editRole" class="form-control">
                                        <option value="">Pilih Role</option>
                                    </select>
                                    <br>
                                    <div id="tampilEditDokter"> 
                                    <label class="control-label">dokter <span class="required">*</span></label>
                                    <select name="editDokter" id="editDokter" class="form-control">
                                        <option value="">Pilih Dokter</option>
                                    </select>
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


</script>


<script>
    var oTable;
    //$('#ubah').hide();
    dataRole();
    dataRoleEdit();
    $('#tampilDokter').hide();
    $('#tampilEditDokter').hide();

    function closeModal() {
        $('#cancelEdit').click();
        $('#cancel').click();
        $('#formTambah').trigger("reset");
    }
    $(document).ready(function () {
        closeModal();
        oTable = $('#tableUser').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('list_user')}}",
            columns: [

                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                
                {
                    data: 'id',
                    render: function (data, type, row) {
                        // console.log(type);
                        let buttonEdit =
                            '<button type="click" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px" data-toggle="modal" data-target="#myModalEdit" onclick="buttonEdit(' +
                            data + ')"><i class="fa fa-edit" aria-hidden="true"></i></button>';
                        let buttonHapus =
                            '<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px" onclick="buttonDelete(' +
                            data +
                            ');"><i class="fa fa-trash" aria-hidden="true"></i></button>';
                        return buttonEdit + buttonHapus;
                    }
                }
            ]
        });

    });


    $('#formTambah').on('submit', function (e) {
        
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('user_tambah')}}",
            data: $(this).serialize(),
            success: function (response) {

                closeModal();
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });

                oTable.ajax.reload();
            }
        });
    });

    /* ======================= EDIT========================= */
    function buttonEdit(idEdit) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{route('edit_user')}}",
            data: {
                id: idEdit
            },
            success: function (data) {
                $('#editName').val(data.username);
                $('#idEdit').val(data.id);
                

                
            }
        });

    }

    /* ======================= EDIT========================= */
    /* ======================= UPDaTE========================= */
    $('#formUpdate').on("submit", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{route('update_user')}}",
            data: $('#formUpdate').serialize(),
            success: function (data) {
                closeModal();
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });

                oTable.ajax.reload();
            }
        });
    });
    /* ======================= UPDate========================= */

    /* ======================= Delete========================= */
    function buttonDelete(idDelete) {
        console.log(idDelete);
        bootbox.confirm({
            message: "Apakah anda yakin ingin menghapus ?",
            buttons: {
                confirm: {
                    label: 'Ya, Saya ingin menghapus',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Tidak',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "{{route('delete_user')}}",
                    data: {
                        id: idDelete
                    },
                    success: function (data) {
                        //console.log(data);
                        oTable.ajax.reload();
                        new PNotify({
                            title: 'Hapus',
                            text: 'Berhasil hapus',
                            type: 'success',
                        });

                    }
                });
            }
        });




    }

    function dataRole() {
        $.ajax({
            type: "GET",
            url: "{{route('role_data')}}",
            // data: {
            //     'id': id
            // },
            success: function (data) {
                // the next thing you want to do 
                //console.log(data);
                // $city.empty();
                for (var i = 0; i < data.length; i++) {
                    $('#role').append('<option id=' + data[i].id + ' value=' + data[i].id +
                        '>' + data[i].name_role + '</option>');
                }
                
            }
        });
    }
    function dataRoleEdit() {
        $.ajax({
            type: "GET",
            url: "{{route('role_data')}}",
            // data: {
            //     'id': id
            // },
            success: function (data) {
                // the next thing you want to do 
                //console.log(data);
                // $city.empty();
                
                for (var i = 0; i < data.length; i++) {
                    $('#editRole').append('<option id=' + data[i].id + ' value=' + data[i].id +
                        '>' + data[i].name_role + '</option>');
                }
            }
        });
    }

    $('#role').change(function(){
        var id = $('#role').val();

        // console.log(id);
        if (id == 5) {
            $('#tampilDokter').show();
            dataDokter();
        }else{
            $('#tampilDokter').hide();
            
        }

    });
    $('#editRole').change(function(){
        var id = $('#editRole').val();

        // console.log(id);
        if (id == 5) {
            $('#tampilEditDokter').show();
            dataDokter();
        }else{
            $('#tampilEditDokter').hide();
            
        }

    });
    
    function dataDokter() {
        $.ajax({
            type: "GET",
            url: "{{route('dokter_get_data')}}",
            
            success: function (data) {
                //console.log(data[0].id);
                $.each(data, function (index, value) {
                    $('#dokter').append('<option id=' + value.id + ' value=' + value
                        .id +
                        '>' + value.nama_lengkap + '</option>')
                });
                $.each(data, function (index, value) {
                    $('#editDokter').append('<option id=' + value.id + ' value=' + value
                        .id +
                        '>' + value.nama_lengkap + '</option>')
                });
            }

        });
    }

    /* ======================= Delete========================= */

</script>
@stop
