<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Blk• Design System by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/budget/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{asset('assets/budget/css/blk-design-system.css?v=1.0.0')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/budget/demo/demo.css')}}" rel="stylesheet"/>
</head>

<body class="landing-page">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip"
               title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                <span>SISTAPP •</span> Soluções e Sistemas
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>
                            BLK•
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation"
                                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
                       href="https://twitter.com/CreativeTim" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                       href="https://www.facebook.com/CreativeTim" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                       href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Back to Kit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/creativetimofficial/blk-design-system/issues">Have an
                        issue?</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    @yield('content-budget')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="title">BLK•</h1>
                </div>
                <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="../index.html" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../examples/landing-page.html" class="nav-link">
                                Landing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../examples/register-page.html" class="nav-link">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../examples/profile-page.html" class="nav-link">
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://creative-tim.com/contact-us" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/about-us" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/blog" class="nav-link">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://opensource.org/licenses/MIT" class="nav-link">
                                License
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="title">Follow us:</h3>
                    <div class="btn-wrapper profile">
                        <a target="_blank" href="https://twitter.com/creativetim"
                           class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                           data-original-title="Follow us">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/creativetim"
                           class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                           data-original-title="Like us">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="https://dribbble.com/creativetim"
                           class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip"
                           data-original-title="Follow us">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/budget/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/budget/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/budget/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/budget/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/budget/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/budget/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Chart JS -->
<script src="{{asset('assets/budget/js/plugins/chartjs.min.js')}}"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('assets/budget/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('assets/budget/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/budget/demo/demo.js')}}"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/budget/js/blk-design-system.min.js?v=1.0.0')}}." type="text/javascript"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initLandingPageChart();
    });
</script>
</body>

</html>

{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head><title>Salimov - Horizontal Personal Portfolio</title>--}}
{{--    <meta charSet="utf-8"/>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com"/>--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/devicon.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/all.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/bootstrap.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/swiper-bundle.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/animate.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/jquery.mCustomScrollbar.min.css')}}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/budget2/css/styleswitcher.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/budget2/css/skins/yellow.css')}}"/>--}}
{{--    <meta name="next-head-count" content="15"/>--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>--}}
{{--    <link rel="stylesheet" href="../../../assets/budget2/css/style.css"/>--}}
{{--    <style--}}
{{--        data-href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap">--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 100;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCr-x1S2hzjrlffC-M9.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 200;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffp8IesQ.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 300;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffw8EesQ.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCp-x1S2hzjrlfnbA.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffm8AesQ.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlfft8cesQ.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlff08YesQ.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1_FvgUI.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvgUI.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9ogUI.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZogUI.woff) format('woff')--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 100;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCr-x1S2hzjrlffC9M2knjsS_ulYHs.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 100;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCr-x1S2hzjrlffC9M3knjsS_ulYHs.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 100;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCr-x1S2hzjrlffC9M5knjsS_ul.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 200;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffp8Iuul3DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 200;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffp8Iuu13DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 200;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffp8IutV3DY_GtWA.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 300;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffw8Euul3DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 300;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffw8Euu13DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 300;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffw8EutV3DY_GtWA.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCp-x1S2hzjrlfXZ-M7mH_OScuk.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCp-x1S2hzjrlfXZuM7mH_OScuk.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCp-x1S2hzjrlfXaOM7mH_OSQ.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffm8Auul3DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffm8Auu13DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlffm8AutV3DY_GtWA.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlfft8cuul3DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlfft8cuu13DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlfft8cutV3DY_GtWA.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlff08Yuul3DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlff08Yuu13DY_GtWEIJ.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Livvic';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/livvic/v14/rnCq-x1S2hzjrlff08YutV3DY_GtWA.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 400;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 500;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 600;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');--}}
{{--            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF--}}
{{--        }--}}

{{--        @font-face {--}}
{{--            font-family: 'Oswald';--}}
{{--            font-style: normal;--}}
{{--            font-weight: 700;--}}
{{--            font-display: swap;--}}
{{--            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');--}}
{{--            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div id="__next">--}}
{{--    <div id="switcher" class="close" style="display:block">--}}
{{--        <div class="content-switcher"><h4>COLOR SWITCHER</h4>--}}
{{--            <ul>--}}
{{--                <li><a href="#" title="yellow" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/yellow.png"--}}
{{--                            alt="yellow"/></a></li>--}}
{{--                <li><a href="#" title="green" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/green.png" alt="green"/></a>--}}
{{--                </li>--}}
{{--                <li><a href="#" title="red" class="color"><img src="../../../assets/budget/assets/styleswitcher/red.png"--}}
{{--                                                               alt="red"/></a></li>--}}
{{--                <li><a href="#" title="blue" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/blue.png" alt="blue"/></a>--}}
{{--                </li>--}}
{{--                <li><a href="#" title="orange" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/orange.png"--}}
{{--                            alt="orange"/></a></li>--}}
{{--                <li><a href="#" title="yellowgreen" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/yellowgreen.png"--}}
{{--                            alt="yellowgreen"/></a></li>--}}
{{--                <li><a href="#" title="pink" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/pink.png" alt="pink"/></a>--}}
{{--                </li>--}}
{{--                <li><a href="#" title="goldenrod" class="color"><img--}}
{{--                            src="../../../assets/budget/assets/styleswitcher/goldenrod.png"--}}
{{--                            alt="goldenrod"/></a></li>--}}
{{--            </ul>--}}
{{--            <div id="hideSwitcher">×</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div id="showSwitcher" class="styleSecondColor open"><i class="fa fa-cog"></i></div>--}}
{{--    <div id="preloader" class="preloaded">--}}
{{--        <div class="line"></div>--}}
{{--    </div>--}}
{{--    <div class="page-content">--}}
{{--        <header>--}}
{{--            <div class="header-inner hide-mobile">--}}
{{--                <div class="menu">--}}
{{--                    <nav>--}}
{{--                        <ul>--}}
{{--                            <li><span class="active" id="home-link">Home</span></li>--}}
{{--                            <li><span id="about-link">About</span></li>--}}
{{--                            <li><span id="portfolio-link">Portfolio</span></li>--}}
{{--                            <li><span id="contact-link">Contact</span></li>--}}
{{--                            <li><span id="blog-link">Blog</span></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--                <div class="mail"><p>Email :<span> contact@steven.net</span></p></div>--}}
{{--            </div>--}}
{{--            <nav class="mobile-menu">--}}
{{--                <div id="menuToggle"><input type="checkbox" id="checkboxmenu"/><span></span><span></span><span></span>--}}
{{--                    <ul class="list-unstyled" id="menu">--}}
{{--                        <li><a href="#home"><span>Home</span></a></li>--}}
{{--                        <li><a href="#my-photo"><span>About</span></a></li>--}}
{{--                        <li><a href="#portfolio"><span>Portfolio</span></a></li>--}}
{{--                        <li><a href="#contact"><span>Contact</span></a></li>--}}
{{--                        <li><a href="#blog"><span>Blog</span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </header>--}}

{{--        <div id="wrapper">--}}
{{--            <main class="flex-column-mobile">--}}
{{--                @yield('content-budget')--}}
{{--            </main>--}}
{{--        </div>--}}

{{--        <div id="mCSB_1_scrollbar_horizontal"--}}
{{--             class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-3 mCSB_scrollTools_horizontal" style="display: block;">--}}
{{--            <div class="mCSB_draggerContainer">--}}
{{--                <div id="mCSB_1_dragger_horizontal" class="mCSB_dragger"--}}
{{--                     style="position: absolute; min-width: 27px; display: block; width: 123px; max-width: 1181px; left: 0px;">--}}
{{--                    <div class="mCSB_dragger_bar"></div>--}}
{{--                    <div class="mCSB_draggerRail"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="scroll-progress hide-mobile">--}}
{{--            <div>--}}
{{--                <div></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}

{{--<script type="module">--}}
{{--    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';--}}

{{--    const swiperPortfolio = new Swiper('.swiper', {--}}
{{--        direction: 'vertical',--}}
{{--        loop: true,--}}
{{--        pagination: {--}}
{{--            el: '.swiper-pagination',--}}
{{--            clickable: true,--}}
{{--        },--}}
{{--        navigation: {--}}
{{--            nextEl: '.swiper-button-next',--}}
{{--            prevEl: '.swiper-button-prev',--}}
{{--        },--}}
{{--        scrollbar: {--}}
{{--            el: '.swiper-scrollbar',--}}
{{--        },--}}
{{--    });--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
