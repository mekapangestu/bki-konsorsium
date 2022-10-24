<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <a href="{{ route('dashboard') }}" class="app-brand-link gap-2">
                    <img src="{{ asset('images/bkilogonew-whitebg.png') }}" class="dashboard-logo" alt="">
                </a>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">KONSORSIUM</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        {{-- Main --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Main</span>
        </li>
        <li class="menu-item">
            <a href="{{ url('/spk') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">SPK</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Menu 2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Sub Menu 1</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Sub Menu 2</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Setting --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Setting</span>
        </li>
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">User Management</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Role Management</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
