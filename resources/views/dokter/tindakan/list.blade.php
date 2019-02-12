@extends('layout.admin')

@yield('title', 'List Tindakan')

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
                <li><span>List Tindakan</span></li>
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
						
						<h2 class="card-title">List Tindakan</h2>
					</header>
					<div class="card-body">
                        
                        <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
						<thead>
						    <tr style="text-align:center">
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Poli</th>
                                <th>Departemen</th>
                                <th>Status</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr style="text-align:center">
                                <td >1</td>
                                <td>01 Februari 2019</td>
                                <td>Helmay</td>
                                <td>Dr.Agus Setyadi</td>
                                <td>Poli Umum</td>
                                <td>Klinik Bina Persada</td>
                                <td>
                                    <span class="badge badge-danger">Pending</span>
                                </td>
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{ route('lihat_tindakan') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Buat Tindakan!" style="margin-right:5px" href="{{ route('tindakan') }}"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>
                                </td>  
						    </tr>
                            <tr style="text-align:center">
							    <td >2</td>
                                <td>20 Januari 2019</td>
                                <td>Anto</td>
                                <td>Drg.Anita</td>
                                <td>Poli Gigi</td>
                                <td>Klinik Bina Persada</td>
                                <td>
                                    <span class="badge badge-danger">Pending</span>
                                </td>
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{ route('lihat_tindakan') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Buat Tindakan!" style="margin-right:5px" href="{{ route('tindakan') }}"> <i class="fa fa-plus" aria-hidden="true"></i> Proses </a>
                                </td>  
						    </tr>
                            <tr>
							    <td style="text-align:center">3</td>
                                <td style="text-align:center">19 Januari 2019</td>
                                <td style="text-align:center">Milea</td>
                                <td style="text-align:center">Dr.Dilan</td>
                                <td style="text-align:center">Poli Klinik</td>
                                <td style="text-align:center">Klinik Bina Persada</td>
                                <td style="text-align:center">
                                    <span class="badge badge-success">Complete</span>
                                </td>
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Tindakan !" style="margin-right:5px" href="{{ route('lihat_tindakan') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    
                                </td>  
						    </tr>
                            			
						</tbody>
					</table>
			</div>
			</section>
		</div>
        <!-- bagian body -->
        
        
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />

@stop
@section('script')
<script src="{{ asset('assets/js/examples/examples.modals.js') }}"></script>
  

@stop