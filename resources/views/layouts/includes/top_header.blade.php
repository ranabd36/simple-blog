<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
        </li>
        <li class="nav-item">
            <a data-method="POST" data-token="{{ csrf_token() }}" data-confirm="{{ __('Are you sure?') }}" class="nav-link" href="{{ route('logout') }}">
                <i class="fa fa-sign-out"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->