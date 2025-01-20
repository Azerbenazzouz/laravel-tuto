<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azer Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Azer Network</h1>
            <a href="/azers">All Azers</a>
            <a href="/azers/create">Create Azers</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>