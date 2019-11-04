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
                                        <h4 class="title">Jumlah Pasien</h4>
                                        <div class="info">
                                            <strong class="amount" id="totalpasien">439</strong>

                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <!-- <a class="text-muted text-uppercase" href="#">(view all)</a> -->
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
                                            <strong class="amount" id="totaldokter">23</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <!-- <a class="text-muted text-uppercase" href="#">(view all)</a> -->
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
                                            <strong class="amount" id="totalmedis">38</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <!-- <a class="text-muted text-uppercase" href="#">(view all)</a> -->
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
                                        <h4 class="title">Total Poli</h4>
                                        <div class="info">
                                            <strong class="amount" id="totalpoli">15</strong>
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


    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">Pendafataran Pasien Chart</h2>
                    <!-- <p class="card-subtitle">With the categories plugin you can plot categories/textual data easily.</p> -->
                </header>
                <div class="card-body" id="cartdashboard">

                    <!-- Flot: Bars -->
                    <div class="chart chart-md" id="flotBars"></div>
                    <script type="text/javascript">
                        // See: js/examples/examples.charts.js for more settings.

                    </script>

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
                    <table class="table table-responsive-md table-striped mb-0" id="tablePendaftaran">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pasien</th>
                                <th>Poli</th>
                                <th>Asuransi</th>
                                
                                <th>Tanggal</th>
                                <th>Status</th>

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

@section('script')
<script src="{{ asset('assets/node_modules/datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        totalPasien();
        totalDokter();
        totalMedis();
        totalPoli();
        cart();
       

        oTableData = $('#tablePendaftaran').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{route('tabel_dashboard')}}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'poli',
                    name: 'poli'
                },
                {
                    data: 'asuransi',
                    name: 'asuransi'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },
                
                
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (row.status === "0") {
                            let bagess = '<div class="badge badge-danger">Menunggu</div>';
                            return bagess;
                        }else if(row.status === "1"){
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
                            return bagess;
                        }else if(row.status === "2"){
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        }else{
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        }
                    }
                },

            ]
        });

        filterInput();

    });

    function totalPasien() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('jumlah_pasien') }}",
            data: {},
            success: function (datax) {
                $("#totalpasien").text(datax);

            }
        });
    }

    function totalMedis() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('jumlah_medis') }}",
            data: {},
            success: function (datax) {
                $("#totalmedis").text(datax);

            }
        });
    }

    function totalDokter() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('jumlah_dokter') }}",
            data: {},
            success: function (datax) {
                $("#totaldokter").text(datax);

            }
        });
    }

    function totalPoli() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('jumlah_poli') }}",
            data: {},
            success: function (datax) {
                $("#totalpoli").text(datax);

            }
        });
    }

    function cart() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('detail_chart') }}",
            data: {},
            success: function (data) {
                var flotBarsData = [
                    [data[0].hari6, data[0].data6],
                    [data[0].hari5, data[0].data5],
                    [data[0].hari4, data[0].data4],
                    [data[0].hari3, data[0].data3],
                    [data[0].hari2, data[0].data2],
                    [data[0].hari1, data[0].data1],
                    [data[0].hariini, data[0].data0],
                ];

                if ($('#flotBars').get(0)) {
                    var plot = $.plot('#flotBars', [flotBarsData], {
                        colors: ['#8CC9E8'],
                        series: {
                            bars: {
                                show: true,
                                barWidth: 0.8,
                                align: 'center'
                            }
                        },
                        xaxis: {
                            mode: 'categories',
                            tickLength: 0
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            borderColor: 'rgba(0,0,0,0.1)',
                            borderWidth: 1,
                            labelMargin: 15,
                            backgroundColor: 'transparent'
                        },
                        tooltip: true,
                        tooltipOpts: {
                            content: '%y',
                            shifts: {
                                x: -10,
                                y: 20
                            },
                            defaultTheme: false
                        }
                    });
                }


            }
        });
    }
    function filterInput(){
        $('#tablePendaftaran_filter').hide();
        $('#tablePendaftaran_paginate').addClass("float-right");
    }

</script>
@endsection
