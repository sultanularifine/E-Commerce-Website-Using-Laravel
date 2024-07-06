
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#0"><img src="{{ asset('assets/backend/img/full-logo.png') }}" width="60%"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#0"><img src="{{ asset('assets/backend/img/logo.png') }}" width="60%"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            {{-- <li class="{{ Request::routeIs('admin/roles*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-user-shield"></i> <span>Roles Management</span></a>
            </li> --}}
            @role('Super Admin')
                <li class="menu-header">Control Panel</li>
                <li class="{{ Request::routeIs('users*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users-cog"></i> <span>Users
                            Management</span></a>
                </li>
                <li class="{{ Request::routeIs('staffs*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('staffs.index') }}"><i class="fas fa-user-shield"></i> <span>Staff
                            Permissions</span></a>
                </li>
            @endrole
            <li class="menu-header">Settings</li>
            @role('Super Admin')
                <li class="nav-item dropdown {{ Request::routeIs('status*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-info"></i>
                        <span>Status</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request('type') === 'application' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('status.index', ['type' => 'application']) }}">Application
                                (Others)</a>
                        </li>
                        <li class="{{ request('type') === 'applicant' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('status.index', ['type' => 'applicant']) }}">Application
                                (Malaysia)</a>
                        </li>
                    </ul>
                </li>
            @endrole

            <li class="{{ Request::routeIs('courses*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('courses.index') }}"><i class="fas fa-book"></i> <span>Course
                        Management</span></a>
            </li>

            @role('Super Admin|Staff|Agent')
                <li class="menu-header">Informations</li>
                <li class="{{ Request::routeIs('universities.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('universities.index') }}"><i class="fas fa-building-columns"></i>
                        <span>Universities</span></a>
                </li>
                <li class="{{ Request::routeIs('subjects.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('subjects.index') }}"><i class="fas fa-book"></i>
                        <span>Subjects</span></a>
                </li>
                <li class="menu-header">Downloads</li>
                <li class="{{ Request::routeIs('files.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('files.index') }}"><i class="fas fa-file-export"></i>
                        <span>Files</span></a>
                </li>
                <li class="{{ Request::routeIs('packages.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('packages.index') }}"><i class="fas fa-gift"></i>
                        <span>Special Promotion</span></a>
                </li>
            @endrole
            @role('Super Admin|Staff')
            <li class="{{ Request::routeIs('advertisements.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('advertisements.index') }}"><i class="fas fa-gift"></i>
                    <span>Advertisement Offers</span></a>
            </li>
            <li class="{{ Request::routeIs('services.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('services.index') }}"><i class="fas fa-gift"></i>
                    <span>Service</span></a> 
            </li>
            <li class="{{ Request::routeIs('contacts.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contacts.index') }}"><i class="fas fa-gift"></i>
                    <span>Contact</span></a> 
            </li>
            <li class="{{ Request::routeIs('site_settings.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('site_settings.index') }}"><i class="fas fa-gift"></i>
                    <span>Site Setting</span></a> 
            </li>
            @endrole
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a class="btn btn-primary btn-lg btn-block btn-icon-split" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out"></i> Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </aside>
</div>
