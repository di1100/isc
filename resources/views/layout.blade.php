<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<script src="{{asset("jquery.js")}}"></script>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@yield('title')
</head>
<body>
    <header>Header</header>
    <nav>
        @include('menu')
    </nav>
    <section class="main-section">
        <article>@yield('content')</article>
    </section>
    
    
    
</body>
</html>

