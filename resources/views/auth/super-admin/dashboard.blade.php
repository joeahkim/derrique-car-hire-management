@extends('layouts.super-admin-app')

@section('title', 'Create Client')

@section('content')


<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#" data-filter="today">Today</a></li>
                                <li><a class="dropdown-item" href="#" data-filter="this_month">This Month</a></li>
                                <li><a class="dropdown-item" href="#" data-filter="this_year">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Revenue <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>


                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Customers <span>| This Month</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>0</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Customers Card -->

                <!-- Recent Bookings -->
                <div class="card-body">
                    <h5 class="card-title">Recent Bookings <span id="bookings-filter-title">| Today</span></h5>

                    <div class="filter mb-3">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="bookings-filter">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#" data-filter="today">Today</a></li>
                            <li><a class="dropdown-item" href="#" data-filter="this_month">This Month</a></li>
                            <li><a class="dropdown-item" href="#" data-filter="this_year">This Year</a></li>
                        </ul>
                    </div>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Client Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">Number Plates</th>
                                <th scope="col">Amount Paid</th>
                                <th scope="col">Pickup Date</th>
                                <th scope="col">Authorized By</th>
                            </tr>
                        </thead>
                        <tbody id="recent-bookings">
                            <!-- Data will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
                <!-- End Recent Sales -->

                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>



                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div><!-- End Left side columns -->



    </div>
</section>

@endsection