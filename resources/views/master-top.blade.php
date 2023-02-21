<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="/theme/css/styles.css">
    <!-- EOF CSS INCLUDE -->
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

                    <img src="/logo_indorama.png">
                    <div class="app-header-buttons pull-right">
                        @if (isset(auth()->user()->name))
                            Welcome,<a href="/profile"> <strong> {{ auth()->user()->name }}</strong></a>
                            <a href="/logout" class="btn btn-sm btn-danger">Log Out</a>
                        @else
                            <a href="/login" class="btn btn-sm btn-info">Login</a>
                        @endif

                    </div>
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
                                    <a href="/"><span class="icon-earth"></span> Home</a>
                                </li>
                                @if (isset(auth()->user()->name))
                                    <li>
                                        <a href="/profile"><span class="icon-user"></span> My Profile</a>
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
                        <h1>@yield('judul')</h1>

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
</body>

</html>
