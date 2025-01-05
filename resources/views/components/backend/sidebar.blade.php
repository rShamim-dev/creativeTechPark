<div>
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Maxton</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li class="menu-label">UI Elements</li>

            {{-- Users --}}
            <li>

                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-users"></i>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
                <ul>
                    @can('users.index')
                        <li>
                            <a href="{{ route('users.index') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Users
                            </a>
                        </li>
                    @endcan
                    @can('role.index')
                        <li>
                            <a href="{{ route('users.role') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Roles
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <!--  Pages Manage-->
            @can('pages.index')
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-brands fa-space-awesome"></i>
                        </div>
                        <div class="menu-title">Content</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('pages.index') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Pages
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-sliders"></i>
                    </div>
                    <div class="menu-title">Settings</div>
                </a>
                <ul>
                    @can('site.settings')
                        <li>
                            <a href="{{ route('site.settings') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Site Settings
                            </a>
                        </li>
                    @endcan
                    @can('seo.settings')
                        <li>
                            <a href="{{ route('seo.settings') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Seo Settings
                            </a>
                        </li>
                    @endcan
                    @can('social.settings')
                        <li>
                            <a href="{{ route('social.settings') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Social Settings
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</div>
