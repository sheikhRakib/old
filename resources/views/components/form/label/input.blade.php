<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) ?? $value }}" placeholder="{{ $placeholder }}" {{ $required }} {{ $readonly }}>
    <small id="{{ $name.'Help' }}" class="form-text text-muted">{{ $hint }}</small>

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
