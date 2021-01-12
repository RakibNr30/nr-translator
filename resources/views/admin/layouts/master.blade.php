<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $global_site->name ?? 'Site Title' }} | {{ 'Admin Panel' }}</title>
    <link rel="icon" type="image/png" href="{{ $global_site->favicon->file_url ?? config('core.image.default.favicon') }}">
    <link rel="stylesheet" href="{{ asset('common/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('common/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Jquery-ui -->
    <link rel="stylesheet" href="{{ asset('common/plugins/jquery-ui/jquery-ui.min.css') }}">
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('common/plugins/datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <!-- include summernote css -->
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm" onload="display_current_time()">
<div class="wrapper">
    @include('admin.partials._header')
    @include('admin.partials._menubar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('admin.partials._right_sidebar')
    @include('admin.partials._footer')
</div>
<script src="{{ asset('common/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('common/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('common/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('common/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('common/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('common/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Datepicker -->
<script src="{{ asset('common/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/js/app.min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<!-- include summernote js -->
<script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200
        });
    });

    $('.select2').select2().on('change', function() {
        //$(this).valid();
    });
    $('.datepicker').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        //startDate: new Date(),
        changeMonth: true,
        changeYear: true,
        autoclose: true
    })
</script>
@yield('script')
</body>
</html>
