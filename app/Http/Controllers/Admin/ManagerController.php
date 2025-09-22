<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ManagerController extends AdminBaseController
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-manager', [
            'siteConfig' => $this->getSiteConfig(),
            'page' => 'managers'
        ]);
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
            'plan' => Auth::guard('admin')->user()->plan,
        ]);

        return redirect()->route('admin.managers.create')->with('success', 'Manager added successfully!');
    }
}
