@extends('layouts.super-admin-app')

@section('title', 'Add Car')

@section('content')


<div class="pagetitle">
    <h1>Add a Car</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Car</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 rounded-4">
                <div class="card-body px-4 pt-4 pb-2">

                    <form class="form-label" method="post" action="add_transaction1.php">
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Car Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Number Plates</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Image</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection