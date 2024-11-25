<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('super-admin-partials.header')

    <!-- ======= Sidebar ======= -->
    @include('super-admin-partials.sidebar')

    <!-- ======= Main Content ======= -->
    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('super-admin-partials.footer')

    <!-- Vendor JS Files -->
    <script>
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                const filter = this.getAttribute('data-filter'); // Get the selected filter
                fetchSalesData(filter); // Fetch sales data based on the filter
            });
        });

        function fetchSalesData(filter) {
            fetch(`/sales-data?filter=${filter}`) // Adjust the route to match your backend logic
                .then(response => response.json())
                .then(data => {
                    // Update the Sales Card with the fetched data
                    document.querySelector('.card-title span').textContent = `| ${capitalize(filter)}`;
                    document.querySelector('.ps-3 h6').textContent = data.amount_paid;
                })
                .catch(error => console.error('Error fetching sales data:', error));
        }

        function capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1).replace('_', ' ');
        }
        document.addEventListener('DOMContentLoaded', function() {
            fetchSalesData('today'); // Load today's sales by default
        });
    </script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>