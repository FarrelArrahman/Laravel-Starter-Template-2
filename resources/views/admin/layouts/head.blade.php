<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SI-Pertandingan | @yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-admin/css/bootstrap.css') }}">
    
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/choices.js/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/vendors/toastify/toastify.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="{{ asset('mazer-admin/images/favicon.svg') }}" type="image/x-icon">
    <style>
        table.dataTable td{
            padding: 15px 8px;
        }
        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>
    @yield('css')
</head>