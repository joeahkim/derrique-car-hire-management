@extends('layouts.app')

@section('title', 'Create Client')

@section('content')

<div class="pagetitle">
    <h1>Create Client and Guarantor</h1>
</div>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 rounded-4">
                <div class="card-body px-4 pt-4 pb-2">
                    <!-- Form for Client and Guarantor -->
                    <form method="post" action="create_client_guarantor.php" enctype="multipart/form-data">
                        <h3>Client Details</h3>
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Name</label>
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID/Passport Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="client_photo" accept="image/*" required>
                            </div>
                        </div>

                        <h3>Guarantor Details</h3>
                        <div class="row mb-3">
                            <label class="col-form-label col-sm-2">Name</label>
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
                            <label class="col-sm-2 col-form-label">Relationship</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="guarantor_relationship" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID/Passport Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="guarantor_photo" accept="image/*" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection