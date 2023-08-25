<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        return Gender::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $gender = Gender::create($validatedData);

        return response()->json(['message' => 'Gender created successfully', 'gender' => $gender], 201);
    }

    public function show($id)
    {
        return Gender::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $gender = Gender::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $gender->update($validatedData);

        return response()->json(['message' => 'Gender updated successfully', 'gender' => $gender]);
    }

    public function destroy($id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return response()->json(['message' => 'Gender deleted successfully']);
    }
}