@extends('layout.admin')

@yield('title', 'List Pendaftaran')

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
                <li><span>List Pendaftaran</span></li>
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
						
						<h2 class="card-title">List Pendaftaran</h2>
					</header>
					<div class="card-body">
					<table class="table table-bordered mb-0" id="dataTable">
						<thead>
						    <tr>
							    <th width="5%">No</th>
                                <th>Tipe</th>
								<th>Nik</th>
                                <th>Nama</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
								<th width="13%">Aksi</th>
                                <th>Daftar</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
							    <td>D001</td>
							    <td>Umum</td>
                                <td>23432435622</td>
                                <td>Salahudin</td>
                                <td>[Gigi] Drs.Khoslis Prtama</td>
                                <td>12-12-2018</td>
							    <td>
                                    <a class="btn-sm btn-info modal-sizes" title="Cetak Data !" style="margin-right:5px" href="#modalLG"> <i class="fas fa-file-alt" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_pendaftaran') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                </td>
                                <td>
                                    <a class="btn-sm btn-success" title="Pendaftaran ulang !" style="margin-right:5px" href="{{ route('tambah_pendaftaran') }}"> <i class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                </td>
						    </tr>
                            <tr>
							    <td>D002</td>
							    <td>Umum</td>
                                <td>23432435622</td>
                                <td>Salahudin</td>
                                <td>[Gigi] Drs.Khoslis Prtama</td>
                                <td>12-08-2018</td>
							    <td>
                                    <a class="btn-sm btn-info modal-sizes " title="Cetak Data !" style="margin-right:5px" href="#modalLG"> <i class="fas fa-file-alt" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_pendaftaran') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                </td>
                                <td>
                                    <a class="btn-sm btn-success" title="Pendaftaran ulang !" style="margin-right:5px" href="{{ route('tambah_pendaftaran') }}"> <i class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                </td>
						    </tr>
                            <tr>
							    <td>D003</td>
							    <td>Umum</td>
                                <td>23432435622</td>
                                <td>Salahudin</td>
                                <td>[Gigi] Drs.Khoslis Prtama</td>
                                <td>12-12-2018</td>
							    <td>
									<a class="btn-sm btn-info modal-sizes " title="Lihat Data !" style="margin-right:5px" href="#modalLG"> <i class="fas fa-file-alt" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_pendaftaran') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                </td>
                                <td>
                                    <a class="btn-sm btn-success" title="Pendaftaran ulang !" style="margin-right:5px" href="{{ route('tambah_pendaftaran') }}"> <i class="fas fa-plus-square" aria-hidden="true"></i> Daftar</a>
                                </td>
						    </tr>
                            
                            			
						</tbody>
					</table>
			</div>
			</section>
		</div>

        <!-- modalllll -->
            <div id="modalLG" class="modal-block modal-block-lg mfp-hide">
				<section class="card">
					<!-- start: page -->
						<div class="card-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-6 mt-3">
											<h2 class="h2 mt-0 mb-1 text-dark font-weight-bold">Kartu Daftar</h2>
											<h4 class="h4 m-0 text-dark font-weight-bold">D001/06/20/2017</h4>
										</div>
										<div class="col-sm-6 text-right mt-3 mb-3">
											<address class="ib mr-5">
												Okler Themes Ltd
												<br/>
												123 Porto Street, New York, USA
												<br/>
												Phone: +12 3 4567-8901
												<br/>
												okler@okler.net
											</address>
											<div class="ib">
												<img src="{{asset('assets/img/invoice-logo.png')}}" alt="OKLER Themes" />
											</div>
										</div>
									</div>
								</header>
								
								<table class="table table-bordered mb-0">
									<thead>
										<tr class="text-dark">
                                            <th width="20%">No</th>
                                            <th>D001</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											
										</tr>
                                            <td width="10%">Nik</td>
                                            <td>786557376367367673</td>
                                        <tr>
                                            <td width="10%">Nama</td>
                                            <td>Samsudin hairul</td>
                                        </tr>
                                        <tr>
                                            <td width="10%">Alamat</td>
                                            <td>Jala mekar sari cikayu jakarta timur</td>
                                        </tr>
                                        <tr>
                                            <td width="10%">Keterangan</td>
                                            <td> </td>
                                        </tr>
										
									</tbody>
								</table>
							</div>

							<div class="text-right mr-4">
                                <button class="btn btn-default modal-dismiss">Kembali</button>
								<a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-3"><i class="fas fa-print"></i> Print</a>
							</div>
						</div>
					</div>
					
				</section>
			</div>
       
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

@stop
@section('script')
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
  

@stop