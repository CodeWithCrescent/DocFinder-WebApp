<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PatientDetails;
use App\Models\PatientProfile;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function saveLocation(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $user = $request->user();

        $userLocation = PatientDetails::updateOrCreate(
            ['user_id' => $user->id],
            ['latitude' => $request->latitude, 'longitude' => $request->longitude]
        );

        return response()->json($userLocation, 200);
    }
}
