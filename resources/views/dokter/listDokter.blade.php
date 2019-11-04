@extends('layout.admin')

@yield('title', 'List Dokter')

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
                <li><span>List Dokter</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
        </header>
        <!-- header atas -->
        <form method="POST" id="formDokter" class="myForm" >
            @csrf
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
    </div>
        </form>

</section>
@endsection

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
<script src="{{asset('assets/bootbox/bootbox.all.min.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>



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
                            '<a class="btn-sm btn-warning" title="Edit Dokter ! "style="margin-right:5px" href="' +url +'"><i class="fas fa-edit" aria-hidden="true"></i></a>';
						let buttonDelete =
							'<button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px" onclick="buttonDelete('+data +');"><i class="fa fa-trash" aria-hidden="true"></i></button>';
						return buttonEdit + buttonDelete;
					}
				}
            ]
        });
	});

    /* ----------------- Function Delete Start -----------------*/
    function buttonDelete(idx) {
        // console.log(idx);
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
					url: "{{route('Dokter_postDelete')}}",
					data: {
						id: idx
					},
					success: function (data) {
						// console.log(data);
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