@extends('layout.admin')

@section('title', 'Lihat Detail Tindakan')

@section('css')

@stop
@section('content')
    <section role="main" class="content-body card-margin">
        <header class="page-header">
            <h2>Dokter </h2>
        
            <div class="right-wrapper text-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li><span>Dokter</span></li>
                    <li><span>Lihat Tindakan</span></li>
                </ol>
        
                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
            </div>
        </header>
    
        <!-- start: page -->
            <div class="row">
                <div class="col">
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>
            
                            <h2 class="card-title">Detail Tindakan</h2>
                        </header>
                        <div class="card-body">
                            <form class="form-horizontal form-bordered form-bordered">
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Foto :</label>
                                    <div class="col-lg-4">
                                    <img src="{{ asset('assets/img/logo.png') }}" width="40%" class="rounded-circle" alt="">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Nama Pasien :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Helmay" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Nama Dokter :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Dr.Agus Setyadi" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2"> Poli :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Poli Umum" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Departement :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Klinik Bina Persada" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Diagnosa :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Demam" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Laboratorium :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Lab 1" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Status Tindakan:</label>
                                    <div class="col-lg-3">
                                       <h4><span class="badge badge-danger">Pending</span></h4> 
                                    </div>
                                    
                                </div>
                                
                                
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
            
        <!-- end: page -->
    </section>
@stop

@section('script')

@stop