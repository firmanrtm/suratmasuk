<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surat Masuk App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap_3_3_6/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/html5shiv_3_7_2.min.js') }}"></script>
    <script src="{{ asset('js/respond_1_4_2.min.js') }}"></script>
</head>

<body>
    <div class="container">
        @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_6/dist/js/bootstrap.min.js') }}"></script>
</body>

</html>