<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="/"><span class="brand-logo">
                        </span>
                        <img src="../../../Logo_sidebar.png" alt="" height="30">
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{ Request::is('/', 'dashboard') ? 'active' : 'nav-item' }}"><a
                        class="nav-link d-flex align-items-center" href="/"><i data-feather="home"></i><span
                            class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class="{{ Request::is('simulasi') ? 'active' : 'nav-item' }} "><a
                        class="nav-link d-flex align-items-center" href="/simulasi"><i data-feather="monitor"></i><span
                            class="menu-title text-truncate" data-i18n="home">Simulasi</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->
