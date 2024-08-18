<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DoctorDetails;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the appointments page.
     */
    public function showAppointments()
    {
        return view('admin.appointment');
    }

    /**
     * Show the doctors page.
     */
    public function showDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.doctors', compact('doctors'));
    }

    /**
     * Add new the doctors page.
     */
    public function addDoctor()
    {
        $hospitals = Hospital::all();
        $departments = Department::all();
        $doctors = User::where('role', 'doctor')->limit(5)->get();
        return view('admin.add-doctor', compact('hospitals', 'departments', 'doctors'));
    }

    public function AddDoctorAction(Request $request, User $user)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile_photo_path' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'hospital' => ['required', 'exists:hospitals,id'],
            'department' => ['required', 'exists:departments,id'],
            'specialty' => ['nullable', 'string'],
            'gender' => ['required', 'in:male,female'],
            'started_year' => ['required', 'integer', 'min:1900', 'max:' . date('Y')],
            'bio' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.add.doctor')->withErrors($validator);
        }

        // Handle the file upload
        $profilePhotoPath = null;
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $profilePhotoPath = $file->store('profile_photos', 'public');
        }

        // Register doctor into users
        $doctor = User::create([
            'role' => 'doctor',
            'name' => $input['name'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make(123456),
            'profile_photo_path' => $profilePhotoPath,
        ]);

        // Save the doctor details
        $doctorDetails = new DoctorDetails([
            'user_id' => $doctor->id,
            'hospital_id' => $input['hospital'],
            'department_id' => $input['department'],
            'specialty' => $input['specialty'],
            'gender' => $input['gender'],
            'started_year' => $input['started_year'],
            'bio' => $input['bio'],
        ]);
        $doctorDetails->save();

        return redirect()->route('admin.add.doctor')->with('status', 'Doctor added successfully!');
    }

    /**
     * Show the doctors page.
     */
    public function showPatients()
    {
        return view('admin.patients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
