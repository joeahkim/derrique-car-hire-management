<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i> <span>New Booking</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('bookings.pendingReturns') }}">
                <i class="bi bi-card-list"></i> <span>Pending Returns</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.create') }}">
                <i class="bi bi-card-list"></i> <span>Add a Client</span>
            </a>
        </li>

        </li>
    </ul>
</aside>