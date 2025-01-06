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
                    <div class="parent-icon"><i class="fa-brands fa-product-hunt"></i>
                    </div>
                    <div class="menu-title">Product Manage</div>
                </a>
                <ul>
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="material-icons-outlined">arrow_right</i>
                                products
                            </a>
                        </li>
                </ul>
            </li>

        </ul>
        <!--end navigation-->
    </div>
</div>
