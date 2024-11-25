@extends('layouts.app')

@section('title', 'Admin Dashboard - Create Booking')

@section('content')
<div class="pagetitle">
    <h1>Create Booking</h1>
</div>

<div class="container-fluid py-4">
    <div class="card mb-4 rounded-4">
        <div class="card-body px-4 pt-4 pb-2">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Client</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="client_id" required>
                            @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Car</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="vehicle_id" required>
                            @foreach($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->make }} {{ $car->model }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Car</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="car_id" required>
                            @foreach($cars->groupBy('make') as $make => $carGroup)
                            <optgroup label="{{ $make }}">
                                @foreach($carGroup as $car)
                                <option value="{{ $car->id }}">
                                    {{ $car->model }} - {{ $car->number_plate }}
                                </option>
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Pickup Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="pickup_date" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Amount Paid</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="amount_paid" step="0.01" required>
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Return Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="return_date" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Booking</button>
            </form>
        </div>
    </div>
</div>
@endsection