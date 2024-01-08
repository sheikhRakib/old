<div class="form-group">
    <label>{{ $label }}</label>
    <textarea name="{{ $name }}" id={{ $id }} class="form-control" rows="5" placeholder="{{ $placeholder }}" {{ $required }} {{ $readonly }}>{{ old($name) ?? $value }}</textarea>

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
