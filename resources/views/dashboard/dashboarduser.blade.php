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
            <div class="card-body">
                

                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>KLINIK ABC !</strong> Login Sistem Berhasil ! <a href="" class="alert-link">
                    </a>
                </div>

                
            </div>
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
                        } else if (row.status === "1") {
                            let bagess = '<div class="badge badge-warning">Antrian</div>';
                            return bagess;
                        } else if (row.status === "2") {
                            let bagess = '<div class="badge badge-success">Selesai</div>';
                            return bagess;
                        } else {
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

                console.log(data);

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

    function filterInput() {
        $('#tablePendaftaran_filter').hide();
        $('#tablePendaftaran_paginate').addClass("float-right");
    }

</script>
@endsection
