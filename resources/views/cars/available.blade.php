@extends('layouts.app')

@section('title', 'Available Cars')

@section('content')
<div class="pagetitle">
    <h1>Available Cars</h1>
</div>

<div class="container py-4">
    <div class="card mb-4 rounded-4">
        <div class="card-body px-4 pt-4 pb-2">
            @if($availableCars->isEmpty())
            <p>No available cars at the moment.</p>
            @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Number Plate</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($availableCars as $car)
                    <tr>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->number_plate }}</td>
                        <td>{{ $car->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection