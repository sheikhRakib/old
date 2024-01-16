<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="https://ui-avatars.com/api/?bold=true&color=272a6b&name={{ Auth::user()->name ?? 'Full Name'}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="{{ route('portal.userprofile') }}" class="d-block">{{ Auth::user()->name ?? 'Full Name'}} </a>
    </div>
</div>
