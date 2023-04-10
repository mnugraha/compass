<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Kompas Indorama</title>

    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="/theme/css/styles.css">
    <!-- EOF CSS INCLUDE -->
    <style>
        .container1 {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <!-- APP WRAPPER -->
    <div class="app">

        <!-- START APP CONTAINER -->
        <div class="app-container">
            <!-- START APP HEADER -->
            <div class="app-header">
                <div class="container container-boxed">
                    <ul class="app-header-buttons visible-mobile">
                        <li><a href="#" class="btn btn-link btn-icon"
                                data-navigation-horizontal-toggle="true"><span class="icon-menu"></span></a></li>
                    </ul>

                    <img src="/logo-header.png" height="70px" width="auto" style="padding-bottom: 10px">
                    <div class="app-header-buttons pull-right" style="margin-top: 10px">
                        @if (isset(auth()->user()->name))
                            Welcome,<a href="/profile-en"> <strong> {{ auth()->user()->name }}</strong></a> -
                            <select onchange="if (this.value) window.location.href=this.value">
                                <option value="/profile">Indonesia</option>
                                <option value="/profile-en" selected>English</option>
                            </select>
                            {{-- <a href="/"><img src="idn.png" height="10px"
                                    style="margin-bottom: 5px; margin-right: 3px"></img>Versi Indonesia</a> --}}
                            <a href="/logout" class="btn btn-xs btn-danger "
                                style="box-shadow: -1px 1px 3px #888888; margin-left: 20px; color: darkslategray"><span
                                    class="fa fa-power-off" style="color: black; padding-right: 5px"></span> Log Out</a>
                        @else
                            <select onchange="if (this.value) window.location.href=this.value">
                                <option value="/">Indonesia</option>
                                <option value="/en" selected>English</option>
                            </select>
                            {{-- <a href="/"><img src="idn.png" height="10px"
                                    style="margin-bottom: 5px; margin-right: 3px"></img>Versi Indonesia</a> --}}
                            <a href="/login" class="btn btn-sm btn-info"
                                style="box-shadow: -1px 1px 3px #888888; margin-left: 20px"><span class="fa fa-sign-in"
                                    style="padding-right: 5px"></span> Login</a>
                        @endif

                    </div>
                    <hr style="border-top: 1px solid black;">
                </div>
            </div>
            <!-- END APP HEADER  -->

            <!-- START APP CONTENT -->
            <div class="app-content">
                <div class="app-navigation-horizontal margin-bottom-15">
                    <div class="container container-boxed">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/en"><span class="icon-home"></span> Home</a>
                                </li>
                                @if (isset(auth()->user()->name))
                                    <li>
                                        <a href="/profile-en"><span class="icon-user"></span> My Profile</a>
                                    </li>
                                    <li>
                                        <a href="/book_en"><span class="icon-book"></span> Hand Book</a>
                                    </li>

                                    <li>
                                        <a href="/video_en"><span class="icon-film-play"></span> Video</a>
                                    </li>
                                    <li>
                                        <a href="/test"><span class="icon-license"></span> Assessment</a>
                                    </li>
                                    <li>
                                        <a href="/faq_en"><span class="icon-bubble"></span> FAQ</a>
                                    </li>
                                @endif
                                {{-- <li>
                                    <a href="#"><span class="icon-sync"></span> Materi</a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-cog"></span> Ujian</a>
                                    <ul>
                                        <li><a href="pages-bank-settings.html">Account</a></li>
                                        <li><a href="pages-bank-security.html">Security</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- START PAGE CONTAINER -->
                <div class="container container-boxed">
                    <div class="title">

                        <h1 style="font-weight: 700">@yield('judul')</h1>

                    </div>
                    @yield('konten-tanpa-frame')
                    <!--
                    <div class="block block-condensed">
                        <div class="block-content margin-top-15">
                            
                        </div>
                    </div>  -->

                </div>
                <!-- END PAGE CONTAINER -->
            </div>
            <!-- END APP CONTENT -->
        </div>
        <!-- END APP CONTAINER -->

        <!-- START APP FOOTER -->
        <div class="app-footer app-footer-default" id="footer">

            <div class="container container-boxed">
                <div class="app-footer-line">
                    <div class="copyright">@yield('footer')
                    </div>

                </div>
            </div>

        </div>
        <!-- END APP FOOTER -->
    </div>
    <!-- END APP WRAPPER -->

    <!--
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text-center margin-bottom-20">
                            <img src="assets/images/smile.png" alt="Thank you" style="width: 100px;">
                        </p>
                        <h3 id="modal-thanks-heading" class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center"></h3>
                        <p class="text-muted text-center margin-bottom-10">Thank you so much for likes</p>
                        <p class="text-muted text-center">We will do our best to make<br> Boooya template perfect</p>
                        <p class="text-center"><button class="btn btn-success btn-clean" data-dismiss="modal">Continue</button></p>
                    </div>
                </div>
            </div>
        </div>-->

    <!-- IMPORTANT SCRIPTS -->
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/moment/moment.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <!-- END IMPORTANT SCRIPTS -->
    <!-- THIS PAGE SCRIPTS -->

    <!-- END THIS PAGE SCRIPTS -->
    <!-- APP SCRIPTS -->
    <script type="text/javascript" src="/theme/js/app.js"></script>
    <script type="text/javascript" src="/theme/js/app_plugins.js"></script>
    <script type="text/javascript" src="js/app_demo.js"></script>
    <!-- END APP SCRIPTS -->
    <script type="text/javascript" src="/theme/js/vendor/highlight/jquery.highlight.js"></script>
    <script type="text/javascript" src="/theme/js/app_faq.js"></script>
</body>

</html>
