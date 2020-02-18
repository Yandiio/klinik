<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login Member</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Aplikasi Online Test TNI">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/pnotify/pnotify.custom.css') }}" />

</head>

<body>

    <div class="body">

        <div role="main" class="main">

            <div class="slider-with-overlay">

                <div class="slider-container rev_slider_wrapper" style="height: 100px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7"
                        data-plugin-revolution-slider
                        data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 660, 'responsiveLevels': [4096,1200,992,500]}">

                        <img src="{{ asset('assets/img/dark-cover.jpg') }}" alt="" style="width:1700; height:800px;"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" />
                    </div>
                </div>
                <div class="slider-contact-form">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-5">
                                <div class="featured-boxes mt-0 mb-0">
                                    <div class="featured-box featured-box-primary mt-5">
                                        <div class="box-content">
                                            <h4 class="mb-0">Login Aplikasi</h4>
                                            <form id="frmLogin" action="#" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-12">
                                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                                        <label>Nama</label>
                                                        <input type="text" maxlength="100" class="form-control"
                                                            name="name" id="name" placeholder="Nomor Peserta" required>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Password</label>
                                                        <input type="password" maxlength="100" class="form-control"
                                                            name="password" id="password" placeholder="Password"
                                                            required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <input type="submit" value="Login!" class="btn btn-primary mb-5"
                                                            id="btnLogin" data-loading-text="Loading...">

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Vendor -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-cookie.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easy-pie-chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vide.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <!-- <script src="{{ asset('assets/js/theme.js') }}"></script> -->

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/js/view.contact.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('assets/vendor/pnotify/pnotify.custom.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootbox/bootbox.min.js') }}"></script>

    <!-- Theme Initialization Files -->
    <!-- <script src="{{ asset('assets/js/theme.init.js') }}"></script> -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->
    <script>
        /*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/
        var mapMarkers = [{
            address: "New York, NY 10017",
            html: "<strong>New York Office</strong><br>New York, NY 10017",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            },
            popup: true
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 16
        };

    </script>
    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-12345678-1', 'auto');
        ga('send', 'pageview');

    </script>


</body>

</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#frmLogin').on('submit', function (e) {
            var nama = $("#name").val();
            var password = $("#password").val();
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                }
            });
            $.ajax({
                type: "POST",
                url: "{{route('post_login')}}",
                cache: false,
                data: {
                    'nama': nama,
                    'password': password
                },
                success: function (data) {
                    //console.log(data);
                    window.location.href = "{{ url ('dashboard') }}";
                    

                }
            });
        });
    });

</script>
