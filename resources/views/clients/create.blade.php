@extends('layouts.app')

@section('title', 'Pending Returns')

@section('content')
<div class="pagetitle">
    <h1>Create Client, Guarantor, and Next of Kin</h1>
</div>

<div class="container-fluid py-4">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Client Details Section -->
        <h3>Client Details</h3>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_phone" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_id_number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nationality</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_nationality" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Occupation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_occupation" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Residence</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_residence" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Driver's License Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="client_drivers_license" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">License Expiry Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="client_license_expiry" required>
            </div>
        </div>
        <!-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID/Passport Photo</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="client_photo" accept="image/*" required>
            </div>
        </div> -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Card Front</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="client_id_card_front" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Card Back</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="client_id_card_back" accept="image/*" required>
            </div>
        </div>

        <!-- Guarantor Details Section -->
        <h3>Guarantor Details</h3>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_phone" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_id_number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nationality</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_nationality" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Residence</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_residence" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Relationship</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_relationship" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Occupation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="guarantor_occupation" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Card Front</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="guarantor_id_card_front" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Card Back</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="guarantor_id_card_back" accept="image/*" required>
            </div>
        </div>

        <!-- Next of Kin Section -->
        <h3>Next of Kin Details</h3>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="next_of_kin_name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="next_of_kin_phone" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID/Passport Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="next_of_kin_id_passport_number" required>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection