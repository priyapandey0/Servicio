<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @yield('title')
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Favicons --}}
    <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    {{-- Google Fonts --}}
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{--  jQuery CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- CKeditor5 CDN --}}
    <!-- Include CKEditor styles and scripts -->
    <link href="https://cdn.ckeditor.com/ckeditor5/35.0.0/classic/theme-classic.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.0/classic/ckeditor.js"></script>
    
    {{-- CKeditor5 file --}}
    <link href="{{ asset('backend/assets/css/ckeditor.css') }}" rel="stylesheet">

    {{-- Vendor CSS Files --}}
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    {{-- Template Main CSS File --}}
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    {{-- ======= Header ======= --}}
    @include('backend.layout.header.header')

    {{-- End Header --}}

    {{-- ======= Sidebar ======= --}}
    @include('backend.layout.sidebar.sidebar')

    {{-- End Sidebar --}}

    <main id="main" class="main">
        @include('backend.layout.flashmsg.flashmsg')
        @yield('content')

    </main>{{-- End #main --}}

    {{-- ======= Footer ======= --}}
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SServicio</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Xteam Consultant</a>
        </div>
    </footer>{{-- End Footer --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Ckeditor file  --}}
    <script src="{{ asset('backend/assets/js/ckeditor.js') }}"></script>

    {{-- Vendor JS Files --}}
    <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

    {{-- Template Main JS File --}}
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/logout.js') }}"></script>
    <script src="{{ asset('backend/assets/js/flashmsg.js') }}"></script>

</body>

</html>
