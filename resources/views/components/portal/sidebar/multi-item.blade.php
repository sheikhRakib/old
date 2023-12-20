<li class="nav-item @if ($active) menu-open @endif">
    <a href="#" class="nav-link @if ($active) active @endif">
        <i class="nav-icon fas fa-{{ $icon }}"></i>
        <p>
            {{ $label }}
            <i class="right fas fa-angle-left"></i>
            <span class="badge badge-danger right">{{ $badge }}</span>
        </p>
    </a>
    <ul class="nav nav-treeview" style="opacity: .7">
        {{ $slot }}
    </ul>
</li>
