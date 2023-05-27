<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{route('admin.home')}}"><img src="{{ asset('icon/logo.png') }}" alt></a>
        <a class="small_logo" href="{{route('admin.home')}}"><img src="{{ asset('icon/logo-mini.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a href="{{route('admin.users')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets-admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
        </li>

        <li class>
            <a href="{{route('admin.laporan')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets-admin/img/menu-icon/20.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Laporan </span>
                </div>
            </a>
        </li>

        <li class>
            <a class="has-arrow" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets-admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Community </span>
                </div>
            </a>
            <ul>
                <li><a href="{{route('admin.community')}}">Community</a></li>
                <li><a href="{{route('admin.community.comments')}}">Comments</a></li>
            </ul>
        </li>

        <li class>
            <a href="{{route('admin.content-karya')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets-admin/img/menu-icon/11.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Content Karya </span>
                </div>
            </a>
        </li>

        <li class>
            <a href="{{route('admin.role-permission')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets-admin/img/menu-icon/11.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Role & Permissions</span>
                </div>
            </a>
        </li>
    </ul>
</nav>