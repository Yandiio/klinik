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
                        <a class="nav-link" href="{{route('dashboard')}}">
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
                                <a class="nav-link" href="{{route('list_pendaftaran')}}">
                                    List Pendaftaran
                                </a>
                            </li>

                            <li class="nav nav-link">
                                <a class="nav-link" href="{{route('tipe_pendaftaran')}}">
                                    Tipe Pendaftaran
                                </a>
                            </li>
                            <li class="nav nav-link">
                                <a class="nav-link" href="{{route('tipe_pasien')}}">
                                    Golongan Pasien
                                </a>
                            </li>
                            <li class="nav nav-link">
                                <a class="nav-link" href="{{route('tipe_pendaftaran')}}">
                                    Tipe Penjamin
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
                                <a class="nav-link" href="{{route('pendapatan')}}">
                                    Pendapatan Dokter
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
                        <a href="#" class="nav-link">
                            <i class="fas fa-medkit"></i>
                            <span>Tindakan</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('tindakan') }}">
                                        Buat Tindakan
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('list_tindakan') }}">
                                            List Tindakan
                                        </a>
                                    </li>
                                <li>
                                <li>
                                    <a class="nav-link" href="{{ route('get_master_tindakan') }}">
                                            Master Tindakan
                                        </a>
                                    </li>
                                <li>    
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#" class="nav-link">
                            <i class="fas fa-calculator"></i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('list_rawat_jalan')}}">
                                    List transaksi
                                    </a>
                                </li>
                                <!-- <li>
                                    <a class="nav-link" href="">
                                        Rawat inap
                                        </a>
                                    </li>
                                <li> -->
                                
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
                            <li>
                            <a class="nav-link" href="{{ route('list_pemasok') }}">
                                    Stock Adjustment
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('list_pemasok') }}">
                                    Supplayer
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
                            
                            {{-- <li>
                                <a class="nav-link" href="forms-basic.html">
                                    Resep
                                </a>
                            </li> --}}
                            <li>
                                <a class="nav-link" href="{{ route('list_tipeobat')}}">
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
                            <!-- <li>
                                <a class="nav-link" href="{{ route('diagnosa') }}">
                                    Diagnosa
                                </a>
                            </li> -->
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-universal-access" a-riahidden="true"></i>
                            <span>Asuransi</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('list_asuransi') }}">
                                    Claim Asuransi
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('master_asuransi') }}">
                                    Master Asuransi
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
                            <a class="nav-link" href="{{ route('report-klinik') }}">
                                    Report Klinik
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('report-poligigi') }}">
                                    Report Poli Gigi
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('report-polikebidanan') }}">
                                    Report Poli Kebidanan
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('report-polilab') }}">
                                    Report Poli Lab
                                </a>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('report-obat') }}">
                                    Report Pengeluaran Obat
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