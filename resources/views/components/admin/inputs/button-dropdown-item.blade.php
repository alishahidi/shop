@props([
'href',
'name',
'icon' => null
])
<li>
    <a class="dropdown-item" href="{{ $href }}">
        @if($icon)
        <i class="ms-2 {{ $icon }}"></i>
        @endif
        {{ $name }}
    </a>
</li>