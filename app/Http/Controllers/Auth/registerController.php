<?php

namespace App\Http\Controllers\Auth;

use App\Models\register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'email' => 'required|email',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]));

        register::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);

        return redirect()->route('login')->with('success', 'Registrasi Berhasil CUii');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
