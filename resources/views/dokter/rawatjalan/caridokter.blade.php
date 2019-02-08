@extends('layout.admin')

@section('title', 'Dokter Rawat Jalan')

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
                    <li><span>Dokter Rawat Jalan</span></li>
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
            
                            <h2 class="card-title">Cari Dokter</h2>
                        </header>
                        <div class="card-body">
                            <form class="form-horizontal form-bordered form-bordered">
                                
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-3 control-label text-lg-right pt-2">Nama Dokter :</label>
                                    <div class="col-lg-6">
                                        <select class="form-control mb-3" name="" id="">
                                            <option value="">Drg.Agus Setyadi</option>
                                            <option value="">Dr. Setyadi</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-3 control-label text-lg-right pt-2"> Tanggal :</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text" style="height:40px">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control" placeholder="01/01/2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags-input" class="col-lg-3 control-label text-lg-right pt-2"></label>
                                    <div class="col-lg-6">
                                            {{-- <button type="button" class="mb-1 mt-1 mr-1 btn btn-primary btn-lg btn-block"> Search <i class="fa fa-search"></i></button> --}}
                                            <a class="mb-1 mt-1 mr-1 btn btn-primary btn-lg btn-block" href="">Search <i class="fa fa-search"></i></a>
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