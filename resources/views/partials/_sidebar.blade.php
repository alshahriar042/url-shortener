<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo mt-2" />
            </a>
        </div>
        <ul class="sidebar-menu">

            {{-- dashboard --}}
            <li class="dropdown">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            {{-- jobs --}}
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="sliders"></i><span>Reports</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Report</a></li>

                </ul>
            </li>


    </aside>
</div>
