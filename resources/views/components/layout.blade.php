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
            <a href="{{ route('ninjas.index') }}">All Ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>