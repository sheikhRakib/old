<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" {{ $required }} {{ $readonly }} value="{{ old($name) ?? $value }}">
    <small id="{{ $name.'Help' }}" class="form-text text-muted">{{ $hint }}</small>

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
