<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('front/images/logo.png') }}" alt="" style="max-width: 85%">
                <img class="img-fluid for-dark" src="{{ asset('front/images/logo.png') }}" alt="" style="max-width: 85%">
            </a>
            <div class="toggle-sidebar">
                <svg class="sidebar-toggle">
                    <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid" src="{{ asset('back/assets/images/logo/logo-icon.png') }}" alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('admin.dashboard') }}">
                            <img class="img-fluid" src="{{ asset('back/assets/images/logo/logo-icon.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#fill-home"></use>
                            </svg>
                            <span class="lan-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#stroke-maps"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#fill-maps"></use>
                            </svg>
                            <span>Find Customer</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Customers List</a></li>
                            <li><a href="#">New Customer</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#stroke-blog"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#fill-blog"></use>
                            </svg><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Blog List</a></li>
                            <li><a href="#">Add Blog</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Actions</h6>
                        </div>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i data-feather="log-in"></i>
                            <span>logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
