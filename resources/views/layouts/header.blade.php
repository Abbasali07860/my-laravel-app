<header class="site-header">
    <div class="container header-content">
        <h2>My Laravel App</h2>

        <div class="user-dropdown">
            <input type="checkbox" id="dropdown-toggle" hidden>
            <label for="dropdown-toggle" class="user-info">
                <i class="fas fa-user-circle login-active"></i>

                <span>{{ Auth::user()->name }}</span> 
                <i class="fas fa-chevron-down"></i>
            </label>

            <ul class="dropdown-menu">
                <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                <li><a href=""><i class="fas fa-lock"></i> Change Password</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"><i class="fas fa-sign-out-alt logout-icon"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
