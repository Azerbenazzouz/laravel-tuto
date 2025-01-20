<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azer Network</title>
</head>
<body>
  <h2>Currently Available Azers</h2>
  <p>{{ $hi }}</p>
  <ul>
    <li>
      <a href={{"/azers/".$azers[0]["id"]}}>
        {{ $azers[0]["name"] }}
      </a>
    </li>
    <li>
      <a href={{"/azers/".$azers[1]["id"]}}>
        {{ $azers[1]["name"] }}
      </a>
    </li>
    <li>
      <a href={{"/azers/".$azers[2]["id"]}}>
        {{ $azers[2]["name"] }}
      </a>
    </li>
  </ul>
  
</body>
</html>