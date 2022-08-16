@props([
'active' => false,
'href' => '#',
'name'
])
@if($active)
<li class="breadcrumb-item active">{{ $name }}</li>
@else
<li class="breadcrumb-item"><a href="{{ $href  }}">{{ $name }}</a></li>
@endif