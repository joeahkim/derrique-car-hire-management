@extends('layouts.super-admin-app')

@section('title', 'Cars Available')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Cars Available</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Number Plate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->number_plate }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection