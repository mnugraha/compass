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
            <!-- Header Menu Samping -->
            <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left"
                data-type="close-other">
                <!-- Menu Samping -->
                <nav>
                    <ul>
                        <li class="title" style="font-weight: 700">Menu</li>
                        <li>
                            <a href="/"><span class="fa fa-align-justify" style="color: white"></span>
                                Dashboards</a>
                        </li>
                        <li>
                            <a href="/user"><span class="fa fa-user" style="color: white"></span> User</a>
                        </li>
                        <li>
                            <a href="/Dkompetensi"><span class="fa fa-bar-chart-o" style="color: white"></span>
                                Kompetensi</a>
                        </li>
                        <li>
                            <a href="/Dlevel"><span class="fa fa-bank" style="color: white"></span> Level</a>
                        </li>
                        <li>
                            <a href="/Dvalue"><span class="fa fa-archive" style="color: white"></span> Value</a>
                        </li>
                        <li>
                            <a href="/Dfunction"><span class="fa fa-male" style="color: white"></span> Function</a>
                        </li>
                        <li>
                            <a href="/Dstruktur"><span class="fa fa-sitemap" style="color: white"></span> Struktur</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- END SIDEBAR -->

            <!-- START APP CONTENT -->
            <div class="app-content app-sidebar-left">
                <!-- HEADER ATAS -->
                <div class="app-header app-header-design-default">
                    <ul class="app-header-buttons">
                        <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon"
                                data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon"
                                data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                    </ul>
                    <ul class="app-header-buttons pull-right">
                        <li>
                            <a href="pages-login.html" class="btn btn-default btn-icon"><span
                                    class="icon-power-switch"></span></a>
                        </li>
                    </ul>
                </div>
                <!-- END APP HEADER  -->

                <!-- START PAGE HEADING -->
                <div class="app-heading app-heading-bordered app-heading-page">
                    <div class="title">
                        <h1>@yield('judul') </h1>

                    </div>
                    <!--
                        <div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>
                        -->
                </div>
                <!--
                <div class="app-heading-container app-heading-bordered bottom">
                    <ul class="breadcrumb">
                        <li><a href="#">Application</a></li>
                        <li><a href="#">Messages</a></li>
                        <li class="active">Profile Card</li>
                    </ul>
                </div>  -->
                <!-- END PAGE HEADING -->

                <!-- START PAGE CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- PROFILE CARD -->
                            <div class="block block-condensed">
                                <div class="block-heading margin-bottom-0">
                                    <div class="app-heading app-heading-small">
                                        <p style="font-size: 20px;">@yield('sub-judul')</p>
                                    </div>
                                </div>
                                <div class="block-content row-table-holder">
                                    <div class="row row-table">
                                        <div class="col-md-12 col-xs-12">
                                            @yield('konten')
                                        </div>
                                    </div>

                                    <div class="row row-table">
                                        <div class="col-xs-12">
                                            @yield('footer')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CARD -->
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTAINER -->
            </div>
            <!-- END APP CONTENT -->
        </div>
        <!-- END APP CONTAINER -->
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
    <!-- APP SCRIPTS -->
    <script type="text/javascript" src="/theme/js/app.js"></script>
    <script type="text/javascript" src="/theme/js/app_plugins.js"></script>
    <!-- END APP SCRIPTS -->
    <script type="text/javascript" src="/theme/js/vendor/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/datatables/dataTables.bootstrap.min.js"></script>
</body>

</html>
