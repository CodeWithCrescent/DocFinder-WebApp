<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PatientDetails;
use App\Models\PatientProfile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Handle login requests.
     */
    public function login(Request $request)
    {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Email or password is incorrect, try again.'
            ], 403);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Successful logged in!',
            'token' => $token,
            'type' => 'Bearer',

        ]);
    }

    /**
     * Handle register requests.
     */
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'role' => 'patient',
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            // 'user' => $user,
            'token' => $token,
            'type' => 'Bearer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function savePatientData(Request $request)
    {
        // if (!Auth()->user() || Auth()->user()->id == null) {
        //     return response()->json([
        //         'message' => 'Login first to perform this action'
        //     ], 401);
        // }

        $patientData = PatientDetails::create([
            // 'user_id' => Auth()->user()->id,
            'user_id' => $request['user_id'],
            'address' => $request['address'],
            'phone_number' => $request['phone_number'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
        ]);

        return response()->json([
            'location_success' => 'We have already saved your location',
            'phone_success' => 'We have already saved your phone number',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        //! sign out
        // auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'You have logged out successful',
        ], 200);
    }
}
