<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Welcome @yield('title')</title>
        <script type="text/javascript" src="<?php echo app('url')->asset('js/script.js') ?>"></script>
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="/images/logo.gif" class="logo"/>
                @section('body')
                @show
            </div>
        </div>
    </body>
</html>
