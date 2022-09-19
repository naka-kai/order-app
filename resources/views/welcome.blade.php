<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <p>Vite, Vue</p>
        <div id="app">
            <span v-text="greeting"></span>
        </div>
    </body>
</html>
