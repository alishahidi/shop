@props([
'name',
'label',
'values',
'placeholder' => null
])
<label for="{{ $name }}" class="mb-3">{{ $label }}</label>
<select name="{{ $name }}" class="form-control">
    @if($placeholder)
    <option value="">{{ $placeholder  }}</option>
    @endif
    @foreach($values as $value)
    <option value="{{ $value->id  }}">{{ $value->name }}</option>
    @endforeach
</select>