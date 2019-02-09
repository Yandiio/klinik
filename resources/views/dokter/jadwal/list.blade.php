@extends('layout.admin')

@yield('title', 'List Poli')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/dropzone/basic.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/dropzone/dropzone.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/summernote-bs4.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/codemirror/lib/codemirror.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/codemirror/theme/monokai.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" />   
<!-- tesss -->
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
                <li><span> Jadwal Dokter </span></li>
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
						
						<h2 class="card-title">List Jadwal Dokter</h2>
					</header>
					<div class="card-body">
                        <button type="button"  href="#modalMD" class="btn btn-success modal-sizes "  style="margin-bottom: 20px" title="Tambah Tipe Pendaftaran !">
                            Tambah
                            <i class="fa fa-plus"></i>
                        </button>
                        <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
						<thead>
						    <tr>
							    <th width="5%">No</th>
                                <th> Departement</th>
                                <th> Dokter</th>
                                <th>Dari Tanggal</th>
                                <th>Sampai Tanggal</th>
                                <th>Hari</th>
                                <th>Dari Jam</th>
                                <th>Sampai Jam</th>
                                <th>Istirahat Jam</th>
                                <th>Selesai Istirahat Jam</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
                                <td >1</td>
                                <td>Klinik Bina Persaada</td>
                                <td>dr. Agung Suhirman, Sp.OG</td>
                                <td>01/01/2019</td>
                                <td>02/01/2019</td>
                                <td>Senin</td>
                                <td>09.00</td>
                                <td>22.00</td>
                                <td>12.00</td>
                                <td>13.00</td>
                                
                                
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
                                <td>Klinik Bina Persaada</td>
                                <td>dr. Permadi H.W., Sp.A</td>
                                <td>01/01/2019</td>
                                <td>02/01/2019</td>
                                <td>Senin</td>
                                <td>09.00</td>
                                <td>22.00</td>
                                <td>12.00</td>
                                <td>13.00</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            <tr>
                                <td >3</td>
                                <td>Klinik Bina Persaada</td>
							    <td>dr. Joko Priyanto, Sp.PD. M.Sc.</td>
                                <td>01/01/2019</td>
                                <td>02/01/2019</td>
                                <td>Senin</td>
                                <td>09.00</td>
                                <td>22.00</td>
                                <td>12.00</td>
                                <td>13.00</td>
							    <td>
                                    <button type="button" class="btn-sm btn-warning modal-sizes"  title="Ubah Data !" style="margin-right:5px" href="#modalMDEdit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>  
						    </tr>
                            			
						</tbody>
					</table>
			</div>
			</section>
		</div>
        <!-- bagian body -->
        <!-- modal tambah -->
        <div id="modalMD" class="modal-block modal-header-color modal-block-success mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Tambah Jadwal Dokter</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
					    <div class="modal-text">
                            <label class="control-label">Departement<span class="required">*</span></label>
							 <select class="form-control form-control-sm mb-2" name="" id="">
                                 <option value="">Klinik Bina Persada</option>
                             </select>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Dokter<span class="required">*</span></label>
							 <select class="form-control form-control-sm mb-2" name="" id="">
                                 <option value="">dr. Joko Priyanto, Sp.PD. M.Sc.</option>
                                 <option value="">dr. Dian Hananto, Sp.PD</option>
                             </select>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Dari Tanggal<span class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text" style="height:25px">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </span>
                                <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3" placeholder="01/01/2019">
                            </div>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Sampai Tanggal<span class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text" style="height:25px">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </span>
                                <input type="text" data-plugin-datepicker class="form-control form-control-sm mb-3" placeholder="01/01/2019">
                            </div>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Hari<span class="required">*</span></label>
							 <select class="form-control form-control-sm mb-2" name="" id="">
                                 <option value="">Senin</option>
                                 <option value="">Selasa</option>
                                 <option value="">Rabu</option>
                                 <option value="">Kamis</option>
                                 <option value="">Jumat</option>
                                 <option value="">Sabtu</option>
                                 <option value="">Minggu</option>
                             </select>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Jam Masuk <span class="required">*</span></label>  
                            <div class="input-group ">
								    <span class="input-group-prepend">
									    <span class="input-group-text">
											<i class="far fa-clock"></i>
										</span>
									</span>
									<input type="text" data-plugin-timepicker class="form-control timepicker col-md-2">
                                    
							</div>
                        </div>
                        <div class="modal-text">
                            <label class="control-label">Jam Pulang <span class="required">*</span></label>  
                            <div class="input-group ">
								    <span class="input-group-prepend">
									    <span class="input-group-text">
											<i class="far fa-clock"></i>
										</span>
									</span>
									<input type="text" data-plugin-timepicker class="form-control timepicker col-md-2">
                                    
							</div>
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
								
							 <input type="text" name="fullname" value="	Poli Kebidanan dan Penyakit Kandungan" class="form-control" placeholder="Tipe Poli" required/>
							    
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
    <script>
        $(function(){
            $('.timepicker').timepicker({
                showInputs: false
            })
        });
    </script>
       
    <script src="{{ asset('assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js')}}"></script>
    <script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
    <script src="{{asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('assets/vendor/fuelux/js/spinner.js')}}"></script>
	<script src="{{asset('assets/vendor/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
	<script src="{{asset('assets/vendor/ios7-switch/ios7-switch.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.js') }}"></script>
        

@stop