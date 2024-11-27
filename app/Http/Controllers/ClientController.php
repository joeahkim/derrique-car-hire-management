<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Guarantor;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Client validation
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'client_email' => 'required|string|max:255',
            'client_id_number' => 'required|string|unique:clients,id_number',
            'client_nationality' => 'required|string|max:255',
            'client_occupation' => 'required|string|max:255',
            'client_residence' => 'required|string|max:255',
            'client_drivers_license' => 'required|string|max:255',
            'client_license_expiry' => 'required|date',
            // 'client_photo' => 'required|image|max:2048',
            'client_id_card_front' => 'required|image|max:2048',
            'client_id_card_back' => 'required|image|max:2048',

            // Guarantor validation
            'guarantor_name' => 'required|string|max:255',
            'guarantor_phone' => 'required|string|max:15',
            'guarantor_id_number' => 'required|string|unique:guarantors,id_number',
            'guarantor_residence' => 'required|string|max:255',
            'guarantor_nationality' => 'required|string|max:255',
            'guarantor_relationship' => 'required|string|max:255',
            'guarantor_occupation' => 'required|string|max:255',
            'guarantor_id_card_front' => 'required|image|max:2048',
            'guarantor_id_card_back' => 'required|image|max:2048',

            // Next of Kin validation
            'next_of_kin_name' => 'required|string|max:255',
            'next_of_kin_phone' => 'required|string|max:15',
            'next_of_kin_id_passport_number' => 'required|string|unique:next_of_kin,id_passport_number',
        ]);

        // Store client and guarantor images
        // $clientPhotoPath = $request->file('client_photo')->store('photos/clients', 'public');
        $clientFrontIDPath = $request->file('client_id_card_front')->store('photos/clients', 'public');
        $clientBackIDPath = $request->file('client_id_card_back')->store('photos/clients', 'public');

        $client = Client::create([
            'name' => $validated['client_name'],
            'phone_number' => $validated['client_phone'],
            'email' => $validated['client_email'],
            'id_number' => $validated['client_id_number'],
            'nationality' => $validated['client_nationality'],
            'occupation' => $validated['client_occupation'],
            'residence' => $validated['client_residence'],
            'drivers_license_number' => $validated['client_drivers_license'],
            'drivers_license_expiry_date' => $validated['client_license_expiry'],
            'id_card_front' => $clientFrontIDPath,
            'id_card_back' => $clientBackIDPath,
        ]);

        // $guarantorPhotoPath = $request->file('guarantor_photo')->store('photos/guarantors', 'public');
        $guarantorFrontIDPath = $request->file('guarantor_id_card_front')->store('photos/guarantors', 'public');
        $guarantorBackIDPath = $request->file('guarantor_id_card_back')->store('photos/guarantors', 'public');

        $client->guarantor()->create([
            'name' => $validated['guarantor_name'],
            'phone_number' => $validated['guarantor_phone'],
            'id_number' => $validated['guarantor_id_number'],
            'relationship' => $validated['guarantor_relationship'],
            'nationality' => $validated['guarantor_nationality'],
            'residence' => $validated['guarantor_residence'],
            'occupation' => $validated['guarantor_occupation'],
            'id_card_front' => $guarantorFrontIDPath,
            'id_card_back' => $guarantorBackIDPath,
        ]);

        $client->nextOfKin()->create([
            'name' => $validated['next_of_kin_name'],
            'phone_number' => $validated['next_of_kin_phone'],
            'id_passport_number' => $validated['next_of_kin_id_passport_number'],
        ]);

        return redirect()->route('clients.create')->with('success', 'Client, Guarantor, and Next of Kin created successfully.');
    }


    public function getFilteredClients(Request $request)
    {
        $filter = $request->query('filter', 'today'); // Default to 'today'
        $clientCount = 0;

        switch ($filter) {
            case 'today':
                $clientCount = Client::whereDate('created_at', now())->count();
                break;

            case 'this_month':
                $clientCount = Client::whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->count();
                break;

            case 'this_year':
                $clientCount = Client::whereYear('created_at', now()->year)->count();
                break;

            default:
                $clientCount = Client::count(); // Default to total clients
        }

        return response()->json(['client_count' => $clientCount]);
    }
}
