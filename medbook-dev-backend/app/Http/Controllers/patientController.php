<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::with('gender', 'services')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender_id' => 'required|exists:genders,id',
            'date_of_birth' => 'required|date',
        ]);

        $patient = Patient::create($validatedData);

        
    }

    public function show($id)
    {
        return Patient::with('gender', 'services')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender_id' => 'required|exists:genders,id',
            'date_of_birth' => 'required|date',
        ]);

        $patient->update($validatedData);

        return response()->json(['message' => 'Patient updated successfully', 'patient' => $patient]);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return response()->json(['message' => 'Patient deleted successfully']);
    }
}