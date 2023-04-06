@props([
'name',
'label',
'values',
'placeholder' => null,
'key' => 'id',
'value' => 'name'
])
<label for="{{ $name }}" class="mb-3">{{ $label }}</label>
<select name="{{ $name }}" class="form-control">
    @if($placeholder)
    <option value="">{{ $placeholder  }}</option>
    @endif
    @foreach($values as $_value)
    <option value="{{ $_value->{$key} }}">{{ $_value->{$value} }}</option>
    @endforeach
</select>