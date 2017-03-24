<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src="{{asset("jquery.js")}}"></script>
@yield('title')
</head>
<body>
    @include('menu')
    </hr>
    @yield('content')
    
    
    
</body>
</html>

