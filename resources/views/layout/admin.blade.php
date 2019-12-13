<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/morris/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
    @yield('css')
</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{url('/')}}" class="logo">
                    <!-- <img src="{{ asset('assets/img/logo.png') }}" width="75" height="35" alt="Porto Admin" /> -->
                    <h3 style="padding-bottom: 50px;">KLINIK ABC</h3>
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <ul class="notifications">


                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span class="badge">2</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">2</span>
                                Alerts
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-info bg-danger text-light"></i>
                                            </div>
                                            <span class="title">Obat Expired !</span>
                                            <span class="message">Panadol</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-info bg-danger text-light"></i>
                                            </div>
                                            <span class="title">Supplayer belum bayar !</span>
                                            <span class="message">Supplayer panadol </span>
                                        </a>
                                    </li>

                                </ul>

                                <hr />
                            </div>
                        </div>
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <!-- <img src="{{ asset('assets/img/!logged-user.jpg') }}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="{{ asset('assets/img/!logged-user.jpg') }}" /> -->
                            <i class="fas fa-user"></i>
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name" id="">{{ Auth::user()->username}}</span>
                            <span class="role"></span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <!-- <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
                    </li> -->
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{url('/')}}"><i class="fas fa-power-off"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>

        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
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
                                <li class="nav-parent" id="modulPasien">
                                    <a class="nav-link" href="#" >
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
                                <li class="nav-parent" id="modulDokter">
                                    <a class="nav-link" href="#" >
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
                                <li class="nav-parent" id="modulRekamMedis">
                                    <a href="#" class="nav-link" >
                                        <i class="fas fa-medkit"></i>
                                        <span>Rekam Medis</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li id="rekammedis">
                                            <a class="nav-link" href="{{url('rekam-medis/list-rekam-medis')}}">
                                                List Rekam Medis
                                            </a>
                                        </li>
                                        <li id="pemeriksaan">
                                            <a class="nav-link" href="{{url('rekam-medis/pemeriksaan')}}">
                                                Pemeriksaan
                                            </a>
                                        </li>
                                        <li id="laboratorium">
                                            <a class="nav-link" href="{{url('rekam-medis/laboratorium')}}">
                                                Laboratorium
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent" id="modulSetting">
                                    <a class="nav-link" href="#" >
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

                                <li class="nav-parent" id="modulReports">
                                    <a class="nav-link" href="#" >
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
            <!-- end: sidebar -->

            <!-- Content -->
            @yield('content')
            <!-- EndContent -->
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('assets/img/!sample-user.jpg') }}" alt="Joseph Doe"
                                            class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('assets/img/!sample-user.jpg') }}" alt="Joseph Doe"
                                            class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('assets/img/!sample-user.jpg') }}" alt="Joseph Doe"
                                            class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('assets/img/!sample-user.jpg') }}" alt="Joseph Doe"
                                            class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </section>

    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/common/common.js') }}"></script>
    <script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-appear/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
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
    <script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('assets/js/examples/examples.dashboard.js') }}"></script>
    @yield('script')

</body>

</html>


@yield('jscustom')
<script>
    var idRole = "{{ Auth::user()->id_role }}";
    //var auth = "{{Auth::user()->id_dokter}}"
    console.log(idRole);

    allHide();
    loginMenu();
    $(document).ready(function () {



        // console.log('tessst aja');
    });

    function loginMenu() {
        // console.log(idRole);
        if (idRole == 1) {
            petugasLoket();
        } else if (idRole == 2) {
            admin();
        }  else if (idRole == 3) {
            kepalaKlinik();
        } 
		else if (idRole == 4) {
            dokter();
        } 
    }

    function allHide() {
        $('#modulPasien').hide();
        $('#modulDokter').hide();
        $('#modulRekamMedis').hide();
		$('#rekammedis').hide();
		$('#pemeriksaan').hide();
		$('#laboratorium').hide();
        $('#modulSetting').hide();
        $('#modulReports').hide();
        $('#dashboardadmin').hide();
        $('#dashboarduser').hide();
    }

    function petugasLoket() {
        $('#dashboarduser').show();
        $('#modulPasien').show();
    }

    function admin() {
        $('#modulDokter').show();
		$('#modulRekamMedis').show();
        $('#rekammedis').show();
		$('#laboratorium').show();

    }

    function dokter() {
		$('#modulRekamMedis').show();
		$('#pemeriksaan').show();
    }

    function kepalaKlinik() {
		$('#dashboardadmin').show();
		$('#modulSetting').show();
        $('#modulReports').show();
    }

    function superAdmin() {
        $('#modulPasien').show();
        $('#modulDokter').show();
        $('#modulRekamMedis').show();
        $('#modulSetting').show();
        $('#modulReports').show();
    }

</script>
