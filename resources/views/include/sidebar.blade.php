<aside id="sidebar-left" class="sidebar-left">
				
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
            
                <ul class="nav nav-main">
                    <li class="nav-parent nav-expanded nav-active">
                        <a class="nav-link" href="layouts-default.html">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                            <span>Pasien</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav nav-link">
                                <a class="nav-link" href="{{route('pendaftaran')}}">
                                    Pendaftaran
                                </a>
                            </li>

                            <li class="nav nav-link">
                                <a class="nav-link" href="{{route('tipe_pendaftaran')}}">
                                    Tipe Pendaftaran
                                </a>
                            </li>
                          
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-stethoscope" aria-hidden="true"></i>
                            <span>Dokter</span>
                        </a>
                        <ul class="nav-children">
                            <li>
                            <a class="nav-link" href="{{ route('tambah_dokter') }}">
                                    Tambah Dokter
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('list_dokter') }}">
                                    List Dokter
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('jadwal_dokter') }}">
                                    Jadwal Dokter
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="pages-signup.html">
                                    Pendapatan Dokter
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="pages-signup.html">
                                    Dokter Rawat Jalan
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('tipe_poli') }}">
                                    Tipe Poli
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks" aria-hidden="true"></i>
                            <span>Inventory</span>
                        </a>
                        <ul class="nav nav-children">
                            <li {{ (Request::is('inventory') ? 'class=active' : '') }}>
                            <a class="nav-link" href="{{ route('list_inventory') }}">
                                    Inventory Stock
                                </a>
                            </li>
                            <li {{ (Request::is('inventory') ? 'class=active' : '') }}>
                                <a class="nav-link" href="{{ route('report_inventory') }}">
                                        Report Inventory
                                    </a>
                                </li>
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-hospital" aria-hidden="true"></i>
                            <span>Apotik</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                            <a class="nav-link" href="{{ route('list_apotik') }}">
                                    List Apotik
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-basic.html">
                                    Supplyer
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-basic.html">
                                    Racikan Obat
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-basic.html">
                                    Tipe Obat
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-thermometer-three-quarters" aria-hidden="true"></i>
                            <span>Laboratorium</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                            <a class="nav-link" href="{{ route('laboratorium') }}">
                                    List Laboratorium
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-universal-access" a-riahidden="true"></i>
                            <span>Asuransi</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                            <a class="nav-link" href="{{ route('laboratorium') }}">
                                    List Asuransi
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-wrench" aria-hidden="true"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="tables-basic.html">
                                    List User
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file" aria-hidden="true"></i>
                            <span>Report</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="maps-google-maps.html">
                                    Report Klinik
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="pages-signup.html">
                                    Pendapatan Dokter
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="pages-signup.html">
                                    Pendapatan Pasien
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="pages-signup.html">
                                    Klaim Asuransi
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