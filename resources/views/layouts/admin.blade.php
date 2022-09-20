<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend_asset') }}/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Laravel Practics</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend_asset') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('backend_asset') }}/css/style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend_asset') }}/css/icons.css" rel="stylesheet" />

    <link href="{{ asset('backend_asset') }}/css/parsley.css" rel="stylesheet" />

    <!-- JQUERY JS -->
    <script src="{{ asset('backend_asset') }}/js/jquery.min.js"></script>





</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backend_asset') }}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->


    <div class="page">

        @guest
        @else

        {{-- Header --}}
        @include('admin.partials._header');

        {{-- Sidebar --}}
        @include('admin.partials._sitebar');



        <div class="main-content app-content mt-0">

            <div class="side-app">

                
                @endguest
                @yield('admin_content')
                

            </div>


        </div>


    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend_asset') }}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('backend_asset') }}/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="{{ asset('backend_asset') }}/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('backend_asset') }}/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('backend_asset') }}/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('backend_asset') }}/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backend_asset') }}/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/p-scroll/pscroll.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('backend_asset') }}/plugins/chart/Chart.bundle.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/chart/rounded-barchart.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('backend_asset') }}/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('backend_asset') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('backend_asset') }}/js/apexcharts.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('backend_asset') }}/plugins/flot/jquery.flot.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('backend_asset') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('backend_asset') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('backend_asset') }}/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="{{ asset('backend_asset') }}/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="{{ asset('backend_asset') }}/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('backend_asset') }}/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('backend_asset') }}/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backend_asset') }}/js/custom.js"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('backend_asset') }}/plugins/fileuploads/js/fileupload.js"></script>
    <script src="{{ asset('backend_asset') }}//plugins/fileuploads/js/file-upload.js"></script>

    <!-- DATA TABLE JS-->
    {{-- <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script> --}}
    <script src="{{ asset('backend_asset') }}/js/table-data.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

    <script>
        $('#form').parsley();
    </script>

    @yield('Admin_js_content')


</body>

</html>
