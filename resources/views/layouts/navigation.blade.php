<!-- Authentication -->
@if (Auth::guard('admin')->check())
<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <x-dropdown-link :href="route('admin.logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
@else
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
@endif
