<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent nav-expanded nav-active">
                        <a class="nav-link" href="{{url('dashboard')}}" id="dashboardadmin">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent nav-expanded nav-active">
                        <a class="nav-link" href="{{url('dashboard-user')}}" id="dashboarduser">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#" id="modulPasien">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                            <span>Pasien</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav nav-link">
                                <a class="nav-link" href="{{url('pasien/list-pendaftaran')}}">
                                    List Pendaftaran
                                </a>
                            </li>
                            <li class="nav nav-link">
                                <a class="nav-link" href="{{ url('pasien/tipe-asuransi')}}">
                                    Tipe Ansuransi
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#" id="modulDokter">
                            <i class="fas fa-stethoscope" aria-hidden="true"></i>
                            <span>Dokter</span>
                        </a>
                        <ul class="nav-children">
                            <li>
                                <a class="nav-link" href="{{url('dokter/list-dokter')}}">
                                    List Dokter
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('dokter/tipe-poli')}}">
                                    Tipe Poli
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#" class="nav-link" id="modulRekamMedis">
                            <i class="fas fa-medkit"></i>
                            <span>Rekam Medis</span>
                        </a>
                        <ul class="nav nav-children">
                            <li id="pemeriksaan">
                                <a class="nav-link" href="{{url('rekam-medis/list-rekam-medis')}}">
                                    List Rekam Medis
                                </a>
                            </li>
                            <li id="pemeriksaan">
                                <a class="nav-link" href="{{url('rekam-medis/pemeriksaan')}}">
                                    Pemeriksaan
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('rekam-medis/laboratorium')}}">
                                    Laboratorium
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#" id="modulSetting">
                            <i class="fas fa-wrench" aria-hidden="true"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('setting/user')}}">
                                    User
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('setting/role')}}">
                                    Role User
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#" id="modulReports">
                            <i class="fas fa-file" aria-hidden="true"></i>
                            <span>Report</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('report/laporan')}}">
                                    Laporan
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }

        </script>


    </div>

</aside>

@section('script')
<script>



</script>
@endsection


