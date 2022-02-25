<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!--print-->
    {{-- <link rel="stylesheet" href=" https://printjs-4de6.kxcdn.com/print.min.css"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Modal -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/prism/prism.css') }}">
    <!-- Form Select 2 -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
    <!-- SummerNote Editor -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/codemirror/theme/duotone-dark.css') }}">
    <!-- DateTimePicker -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

    {{-- DataTable New --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/cr-1.5.5/date-1.1.1/fc-4.0.1/fh-3.2.1/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.4/sr-1.0.1/datatables.min.css"/>


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />
    <!-- toaster -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
    @yield('css')
    {{-- @routes --}}
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('partials._navbar')
            @include('partials._sidebar')
            <!-- Main Content -->
            <div class="main-content" style="padding-top: 100px !important;">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            @include('partials._footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- Modals -->
    <script src="{{ asset('assets/bundles/prism/prism.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    {{-- DataTable New --}}

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/cr-1.5.5/date-1.1.1/fc-4.0.1/fh-3.2.1/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.4/sr-1.0.1/datatables.min.js">
    </script>


    <!-- DateTimePicker -->
    <script src="{{ asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
    <!-- SummerNote Editor -->
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/bundles/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/ckeditor.js') }}"></script>
    <!-- Form Select 2 -->
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- toaster -->
    <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    {{-- session toaster config page --}}
    <script src="{{ asset('assets/js/page/toastr.js') }}"></script>



    <script>
        $(document).ready( function () {
         $('#tableExport').DataTable();
     } );

     $(document).ready( function () {
         $('#tableExport1').DataTable();
     } );
     </script>
    <script>

        // Toastr
        @if (Session::has('success'))
            iziToast.success({
            message: "{{ Session::get('success') }}",
            position: 'topRight'
            });
        @endif

        @if (Session::has('info'))
            iziToast.info({
            message: "{{ Session::get('info') }}",
            position: 'topRight'
            });
        @endif

        @if (Session::has('error'))
            iziToast.error({
            message: "{{ Session::get('error') }}",
            position: 'topRight'
            });
        @endif

        @if (Session::has('warning'))
            iziToast.warning({
            message: "{{ Session::get('warning') }}",
            position: 'topRight'
            });
        @endif
    </script>

    @yield('js')
</body>

</html>
