<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale; // Ensure you have a Sale model to query the sales table

class SalesController extends Controller
{
    public function getSalesData(Request $request)
    {
        $filter = $request->query('filter'); // Get the filter from the request
        $amountPaid = 0;

        switch ($filter) {
            case 'today':
                $amountPaid = Sale::whereDate('created_at', now())->sum('amount_paid');
                break;

            case 'this_month':
                $amountPaid = Sale::whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->sum('amount_paid');
                break;

            case 'this_year':
                $amountPaid = Sale::whereYear('created_at', now()->year)->sum('amount_paid');
                break;

            default:
                $amountPaid = Sale::sum('amount_paid'); // Default to total sales
        }

        return response()->json(['amount_paid' => $amountPaid]);
    }
}
