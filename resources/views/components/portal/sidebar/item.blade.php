<li class="nav-item">
    <a href="{{ route($route) }}" class="nav-link @if ($active) active @endif">
        <i class="nav-icon fas fa-{{ $icon }}"></i>
        <p>
            {{ $label }}
            @if ($badge)
                <span class="right badge badge-danger">{{ $badge }}</span>
            @endif
        </p>
    </a>
</li>
