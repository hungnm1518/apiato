<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta content="Admin Control Panel by Hưng Nguyễn" name="description">
    <meta content="Hưng Nguyễn [Email: hungnm144@live.com | Phone: 0982061616]" name="author">
    <!--<link rel="stylesheet" href="{{mix('css/app.css')}}">-->
    <!--begin::Web font -->
    <link href="/backend/fonts/poppins/font.css" rel="stylesheet" type="text/css" />
    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="/backend/plugins/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/backend/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="/backend/js/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="/backend/img/logo/favicon.ico" />

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>
<body>
<div id="app">
    <!-- Sử dụng component Example.vue -->
    <example></example>
</div>

<script src="{{mix('js/app.js')}}"></script>
</body>
</html>