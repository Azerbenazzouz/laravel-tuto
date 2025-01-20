<x-layout>
  <h2>Currently Available Azers</h2>
  <p>{{ $hi }}</p>

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
</x-layout>