<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::paginate(5);
        return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|integer|min:1',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|string|size:4|regex:/^[0-9]+$/'
        ]);

        Address::create($validated);
        return redirect()->route('addresses.index')->with('success', 'Address created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $address = Address::findOrFail($id);
        return view('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $address = Address::findOrFail($id);
        return view('addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $address = Address::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|integer|min:1',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|string|size:4|regex:/^[0-9]+$/'
        ]);

        $address->update($validated);
        return redirect()->route('addresses.index')->with('success', 'Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully');
    }
}
