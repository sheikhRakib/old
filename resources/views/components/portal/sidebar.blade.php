<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <a href="{{ route('portal.index') }}" class="brand-link">
        <img src="{{ asset('images/nmt.jpeg') }}" alt="NMT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <x-portal.sidebar.user-card />

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <x-portal.sidebar.item label="Dashboard" route="portal.index" icon="tachometer-alt" />

                <x-portal.sidebar.header label="EMPLOYEE MANAGEMENT" />
                <x-portal.sidebar.multi-item label="Employees" route="portal.employee" icon="users">
                    <x-portal.sidebar.item label="Index" route="portal.employee.index" icon="address-card" />
                    <x-portal.sidebar.item label="Invite" route="portal.employee.invite" icon="user-plus" />
                </x-portal.sidebar.multi-item>


                <li class="nav-item fixed-bottom">
                    <a href="#" class="nav-link btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
