@extends('layout.admin')

@section('title', 'klinik')
@section('css')

@stop
@section('content')
<section role="main" class="content-body card-margin">
        <header class="page-header">
            <h2>Tambah Tindakan Laboratorium</h2>
        
            <div class="right-wrapper text-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li><span>Laboratorium</span></li>
                    <li><span>Tambah Tindakan Laboratorium</span></li>
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
            
                            <h2 class="card-title">Informasi Dasar</h2>
                        </header>
                        <div class="card-body">
                            <form class="form-horizontal form-bordered" method="get">
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Parent</label>
                                    <div class="col-lg-6">
                                        <select class="form-control mb-3">
                                            <option>Has No Parent</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Kode Tindakan</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="inputDisabled" type="text" placeholder="TL-001" disabled="">
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Nama Tindakan</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nama Tindakan" id="inputReadOnly" class="form-control" >
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Status</label>
                                    <div class="col-lg-6">
                                            <select class="form-control mb-3">
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Default Tarif</label>
                                    <div class="col-lg-6">
                                        <input type="number" placeholder="Default Tarif" class="form-control input-rounded" id="inputRounded">
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputFocus">Doctor Share</label>
                                    <div class="col-lg-6">
                                        <input class="form-control input-rounded" id="inputFocus" type="number" placeholder="Doctor Share">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputFocus">Nurse Share</label>
                                        <div class="col-lg-6">
                                            <input class="form-control input-rounded" id="inputFocus" type="number" placeholder="Nurse Share">
                                        </div>
                                    </div>
            
                                
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>
            
                            <h2 class="card-title">Tarif Tindakan Laboratorium</h2>
                        </header>
                        <div class="card-body">
                            <form class="form-horizontal form-bordered" method="get">
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Nama Cabang</label>
                                    <div class="col-lg-6">
                                            <select class="form-control mb-3">
                                                <option>Klinik Pratama Husada Bakti</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Nama Depatement</label>
                                    <div class="col-lg-6">
                                            <select class="form-control mb-3">
                                                <option>Any Departement</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Shift</label>
                                    <div class="col-lg-6">
                                            <select class="form-control mb-3">
                                                <option>Any (00:00:00 - 23.59)</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Nama Penjamin</label>
                                    <div class="col-lg-6">
                                            <select class="form-control mb-3">
                                                <option>PRIBADI</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                    </div>
                                </div>

            
                                
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>
            
                            <h2 class="card-title">Normal Values</h2>
                        </header>
                        <div class="card-body">
                            <form class="form-horizontal form-bordered" method="get">
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Kategori Anak - Anak (Pria)</label>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Anak - Anak (pria)">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Normal Value (s)">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama Unit (s)">
                                        </div>
                                    </div>
                                            
                                </div>
                                <div class="form-group row">
                                        <label class="col-lg-3 control-label text-lg-right pt-2">Kategori Anak - Anak (Wanita)</label>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Anak - Anak (Wanita)">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Normal Value (s)">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Unit (s)">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Kategori Dewasa (Pria)</label>
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-4 mb-3">
                                            <input type="text" class="form-control" placeholder="Kategori Dewasa (Pria)">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Normal Value (s)">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama Unit (s)">
                                        </div>    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Kategori Dewasa (Wanita)</label>
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-4 mb-3">
                                            <input type="text" class="form-control" placeholder="Kategori Dewasa (Wanita)">
                                        </div>    
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Normal Value (s)">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama Unit (s)">
                                        </div>
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