@props([
'name',
'label',
'placeholder' => null,
])
<label for="{{ $name }}" class="mb-3">{{ $label }}</label>
<select name="{{ $name }}" class="form-control">
    @if($placeholder)
    <option value="">{{ $placeholder  }}</option>
    @endif
    {{ $slot }}
</select>