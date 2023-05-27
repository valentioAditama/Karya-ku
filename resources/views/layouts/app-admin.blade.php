<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Karya-ku</title>
    <link rel="icon" href="img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/gijgo/gijgo.min.css') }}" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/datepicker/date-picker.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets-admin/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/css/colors/default.css') }}" id="colorSkinCSS" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>

<body class="crm_body_bg">
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('assets-admin/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets-admin/js/popper1.min.js') }}"></script>

    <script src="{{ asset('assets-admin/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('assets-admin/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/chart.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/am_chart/amcharts.js') }}"></script>

    <script src="{{ asset('assets-admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/scroll/scrollable-custom.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ asset('assets-admin/js/custom.js') }}"></script>
</body>

</html>