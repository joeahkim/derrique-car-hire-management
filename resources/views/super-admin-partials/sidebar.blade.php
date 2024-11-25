<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.dashboard') }}">
                <i class="bi bi-grid"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.cars.create') }}">
                <i class="bi bi-card-list"></i> <span>Add a Car</span>
            </a>
        </li>
        <li>
            <a href="{{ route('super-admin.admins.create') }}" class="nav-link">
                <i class="bi bi-person-plus"></i>
                <span>Create Admin</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/clients') }}">
                <i class="bi bi-card-list"></i> <span>View Bookings</span>
            </a>
        </li>
    </ul>
</aside>