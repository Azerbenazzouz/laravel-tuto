<x-layout>
  <h2>Currently Available Azers</h2>
  <p>{{ $hi }}</p>

  <ul>
    @foreach ($azers as $azer)
      <li>
        <x-card href="/azers/{{$azer['id']}}"  :highlight="$azer['skill'] > 50">
          <h3>{{ $azer["name"] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>