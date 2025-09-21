<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ManagerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-manager', ['page' => 'managers']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required|string',
            'mobile_number' => 'required|numeric|digits_between:7,15',
        ]);

        $username = '+' . $request->country_code . ' ' . $request->mobile_number;

        if (Admin::where('username', $username)->exists()) {
            throw ValidationException::withMessages([
                'mobile_number' => 'This mobile number is already registered.',
            ]);
        }

        Admin::create([
            'username' => $username,
            'password' => Hash::make($username),
            'plan' => 0, // Default to free plan
        ]);

        return redirect()->route('admin.managers.create')->with('success', 'Manager added successfully!');
    }
}
