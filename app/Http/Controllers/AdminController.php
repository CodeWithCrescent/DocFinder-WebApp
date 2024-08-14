<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.doctors');
    }

    /**
     * Add new the doctors page.
     */
    public function addDoctor()
    {
        return view('admin.add-doctor');
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
