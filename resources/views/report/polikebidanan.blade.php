@extends('layout.admin')

@section('css')

@stop

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Report Poli Kebidanan</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Report</span></li>
                <li><span>Report Poli Kebidanan</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <h4 class="mt-0 mb-0">Info report poli kebidanan dalam bentuk grafik</h4>
      
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
        
                        <h2 class="card-title">Filter data laporan poli kebdianan</h2>
                    </header>
                    <div class="card-body">
                        <form class="form-horizontal form-bordered">
        
                            <div class="form-group row">
                                <label class="col-lg-2 control-label text-lg-left pt-2">Dari Tanggal</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </span>
                                        <input type="text" data-plugin-datepicker class="form-control" placeholder="01/01/2019">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-lg-2 control-label text-lg-left pt-2">Sampai Tanggal</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </span>
                                        <input type="text" data-plugin-datepicker class="form-control" placeholder="01/01/2019">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <label class="col-lg-4 control-label text-lg-left pt-2"></label>
                                    <button type="submit" class="col-lg-3 btn btn-success text-lg-left"><i class="fa fa-search"></i>Search</button>
                                    <button type="submit" class="col-lg-3 btn btn-success text-lg-right"><i class="fa fa-file"></i> Excel</button>
                            </div>
                        </form>
                        <div id="salesSelectorItems" class="chart-data-selector-items mt-3">
                                <p>Grafik Data Poli Kebidanan Senin, 02 Februari 2019 s/d Sabtu, 24 Februari 2019</p>
                                <!-- Flot: Sales Porto Admin -->
                                <div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active" style="height: 203px;"></div>
                                <script>

                                    var flotDashSales1Data = [{
                                        data: [
                                            
                                            ["1", 140],
                                            ["2", 240],
                                            ["3", 190],
                                            ["4", 140],
                                            ["5", 180],
                                            ["6", 320],
                                            ["7", 270],
                                            ["8", 180],
                                            ["9", 140],
                                            ["10", 240],
                                            ["11", 190],
                                            ["12", 140],
                                            ["13", 180],
                                            ["14", 320],
                                            ["15", 270],
                                            ["16", 180],
                                            ["17", 140],
                                            ["18", 240],
                                            ["19", 190],
                                            ["20", 140],
                                            ["21", 180],
                                            ["22", 320],
                                            ["23", 270],
                                            ["24", 370],
                                        ],
                                        color: "#0088cc"
                                    }];

                                    // See: js/examples/examples.dashboard.js for more settings.

                                </script>

                                
                            </div>
                    </div>
                </section>
            </div>
        </div>
    <!-- end: page -->
</section>
@stop

@section('script')

@stop