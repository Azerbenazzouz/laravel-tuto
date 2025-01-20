@props(['highlight' => false])

<div @class(['hignlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View Details</a>
    <a {{ $attributes }} class="btn">View Details</a>
</div>