<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <script src="https://kit.fontawesome.com/1cd7623aae.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <div id="app">
            <div class="wrapper">
                <div class="content">
                    <header-part :route="`<?= $route ?>`"></header-part>
                    @yield('content')
                </div>
                <footer-part></footer-part>
            </div>
            <search-modal></search-modal>
        </div>
        <script>
            "use strict";
            window.vueData = {}
        </script>
        @stack('vue-data')
        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
