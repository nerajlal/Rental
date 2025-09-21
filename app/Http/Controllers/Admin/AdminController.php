<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends AdminBaseController
{
    public function index()
    {
        $productCount = Product::count();
        $productsThisMonth = Product::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
        return view('admin.index', [
            'siteConfig' => $this->getSiteConfig(), 
            'page' => 'dashboard', 
            'productCount' => $productCount,
            'productsThisMonth' => $productsThisMonth
        ]);
    }

    public function orders()
    {
        return view('admin.orders', ['siteConfig' => $this->getSiteConfig(), 'page' => 'orders']);
    }

    public function customers()
    {
        return view('admin.customers', ['siteConfig' => $this->getSiteConfig(), 'page' => 'customers']);
    }

    public function analytics()
    {
        return view('admin.analytics', ['siteConfig' => $this->getSiteConfig(), 'page' => 'analytics']);
    }

    public function settings()
    {
        return view('admin.settings', ['siteConfig' => $this->getSiteConfig(), 'page' => 'settings']);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Password updated successfully.');
    }
}
