@props(['link'])

<li class="nav-item active">
    <a class="nav-link" href="{{ $link }}">
        <span>{{ $slot }}</span></a>
</li>
