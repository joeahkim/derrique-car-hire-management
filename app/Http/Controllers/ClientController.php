<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Guarantor;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'id_number' => 'required|string|unique:clients',
            'nationality' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'residence' => 'required|string|max:255',
            'drivers_license_number' => 'required|string|max:255',
            'drivers_license_expiry_date' => 'required|date',

            'guarantor_name' => 'required|string|max:255',
            'guarantor_phone_number' => 'required|string|max:15',
            'guarantor_id_number' => 'required|string|unique:guarantors',
            'guarantor_relationship' => 'required|string|max:255',
        ]);

        $client = Client::create($request->only([
            'name',
            'phone_number',
            'id_number',
            'nationality',
            'occupation',
            'residence',
            'drivers_license_number',
            'drivers_license_expiry_date'
        ]));

        $client->guarantor()->create([
            'name' => $request->guarantor_name,
            'phone_number' => $request->guarantor_phone_number,
            'id_number' => $request->guarantor_id_number,
            'relationship' => $request->guarantor_relationship,
        ]);

        return redirect()->back()->with('success', 'Client created successfully.');
    }
}
