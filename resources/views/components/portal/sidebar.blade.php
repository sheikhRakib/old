<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('portal.index') }}" class="brand-link">
        <img src="{{ asset('images/nmt.jpeg') }}" alt="NMT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <x-portal.sidebar.item label="Dashboard" route="portal.index" icon="tachometer-alt" />

                <x-portal.sidebar.header label="MANAGEMENT" />
                <x-portal.sidebar.multi-item label="Inventory" route="portal.inventory" icon="circle">
                    <x-portal.sidebar.item label="Add" route="portal.inventory" icon="copy" />
                    <x-portal.sidebar.item label="SS" route="home" icon="copy" />
                </x-portal.sidebar.multi-item>
            </ul>
        </nav>
    </div>
</aside>
