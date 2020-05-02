<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">

    </head>
<body>
<div class="grid-container">

    @include('includes.header')

     @yield('content')

</div>
<script src="js/app.js"></script>
</body>
</html>

                
