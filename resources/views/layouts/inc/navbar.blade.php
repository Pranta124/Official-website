<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">



        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> Admin

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                {{-- <a href="#" class="dropdown-item"> --}}




                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn">
                        <x-dropdown-link class="btn" :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </button>
                </form>
                {{-- </a> --}}


            </div>
        </li>
    </ul>
</nav>
