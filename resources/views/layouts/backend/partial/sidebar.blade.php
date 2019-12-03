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
                    <li class="{{ Request::is('admin/notice*') ? 'active':'' }}">
                        <a href="{{ route('admin.notice.index') }}">
                            <i class="material-icons">description</i>
                            <span>Notice</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/information*') ? 'active':'' }}">
                        <a href="{{ route('admin.information.index') }}">
                            <i class="material-icons">save</i>
                            <span>Information</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/content*') ? 'active':'' }}">
                        <a href="{{ route('admin.content.index') }}">
                            <i class="material-icons">widgets</i>
                            <span>Contents</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/complain*') ? 'active':'' }}">
                        <a href="{{ route('admin.complain.index') }}">
                            <i class="material-icons">record_voice_over</i>
                            <span>Complains</span>
                                @if(Session::get("new_complain") != 0)
                                <span style="color: blue" class="badge">
                                    {{ Session::get("new_complain") }}
                                    </span>
                                    @endif

                        </a>
                    </li>
                    <li class="{{ Request::is('admin/user*') ? 'active':'' }}">
                        <a href="{{ route('admin.user.index') }}">
                            <i class="material-icons">people</i>
                            <span>Users</span>
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
                    <li class="{{ Request::is('moderator/notice*') ? 'active':'' }}">
                        <a href="{{ route('moderator.notice.index') }}">
                            <i class="material-icons">description</i>
                            <span>Notice</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('moderator/information*') ? 'active':'' }}">
                        <a href="{{ route('moderator.information.index') }}">
                            <i class="material-icons">save</i>
                            <span>Information</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('moderator/content*') ? 'active':'' }}">
                        <a href="{{ route('moderator.content.index') }}">
                            <i class="material-icons">widgets</i>
                            <span>Contents</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('moderator/complain*') ? 'active':'' }}">
                        <a href="{{ route('moderator.complain.index') }}">
                            <i class="material-icons">record_voice_over</i>
                            <span>Complains</span>
                                @if(Session::get("new_complain") != 0)
                                <span style="color: blue" class="badge">
                                    {{ Session::get("new_complain") }}
                                    </span>
                                @endif

                        </a>
                    </li>
                    <li class="{{ Request::is('moderator/user*') ? 'active':'' }}">
                        <a href="{{ route('moderator.user.index') }}">
                            <i class="material-icons">people</i>
                            <span>Users</span>
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
                    <li class="{{ Request::is('user/information*') ? 'active':'' }}">
                        <a href="{{ route('user.notice.index') }}">
                            <i class="material-icons">description</i>
                            <span>Notice</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('user/complain*') ? 'active':'' }}">
                        <a href="{{ route('user.complain.index') }}">
                            <i class="material-icons">record_voice_over</i>
                            <span>My Complains</span>
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
