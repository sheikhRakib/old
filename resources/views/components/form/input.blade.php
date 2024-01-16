<!-- {{ $label }} -->
<div class="input-group mb-3">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}"
        class="form-control @error($name) is-invalid @enderror" value="{{ old($name) ?? $value }}"
        placeholder="{{ $placeholder }}" {{ $disabled }}>
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!-- ./{{ $label }} -->
