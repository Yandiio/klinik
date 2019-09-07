@extends('layout.admin')
@section('title', 'Klinik Pratama Bina Husada Bakti')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
            <div class="col-lg-12">
                    <div class="row mb-4">
                        <div class="col-xl-6">
                            <section class="card card-featured-left card-featured-primary mb-3">
                                <div class="card-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fas fa-life-ring"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Jumlah Pasien Tahun Ini</h4>
                                                <div class="info">
                                                    <strong class="amount">439</strong>
                                                    
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="#">(view all)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-xl-6">
                            <section class="card card-featured-left card-featured-secondary">
                                <div class="card-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-secondary">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Jumlah Dokter</h4>
                                                <div class="info">
                                                    <strong class="amount">23</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="#">(view all)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <section class="card card-featured-left card-featured-tertiary mb-3">
                                <div class="card-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Rekam Medis</h4>
                                                <div class="info">
                                                    <strong class="amount">38</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="#">(view all)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-xl-6">
                            <section class="card card-featured-left card-featured-quaternary">
                                <div class="card-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quaternary">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Data Lab</h4>
                                                <div class="info">
                                                    <strong class="amount">15</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="#">(view all)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
        <div class="col-lg-12 mb-3">
            <section class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="chart-data-selector" id="salesSelectorWrapper">
                                <h2>
                                    Data Pasien:
                                    <strong>
                                        <p> <small>Klinik Pratama Bina Husada</small> </p>
                                    </strong>
                                </h2>
    
                                <div id="salesSelectorItems" class="chart-data-selector-items mt-3">
                                    <!-- Flot: Sales Porto Admin -->
                                    <div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active" style="height: 203px;"></div>
                                    <script>
    
                                        var flotDashSales1Data = [{
                                            data: [
                                                ["Jan", 140],
                                                ["Feb", 240],
                                                // ["Mar", 190],
                                                // ["Apr", 140],
                                                // ["May", 180],
                                                // ["Jun", 320],
                                                // ["Jul", 270],
                                                // ["Aug", 180]
                                            ],
                                            color: "#0088cc"
                                        }];
    
                                        // See: js/examples/examples.dashboard.js for more settings.
    
                                    </script>
    
                                   
                                </div>
    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
       
    </div>
    <div class="row pt-12 mt-1">
        <div class="col-xl-12">
            <section class="card">
                <header class="card-header card-header-transparent">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>
    
                    <h2 class="card-title">Tindakan Pasien Yang Masuk Hari Ini</h2>
                </header>
                <div class="card-body">
                    <table class="table table-responsive-md table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Status</th>
                                {{-- <th>Progress</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Helmay</td>
                                <td>Dr.Lisa</td>
                                <td><span class="badge badge-success">Success</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Agus</td>
                                <td>Dr.Nisa</td>
                                <td><span class="badge badge-success">Success</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anto</td>
                                <td>Drg.Intan</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Angeline</td>
                                <td>Dr.Michael</td>
                                <td><span class="badge badge-success">Success</span></td>
                                
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Cici</td>
                                <td>Dr.Irfan</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Juminten</td>
                                <td>Dr.Robby</td>
                                <td><span class="badge badge-danger">Reject</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dian</td>
                                <td>Dr.Doni</td>
                                <td><span class="badge badge-success">Success</span></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
@endsection
