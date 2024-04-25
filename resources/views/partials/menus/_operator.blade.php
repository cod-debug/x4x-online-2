<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light" style="text-transform: uppercase; font-size:16px; font-weight:bold !important;">...</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Player</li>
                <li class="nav-item">
                    <a href="{{ route('check-dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('points.history') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>Points</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('points.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Bets</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>Inco</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('points.raffle-entry') }}" class="nav-link">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>Raffle</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('points.archive') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Archive</p>
                    </a>
                </li>

                <li class="nav-header">Settings</li>

                {{-- <li class="nav-item">
                    <a href="{{ route('wallet') }}" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p class="text">Wallet</p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="{{ route('password.update') }}" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p class="text">Change Password</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
