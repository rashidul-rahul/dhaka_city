<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/toastr.min.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">

<!-- Modernizer for Portfolio -->
<script src="{{ asset('assets/frontend/js/modernizer.js') }}"></script>
@stack('css')
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- LOADER -->
@include('layouts.frontend.partial.preLoader')
<!-- END LOADER -->

{{--@include('layouts.frontend.partial.topBar')--}}
@include('layouts.frontend.partial.header')


<!-- end section -->
@yield('content')


@include('layouts.frontend.partial.footer')

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('assets/frontend/js/all.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
<script src="{{ asset('assets/frontend/js/portfolio.js') }}"></script>
<script src="{{ asset('assets/frontend/js/hoverdir.js') }}"></script>

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
</body>
</html>
