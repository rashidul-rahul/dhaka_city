<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('assets/backend/images/profile.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="#">
                                <i class="material-icons">face</i>
                                {{ __('Profile') }}
                            </a>
                        </li>
                        <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="material-icons" >input</i>
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                @if(Request::is('admin*'))
                    <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category*') ? 'active':'' }}">
                        <a href="{{ route('admin.category.index') }}">
                            <i class="material-icons">category</i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li class="header">Settings</li>
                    <li>
                    <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons" >input</i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </li>
                    <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    </li>
                @endif
                @if(Request::is('moderator*'))
                    <li class="{{ Request::is('moderator/dashboard') ? 'active':'' }}">
                        <a href="{{ route('moderator.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="header">Settings</li>
                    <li>
                    <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons" >input</i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </li>
                    <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    </li>
                @endif
                @if(Request::is('user*'))
                    <li class="{{ Request::is('user/dashboard') ? 'active':'' }}">
                        <a href="{{ route('user.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="header">Settings</li>
                    <li>
                    <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons" >input</i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </li>
                    <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    </li>
                @endif
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">Dhaka City Admin Panel</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
