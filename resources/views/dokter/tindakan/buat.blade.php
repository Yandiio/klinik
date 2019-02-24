@extends('layout.admin')

@yield('title', 'Tambah Pendaftaran')

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
                <li><span>Tipe Pendaftaran</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- header atas -->
    <div class="row">
        <div class="col-lg-12">
            <section class="card form-wizard" id="w2">
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justify">
                        <li class="nav-item active">
                            <a href="#w2-account" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">1</span>
                                Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">2</span>
                                Tindakan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">3</span>
                                Resep
                            </a>
                        </li>
                    </ul>
                    <form class="form-horizontal" novalidate="novalidate">
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">NO
                                        Registrasi</label>
                                    <div class="col-sm-4">

                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" readonly="readonly" value="RE001">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">No
                                        Rekam Medis <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" readonly="readonly" value="ME001">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nik
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="234543452" disabled>
                                    </div>

                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan
                                        Pasien <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="BPJS" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Nama
                                        Lengkap <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="Helmay cahyadi" disabled>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Usia
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="23" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tempat
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="Bekasi" disabled>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Golongan
                                        Darah <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="B+" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Lahir <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3"
                                                placeholder="23/07/2019" disabled>
                                        </div>

                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Jenis
                                        Kelamin <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="Text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" placeholder="Laki-Laki" disabled>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Tanggal
                                        Pendaftaran<span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3"
                                                placeholder="23/07/2019" disabled>
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Alamat
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize"
                                            data-plugin-textarea-autosize placeholder="Jl.kamelia rt 04 rw 05 Bekasi"
                                            disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- kontent tabb 1 -->
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">No
                                        Rekam medis <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm mb-3" name="first-name"
                                            id="w2-first-name" readonly="readonly" value="ME001">
                                    </div>
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-last-name">Dokter
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="" id="" class="form-control form-control-sm mb-3">
                                            <option value="">Pilih Dokter</option>
                                            <option value="">[GIGI] Drs.Beny Setiawan</option>
                                            <option value="">[Gizi] Drs.Khoslis Pratama</option>
                                            <option value="">[Lambung] Drs.Yadi Pamungkas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Tanggal
                                        Tindakan <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:25px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 control-label text-sm-right pt-1" for="w2-first-name">Keterangan
                                        <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" id="textareaAutosize"
                                            data-plugin-textarea-autosize></textarea>
                                    </div>



                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <a href="#" id="tindakanTambah" class="btn btn-primary">Tambah Tindakan
                                                    <i class="fas fa-plus"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>*</th>
                                                <th>Tipe Tindakan</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tindakan 1</td>
                                                <td>43.000</td>
                                                <td>1</td>
                                                <td class="actions">
                                                    <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                                                    <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                                                    <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- kontent tab 2 -->
                        <div id="w2-confirm" class="tab-pane p-3">
                            <div class="form-group row">

                                <form>
                                    <table class="" id="dynamic_field">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nama Obat</th>
                                                <th width="5%">Qty</th>
                                                <th width="15%">Unit</th>
                                                <th>Dosis</th>
                                                <th width="10%">Hari</th>
                                                <th>Keterangan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" name="add" id="addItem" class="btn btn-default">+</a>

                                                </td>
                                                <td>
                                                    <input type="Text" class="form-control" placeholder="Nama Obat" id="name">
                                                </td>
                                                <td>
                                                    <input type="Text" class="form-control" id="name">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Sirup" id="name"
                                                        disabled>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="name">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="name">
                                                </td>

                                                <td>
                                                    <input type="Text" class="form-control" placeholder="Keterangan" id="name">
                                                </td>
                                                <td>
                                                    <a href="#" name="add" id="add" class="btn btn-danger">x</a>

                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </form>

                            </div>

                        </div>
                </div>
                </form>
        </div>
        <div class="card-footer">
            <ul class="pager">
                <li class="previous disabled">
                    <a><i class="fas fa-angle-left"></i> Previous</a>
                </li>
                <li class="finish hidden float-right">
                    <a>Finish</a>
                </li>
                <li class="next">
                    <a>Next <i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div>
</section>
</div>
</div>


</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{asset('assets/css/skins/default.css')}}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

<!-- Head Libs -->
<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

<!-- caresolul -->
<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />

@stop
@section('script')
<!-- Vendor -->
<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('assets/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/common/common.js')}}"></script>
<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/js/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>
<!-- <script src="{{asset('assets/js/examples/examples.datatables.editable.js')}}"></script>
		<script src="{{asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script> -->
<script>
    $(document).ready(function () {
        var i = 1;
        $(this).on('click', '#addItem', function () {
            i++;

            // $('#dynamic_field').append('<tr id="row'+i+'"><td><button type = "submit" name="add" id="addItem" class="btn btn-default">+</button></td><td width="50%"><input type="Text" class="form-control" placeholder="Nama Item" id="name"></td><td width="50%"><input type="Text" class="form-control" placeholder="Keterangan" id="name"></td><td><button name="romove" id="'+i+'" class="btn btn-danger btn-remove">x</button></td></tr>');
            $('#dynamic_field').append('<tr id="row' + i +
                '"><td><a href="#" name="add" id="addItem" class="btn btn-default">+</a></td><td><input type="Text" class="form-control" placeholder="Nama Obat" id="name" ></td><td><input type="Text" class="form-control" id="name"></td><td><input type="number" class="form-control" placeholder="Sirup" id="name" disabled></td><td><input type="number" class="form-control"  id="name"></td><td><input type="number" class="form-control"  id="name"></td><td><input type="Text" class="form-control" placeholder="Keterangan" id="name"></td><td><a href="#" name="add" id="' +
                i + '" class="btn btn-danger btn-remove">x</a></td></tr>');
        });
        $(document).on('click', '.btn-remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();

        });
        $(this).on('click', '#tindakanTambah', function () {

            i++;


            // $('#dynamic_field').append('<tr id="row'+i+'"><td><button type = "submit" name="add" id="addItem" class="btn btn-default">+</button></td><td width="50%"><input type="Text" class="form-control" placeholder="Nama Item" id="name"></td><td width="50%"><input type="Text" class="form-control" placeholder="Keterangan" id="name"></td><td><button name="romove" id="'+i+'" class="btn btn-danger btn-remove">x</button></td></tr>');
            $('#datatable-editable').append('<tr id="row' + i +
                '"><td></td><td><input type="Text" class="form-control" placeholder="tindakan" id="name" name=field' +
                i +
                ' autofocus></td><td><input type="Text" class="form-control" placeholder="akan" id="name" name=""></td><td><input type="Text" class="form-control" placeholder="Nama Obat" id="name"></td><td class="actions"><a href="#" class="on-editing save-row"><i class="fas fa-save"></i></a><a href="#" class=" on-editing cancel-row"><i class="fas fa-times"></i></a></td></tr>'
            );
            $('input[name="aa"' + i + ']').focus();

            console.log(tess);
            $('#row' + i + '').focus();

            function setFocus() {

            }
        });
        $(document).on('click', '.btn-remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();

        });

    });

</script>



@stop
