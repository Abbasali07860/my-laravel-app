<header class="site-header">
    <div class="container header-content">
        <div class="sidebar-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <h2 class="app-title">My Laravel App</h2>

        <div class="user-dropdown">
            <input type="checkbox" id="dropdown-toggle" hidden>
            <label for="dropdown-toggle" class="user-info">
                <div class="profile-container">
                    <div class="profile-circle">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <span class="online-dot"></span> <!-- Green dot -->
                </div>
                <span class="user-name">{{ Auth::user()->name }}</span>
                <i class="fas fa-chevron-down"></i>
            </label>

            <ul class="dropdown-menu ">
                <li class="dropdown-header drp-bg">
                    <strong>{{ Auth::user()->name }}</strong><br>
                    <small>{{ Auth::user()->email }}</small>
                </li>
                <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i> Profile</a></li>
                <li><a href="{{ route('password.change') }}"><i class="fas fa-lock"></i> Change Password</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"><i class="fas fa-sign-out-alt newclr"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
