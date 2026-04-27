<head>
    <meta charset="UTF-8">
    <title>PERPUSTAKAAN DIGITAL</title>

    <!-- CSS utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- MDI ICON (FIX) -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

<body>
<div class="container-scroller">

    <!-- SIDEBAR -->
    @include('layout.frontend.sidebar')

    <div class="container-fluid page-body-wrapper">

        <!-- NAVBAR -->
        @include('layout.frontend.navbar')

        <!-- CONTENT -->
        <div class="main-panel">
       <div class="content-wrapper">
        @yield('content')
       </div>
       </div>

    </div>
</div>

<!-- JS -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<style>
/* FULL LAYOUT */
.content-wrapper {
    width: 100% !important;
    max-width: 100% !important;
    padding: 20px !important;
    margin: 0 !important;
}

/* PANEL */
.main-panel {
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 !important;
}

/* WRAPPER */
.page-body-wrapper {
    width: 100% !important;
}

/* CONTAINER FIX (INI PENTING BANGET) */
.container {
    max-width: 100% !important;
}

/* CARD FULL */
.card {
    width: 100% !important;
}

/* TABLE */
.table-responsive {
    width: 100% !important;
}
</style>
</body>
</html>