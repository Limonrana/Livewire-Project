<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        @livewireStyles
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            button.btn-count {
                padding: 0px 15px;
                font-size: 30px;
                margin-left: 22px;
                margin-right: 20px;
                color: white;
                background: #007eff;
                border: none;
                border-radius: 5px;
            }
            .links {
                text-align: center;
                padding-bottom: 5%;
                padding-top: 2%;
            }
        </style>
    </head>
    <body>
    <livewire:counter />
    <livewire:comment />
    @livewireScripts
    </body>
</html>
