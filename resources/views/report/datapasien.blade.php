@extends('layout.admin')

@section('title', 'Report Pasien')

@section('css')

@stop
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Report Klinik</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Report</span></li>
                <li><span>Report Klinik</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <h4 class="mt-0 mb-0">Info report klinik dalam bentuk grafik</h4>
        <div class="row">
            <div class="col-lg-6">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
        
                        <h2 class="card-title">Bars Chart Pasien</h2>
                        {{-- <p class="card-subtitle">With the categories plugin you can plot categories/textual data easily.</p> --}}
                    </header>
                    <div class="card-body">
        
                        <!-- Flot: Bars -->
                        <div class="chart chart-md" id="flotBars"></div>
                        <script type="text/javascript">
        
                            var flotBarsData = [
                                ["Jan", 128],
                                ["Feb", 142],
                                ["Mar", 125],
                                ["Apr", 123],
                                ["May", 137],
                                ["Jun", 133],
                                ["Jul", 118],
                                ["Aug", 114],
                                ["Sep", 118],
                                ["Oct", 115],
                                ["Nov", 124],
                                ["Dec", 137]
                            ];
        
                            // See: js/examples/examples.charts.js for more settings.
        
                        </script>
        
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
        
                        <h2 class="card-title">Chart Pasien yang menggunakan Asuransi Tahun Ini</h2>
                        
                    </header>
                    <div class="card-body">
        
                        <!-- Flot: Pie -->
                        <div class="chart chart-md" id="flotPie"></div>
                        <script type="text/javascript">
        
                            var flotPieData = [{
                                label: "BPJS",
                                data: [
                                    [1, 60]
                                ],
                                color: '#0088cc'
                            }, {
                                label: "Sinarmas MSG",
                                data: [
                                    [1, 10]
                                ],
                                color: '#2baab1'
                            }, {
                                label: "Prudential",
                                data: [
                                    [1, 15]
                                ],
                                color: '#734ba9'
                            }, {
                                label: "Axa Mandiri",
                                data: [
                                    [1, 15]
                                ],
                                color: '#E36159'
                            }];
        
                            // See: js/examples/examples.charts.js for more settings.
        
                        </script>
        
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
        
                        <h2 class="card-title">Filter data laporan Pasien</h2>
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
                            </div>
                        </form>
                        <div id="salesSelectorItems" class="chart-data-selector-items mt-3">
                                <p>Grafik Data Pasien Sabtu, 02 Februari 2019 s/d Sabtu, 23 Februari 2019</p>
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
                                            ["23", 270]
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
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
        
                        <h2 class="card-title">Filter data laporan Transaksi</h2>
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
                            </div>
                        </form>
                        <div id="salesSelectorItems" class="chart-data-selector-items mt-3">
                                <p>Grafik Data Transaksi Sabtu, 02 Februari 2019 s/d Sabtu, 23 Februari 2019</p>
                                <!-- Flot: Sales Porto Admin -->
                                <div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales2" class="chart-active" style="height: 203px;"></div>
                                <script>

                                    var flotDashSales2Data = [{
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
                                            ["23", 270]
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
<!-- Examples -->
<style>
        #ChartistCSSAnimation .ct-series.ct-series-a .ct-line {
            fill: none;
            stroke-width: 4px;
            stroke-dasharray: 5px;
            -webkit-animation: dashoffset 1s linear infinite;
            -moz-animation: dashoffset 1s linear infinite;
            animation: dashoffset 1s linear infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-b .ct-point {
            -webkit-animation: bouncing-stroke 0.5s ease infinite;
            -moz-animation: bouncing-stroke 0.5s ease infinite;
            animation: bouncing-stroke 0.5s ease infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-b .ct-line {
            fill: none;
            stroke-width: 3px;
        }

        #ChartistCSSAnimation .ct-series.ct-series-c .ct-point {
            -webkit-animation: exploding-stroke 1s ease-out infinite;
            -moz-animation: exploding-stroke 1s ease-out infinite;
            animation: exploding-stroke 1s ease-out infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-c .ct-line {
            fill: none;
            stroke-width: 2px;
            stroke-dasharray: 40px 3px;
        }

        @-webkit-keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            };
        }

        @-moz-keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            };
        }

        @keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            };
        }

        @-webkit-keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            };
        }

        @-moz-keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            };
        }

        @keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            };
        }

        @-webkit-keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            };
        }

        @-moz-keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            };
        }

        @keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            };
        }
    </style>
<script src="{{ asset('assets/vendor/jquery-appear/jquery-appear.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/vendor/flot.tooltip/flot.tooltip.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-sparkline/jquery-sparkline.js') }}"></script>
<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('assets/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('assets/vendor/snap.svg/snap.svg.js') }}"></script>
<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
<script src="{{ asset('assets/vendor/chartist/chartist.js') }}"></script>
<script src="{{ asset('assets/js/examples/examples.charts.js') }}"></script>
@stop