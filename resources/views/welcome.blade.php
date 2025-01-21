<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azer</title>
    @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to Azer Network</h1>
    <p>Click the button bellow to view the list of Azers.</p>

    <a href="/ninjas" class="btn mt-4 inline-block">
        Find Azers!
    </a>
</body>
</html>