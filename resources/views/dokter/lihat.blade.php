@extends('layout.admin')

@section('title', 'Lihat Detail Dokter')

@section('css')

@stop
@section('content')
    <section role="main" class="content-body card-margin">
        <header class="page-header">
            <h2>Detail Dokter </h2>
        
            <div class="right-wrapper text-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li><span>Dokter</span></li>
                    <li><span>Lihat Dokter</span></li>
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
            
                            <h2 class="card-title">Detail Dokter</h2>
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
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Kode Dokter :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="KD-001" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Poli :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Poli Umum" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2"> No Pajak :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="12345678" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">External Dokter :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Yes" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Departement :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Klinik Bina Persada" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Nama Lengkap :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Dr.Agus Setyadi" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Tempat Lahir :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Jakarta" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Jenis Kelamin :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Laki - Laki" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Tanggal Lahir :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="01/01/1990" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Nomor Telepon :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="0892312332321" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Email :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="agus@gmail.com" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Negara :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Indonesia" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Provinsi :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="DKI Jakarta" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Kabupaten :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Jakarta" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Kecamatan :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Cakung Timur" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Kelurahan :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="Cakung" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Kode Pos :</label>
                                    <div class="col-lg-4">
                                        <input name="tags" id="tags-input" value="13910" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-2 control-label text-lg-right pt-2">Alamat :</label>
                                    <div class="col-lg-8">
                                            <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize>Jalan Garden City Block H No 2</textarea>
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