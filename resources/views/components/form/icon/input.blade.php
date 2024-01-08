<div class="input-group mb-3">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) ?? $value }}" placeholder="{{ $placeholder }}" {{ $disabled }}>
    <div class="input-group-append">
        <div class="input-group-text">
            <i class="fas {{ $icon }}"></i>
        </div>
    </div>
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
