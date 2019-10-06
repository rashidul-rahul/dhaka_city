
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/backend/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/toastr.min.css') }}">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/backend/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('assets/backend/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('assets/backend/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/backend/css/themes/all-themes.css') }}" rel="stylesheet" />
    @stack('css')
</head>

<body class="theme-blue">
<!-- Page Loader -->
@include('layouts.backend.partial.loader')
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('home') }}">Dhaka City</a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
@include('layouts.backend.partial.sidebar')

<section class="content">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
{{--<script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>--}}

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('assets/backend/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset('assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/backend/js/admin.js') }}"></script>
<!-- Custom Js -->
@stack('js')
{{--<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>--}}
<script src="{{ asset('assets/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error', {
        'closeButton':'true',
        'progressBar':'true'
    });
    @endforeach
    @endif
</script>
<!-- Demo Js -->
<script src="{{ asset('assets/backend/js/demo.js') }}"></script>
</body>

</html>
