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
			<div class="col-lg-12">
				<section class="card">
				    <header class="card-header">
						<div class="card-actions">
                            
							<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
							<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
						</div>
						
						<h2 class="card-title">List Dokter</h2>
					</header>
					<div class="card-body">
                        
					<table class="table table-bordered mb-0" id="dataTable">
						<thead>
						    <tr>
							    <th width="5%">No</th>
                                <th>Kode Dokter</th>
                                <th>Nama Dokter</th>
                                <th>Poli</th>
                                <th>Departemen</th>
								<th width="15%">Aksi</th>
								
							</tr>
					    </thead>
						<tbody>
                            <tr>
                                <td >1</td>
                                <td>KD-001</td>
                                <td>Dr.Agus Setyadi</td>
                                <td>Poli Umum</td>
                                <td>Klinik Bina Persada</td>
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                </td>  
						    </tr>
                            <tr>
							    <td >2</td>
							    <td>KD-002</td>
                                <td>Drg.Anita</td>
                                <td>Poli Gigi</td>
                                <td>Klinik Bina Persada</td>
                                
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                </td>  
						    </tr>
                            <tr>
							    <td >3</td>
							    <td>KD-003</td>
                                <td>Dr.Dilan</td>
                                <td>Poli Klinik</td>
                                <td>Klinik Bina Persada</td>
							    <td>
                                    <a class="btn-sm btn-success" title="Lihat Data !" style="margin-right:5px" href="{{ route('lihat_dokter') }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn-sm btn-warning" title="Ubah Data !" style="margin-right:5px" href="{{ route('edit_dokter') }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                                    {{-- <button type="button" href="" class="btn-sm btn-danger"  title="Hapus Data !" style="margin-right:5px"><i class="fa fa-trash" aria-hidden="true"></i></button> --}}
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