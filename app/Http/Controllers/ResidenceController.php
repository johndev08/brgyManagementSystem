<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $residence = Residence::all();
        return view('index', compact('residence'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'firstName'      => 'required|string|min:2|max:50',
            'middleName'     => 'nullable|string|max:50',
            'lastName'       => 'required|string|max:50',
            'birthDate'      => 'required|date|before:today',
            'gender'         => 'required|in:Male,Female,Other',
            'age'            => 'required|integer|min:0|max:120',
            'contactNumber'  => 'required|regex:/^([0-9]{11})$/',
            'email'          => 'required|email|unique:residences,email',
        ]);
        Residence::create($request->all());
        return redirect()->route('index')->with('success', 'residents added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Residence $residence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $residence = Residence::find($id);
        return view('edit', compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstName'      => 'required|string|min:2|max:50',
            'middleName'     => 'nullable|string|max:50',
            'lastName'       => 'required|string|max:50',
            'birthDate'      => 'required|date|before:today',
            'gender'         => 'required|in:Male,Female,Other',
            'age'            => 'required|integer|min:0|max:120',
            'contactNumber'  => 'required|regex:/^([0-9]{11})$/',
            'email'          => 'required|email',
        ]);
        $residence = Residence::find($id);
        $residence->update($request->all());
        return redirect()->route('index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $residence = Residence::find($id);
        $residence->delete();
        return redirect()->route('index')->with('success', 'Resident deleted successfully');
    }
}
