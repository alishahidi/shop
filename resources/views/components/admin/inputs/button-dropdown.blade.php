@props([
'name',
'icon' => null,
'slot'
])
<div class="dropdown">
    <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        @if($icon)
        <i class="ms-2 {{ $icon }}"></i>
        @endif
        <span class="ms-1">
            {{ $name }}
        </span>
    </a>
    <ul class="dropdown-menu">
        {{ $slot  }}
    </ul>
</div>