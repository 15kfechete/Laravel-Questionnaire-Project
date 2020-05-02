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

    <div class="grid-x grid-padding-y">
    <div class="cell small-12">
        <div class="card">
            <div class="card-divider">
                Header  
            </div>
            <div class="card-section">
                @yield('content')
            </div>
        </div>
    </div>
    </div>
</div>

<script src="js/app.js"></script>
</body>
</html>

                
