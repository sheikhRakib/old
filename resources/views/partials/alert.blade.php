@if (Session::has('success'))
    <x-ui.alert name="Success" :message="Session::get('success')" />
@endif

@if (Session::has('warning'))
    <x-ui.alert name="Warning" :message="Session::get('warning')" />
@endif

@if (Session::has('info'))
    <x-ui.alert name="Info" :message="Session::get('info')" />
@endif

@if (Session::has('error'))
    <x-ui.alert name="Error" :message="Session::get('error')" />
@endif
