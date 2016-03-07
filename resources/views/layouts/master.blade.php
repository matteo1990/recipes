<!DOCTYPE html>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>
        <link <style type="text/css" href="css/master.css" rel="stylesheet"/>
            
        </style>
    </head>
    <body>
        <h1>Le mie ricette</h1>
        <div class="container">
            <div class="page-header">
            @yield('header')
            </div>
                @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
                @endif
            @yield('content')
        </div>
    </body>
</html>
