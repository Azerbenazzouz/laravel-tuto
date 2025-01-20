<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azer Network</title>
</head>
<body>
  <h2>Currently Available Azers</h2>
  <p>{{ $hi }}</p>

  @if ($hi == "Hello World")
    <p>Hi from inside if statement</p>
  @endif

  <ul>
    @foreach ($azers as $azer)
      <li>
        <p>{{ $azer["name"] }}</p>
        <a href="/azers/{{$azer['id']}}"">
          view Details
        </a>
      </li>
    @endforeach
  </ul>
  
</body>
</html>