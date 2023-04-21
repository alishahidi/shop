<form action="{{ $href }}" method="{{ $method }}">
    @if($type)
    @method($type)
    @endif
    @csrf
    {{ $slot }}
</form>