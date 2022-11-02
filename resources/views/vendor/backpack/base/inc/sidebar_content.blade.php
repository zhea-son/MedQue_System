{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

@if (backpack_user()->hasRole('Admin'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="la la-users nav-icon"></i>
            Users</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-user-tag"></i>
            Roles</a></li>
@endif

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dept') }}"><i class="nav-icon la la-question"></i> Depts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('app') }}"><i class="nav-icon la la-question"></i> Apps</a></li>