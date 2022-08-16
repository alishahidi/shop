<label for="{{ $name }}" class="mb-3">{{ $label  }}</label>
<input name="{{ $name }}" type="text" class="form-control" placeholder="{{ $placeholder }}" value="{{ old($name) }}">