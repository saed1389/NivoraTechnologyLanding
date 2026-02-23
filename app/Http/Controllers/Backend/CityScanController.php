<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CityScanController extends Controller
{
    public function create()
    {
        return view('backend.scan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:100',
            'country_code' => 'required|string|size:2',
            'categories' => 'nullable|array',
        ]);
        $city = City::updateOrCreate(
            ['name' => $request->city, 'country_code' => $request->country_code],
            ['is_active' => true]
        );
        $payload = [
            'city' => $request->city,
            'country' => $request->country_code,
        ];
        if ($request->has('categories')) {
            $payload['categories'] = $request->categories;
        }
        try {
            $response = Http::post(env('N8N_WEBHOOK_URL'), $payload);
            if ($response->successful()) {
                $city->update(['last_scanned_at' => now()]);
                return redirect()->back()->with('success', 'Scan triggered successfully!');
            } else {
                Log::error('n8n webhook failed', ['response' => $response->body()]);
                return redirect()->back()->with('error', 'Failed to trigger scan. Check logs.');
            }
        } catch (\Exception $e) {
            Log::error('n8n webhook exception', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Could not connect to n8n.');
        }
    }
}
