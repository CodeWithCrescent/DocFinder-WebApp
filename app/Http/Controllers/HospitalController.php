<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{

    /**
     * Show the hospitals page.
     */
    public function showHospitals()
    {
        $hospitals = Hospital::where('user_id', Auth::user()->id)->get();
        return view('admin.hospitals', compact('hospitals'));
    }

    /**
     * Show the manage hospital page.
     */
    public function editHospital($id)
    {
        $hospital = Hospital::findOrFail($id);
        $departments = Department::where('hospital_id', $hospital->id)->get();
        return view('admin.edit-hospital', compact('hospital', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createHospital(Request $request)
    {
        $request->validate([
            'user_id' => ['exists:users,id'],
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:hospitals'],
        ]);

        $user = $request->user();

        $hospital = Hospital::create([
            'user_id' => $user->id,
            'address' => $request['address'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone'],
            'instagram' => $request['instagram'],
            'facebook' => $request['facebook'],
            'linkedin' => $request['linkedin'],
            'twitter' => $request['twitter'],
            'bio' => $request['bio'],
        ]);

        return redirect()->back()->with('status', 'Successfully added '. $request['name']. ' to hospital list!');
    }

    /**
     * Update the hospital details in storage.
     */

    public function updateHospital(Request $request, $id)
    {
      $hospital = Hospital::findOrFail($id);
  
      $hospital->name = $request->input('name');
      $hospital->email = $request->input('email');
      $hospital->address = $request->input('address');
  
      // if ($request->hasFile('profile-picture')) {
      //     $profilePicture = $request->file('profile-picture')->store('profile-pictures');
      //     $hospitalDetails->profile_picture = $profilePicture;
      // }
  
      $hospital->address = $request->input('phone');
      $hospital->instagram = $request->input('instagram');
      $hospital->facebook = $request->input('facebook');
      $hospital->linkedin = $request->input('linkedin');
      $hospital->twitter = $request->input('twitter');
      $hospital->bio = $request->input('bio');
  
      $hospital->save();
  
      return redirect()->back()->with('status', 'Successfully updated the hospital informations!');
    }

        /**
     * Save the new created department.
     */
    public function createHospitalDepartment(Request $request)
    {
        $request->validate([
            'user_id' => ['exists:users,id'],
            'hospital' => ['exists:hospitals,id'],
            'department_name' => ['required', 'string', 'max:255'],
            'code' => ['string', 'unique:departments'],
        ]);

        $user = $request->user();

        $hospitalDepartment = Department::create([
            'user_id' => $user->id,
            'hospital_id' => $request['hospital'],
            'code' => $request['code'],
            'name' => $request['department_name'],
        ]);

        return redirect()->back()->with('status', 'Successfully added new department!');
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
