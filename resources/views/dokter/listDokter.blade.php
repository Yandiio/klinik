@extends('layout.admin')

@yield('title', 'List Dokter')

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
                <li><span>List Dokter</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
							<a href="{{ url('dokter/tambah-dokter') }}" class="btn btn-info float-right "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">Tambah <i class="fa fa-plus"></i></a>
                        <h4 class="card-title">List Dokter</h4>
                        <div class="table-responsive m-t-40">
                            <table id="tabelAjaxDokterList" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Kode Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Tlp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kode Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Tlp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
@endsection
@section('css')
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />
<link href="{{ asset('assets/node_modules/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

<!-- Specific Page Vendorccc CSS -->
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
<!-- <script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script> -->
<script src="{{asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('assets/vendor/autosize/autosize.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/js/theme.init.js')}}"></script>

<!-- Examples -->
{{-- <script src="{{asset('assets/js/examples/examples.wizard.js')}}"></script> --}}
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.js')}}"></script>

<script src="{{asset('assets/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js')}}"></script>

<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{ asset('assets/js/examples/examples.advanced.form.js')}}"></script>
<script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
<!-- end - This is for export functionality only -->
<script>
    var oTableList;

    $(document).ready(function(){
		oTableList = $('#tabelAjaxDokterList').DataTable({
            responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{route('Dokter_getList')}}",
            columns: [
                {data: 'kode_dokter', name: 'kode_dokter' },
                {data: 'nama_lengkap', name: 'nama_lengkap'},
                {data: 'poli', name: 'poli'},
                {data: 'telepon', name: 'telepon'},
                { data: 'id',
					render: function (data, type, row) {
						// console.log(type);
						var url = '{{ url("dokter/edit-dokter", "id") }}';
                        url = url.replace('id', row.id);
                        let buttonEdit =
                            '<a class="btn-sm btn-warning" title="Pendaftaran ulang !"style="margin-right:5px" href="' +url +'"><i class="fas fa-edit" aria-hidden="true"></i></a>';
						let buttonHapus =
							'<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px" onclick="buttonDelete('+data +');"><i class="fa fa-trash" aria-hidden="true"></i></button>';
						return buttonEdit + buttonHapus;
					}
				}
            ]
        });
	});

    /* ----------------- Function Delete Start -----------------*/
	function buttonDelete(idDelete) {
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
						'X-CSRF-TOKEN' : $("input[name='_token']").val()
					}
				});
				$.ajax({
					type: "POST",
					url: "#",
					data: {
						id: idDelete
					},
					success: function (data) {
						//console.log(data);
						oTableList.ajax.reload();
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
	/* ----------------- Function Delete End -----------------*/


</script> 

@stop