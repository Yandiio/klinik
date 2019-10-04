@extends('layout.admin')

@yield('title', 'Diagnosa')

@section('content')
<section role="main" class="content-body">
        <header class="page-header">
        <h2>Diagnosa</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Labortorium</span></li>
                <li><span>Diagnosa</span></li>
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
						
						<h2 class="card-title">Diagnosa</h2>
                    </header>
                    <div class="card">
                        <div class="card-body">
							<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah" id="tambah" style="margin-bottom: 10px">
									Tambah
									<i class="fa fa-plus"></i>
							</button>
                            <div class="table-responsive m-t-40">
                                <table id="tableAjaxDiagnosaList" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
											<th width="5%">No</th>
											<th>Nama Diagnosa</th>
											<th>Hasil Diagnosa</th>
											<th>Keterangan</th>
											<th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>No</th>
											<th>Nama Diagnosa</th>
											<th>Hasil Diagnosa</th>
											<th>Keterangan</th>
											<th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
											<tr>
												<td ></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
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
			<div class="modal-dialog modal-block">
				<div class="modal-content  ">
					<!-- Modal Header -->
					<div class="modal-header card-header">
						<h2 class="card-title" id="judul">Tambah Diagnosa</h2>
						<button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" id="formTambah">
						@csrf
					<div class="modal-body">
						<div class="modal-wrapper">
							<div class="modal-text">
								<label class="control-label">Kode diagnosa <span class="required">*</span></label>	
								<input type="text" name="NewKode" class="form-control" placeholder="Kode Diagnosa" required/>	    
							</div>
							<div class="modal-text">
								<label class="control-label">Nama diagnosa <span class="required">*</span></label>	
								<input type="text" name="NewNama" class="form-control" placeholder="Nama Diagnosa" required/>	    
							</div>
							<br>
							<div class="modal-text">
								<label class="control-label">Hasil Diagnosa <span class="required">*</span></label>	
								<input type="text" name="NewHasil" class="form-control" placeholder="Hasil diagnosa" required/>
							</div>
							<br>
							<div class="modal-text">
								<label class="control-label">Keterangan <span class="required"></span></label>	
								<textarea class="form-control" name="NewKeterangan" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>	    
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button type="submit" class="btn btn-primary" id="saveEdit">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal" id="cancel">Kembali</button>
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
						<h2 class="card-title" id="judul">Edit Diagnosa</h2>
						<button type="button" class="close exitEdit " data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" id="formUpdate">
						@csrf
					<div class="modal-body">
						<div class="modal-wrapper">
							<div class="modal-text">
								<label class="control-label">Kode diagnosa <span class="required">*</span></label>	
								<input type="text" name="editKode" class="form-control" required/>	
								<input id="editId" type="hidden" name="id" class="form-control" required />    
							</div>
							<div class="modal-text">
								<label class="control-label">Nama diagnosa <span class="required">*</span></label>	
								<input type="text" name="editNama" class="form-control" required/>	    
							</div>
							<br>
							<div class="modal-text">
								<label class="control-label">Hasil Diagnosa <span class="required">*</span></label>	
								<input type="text" name="editHasil" class="form-control" required/>
							</div>
							<br>
							<div class="modal-text">
								<label class="control-label">Keterangan <span class="required"></span></label>	
								<textarea class="form-control" name="editKeterangan" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>	    
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button type="submit" class="btn btn-primary" id="saveEdit">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal" id="cancelEdit">Kembali</button>
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
var oTableListDiagnosa;
	
	function closeModal() {
        $('#cancelEdit').click();
        $('#cancel').click();
        $('#formTambah').trigger("reset");
    }

	$(document).ready(function(){
		oTableListDiagnosa = $('#tableAjaxDiagnosaList').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{route('Diagnosa_getList')}}",
			columns: [
				{ data: 'kode_diagnosa', name: 'kode_diagnosa'},
				{ data: 'nama', name: 'nama' },
				{ data: 'hasil_diagnosa', name: 'hasil_diagnosa' },
				{ data: 'keterangan', name: 'keterangan' },
				{ data: 'id',
					render: function (data, type, row) {
						// console.log(type);
						let buttonEdit =
							'<button type="click" class="btn-sm btn-warning"  title="Ubah Data !" style="margin-right:5px" data-toggle="modal" data-target="#modalUbah" onclick="buttonEdit('+data+')"><i class="fa fa-edit" aria-hidden="true"></i></button>';
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

	/* ------------------- Function Input Start ---------------- */
	$('#formTambah').on('submit', function (e) {
		e.preventDefault();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $("input[name='_token']").val()
			}
		});
		$.ajax({
			type: "POST",
			url: "{{ route('Diagnosa_postInput')}}",
			data: $(this).serialize(),
			success: function (response) {
				closeModal();
				new PNotify({
					title: 'Regular Notice',
					text: 'Check me out! I\'m a notice.',
					type: 'success'
				});
			oTableListDiagnosa.ajax.reload();
			}
		});
	});
	/* ------------------- Function Input End ---------------- */

	/* ------------------- Function Edit Start ---------------- */
	function buttonEdit(idEdit) {
		//console.log(idEdit);
        $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $("input[name='_token']").val()
			}
		});
		$.ajax({
			type: "GET",
			url: "{{route('Diagnosa_getEdit')}}",
			data: {id:idEdit},
            success: function (data) {
				//console.log(data);
				$('#editId').val(data.id);
				$('#editKode').val(data.kode_diagnosa);
				$('#editNama').val(data.nama);
				$('#editHasil').val(data.hasil_diagnosa);
				$('#editKeterangan').val(data.keterangan);
			}
		});
	}
	/* ------------------- Function Edit End ---------------- */

	/* ------------------- Function Update Start ------------- */
	$('#formUpdate').on("submit", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });
        $.ajax({
            type: "POST",
            url: "{{route('Diagnosa_postUpdate')}}",
            data: $('#formUpdate').serialize(),
            success: function (data) {
                closeModal();
                new PNotify({
                    title: 'Regular Notice',
                    text: 'Check me out! I\'m a notice.',
                    type: 'success'
                });
				oTableListDiagnosa.ajax.reload();
            }
        });
    });
	/* ------------------- Function Update End ------------- */

	/* ------------------- Function Delete Start ---------------- */
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
					url: "{{route('Diagnosa_postDelete')}}",
					data: {
						id: idDelete
					},
					success: function (data) {
						//console.log(data);
						oTableListDiagnosa.ajax.reload();
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
	/* ------------------- Function Delete Start --------------*/

</script> 
@stop