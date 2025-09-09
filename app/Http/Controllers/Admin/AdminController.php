<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function getSiteConfig()
    {
        return [
            'business' => [
                'name' => 'Test Ornament Rentals',
                'phone' => '+91 85474 70675',
                'email' => 'test@ornamentrentals.com',
                'address' => 'Test Event Street, City, State 12345',
                'whatsapp' => '+91 85474 70675',
                'instagram' => 'https://instagram.com/metora.in'
            ],
            'colors' => [
                'primary' => '#c2410c',
                'primaryHover' => '#ea580c',
                'secondary' => '#1e40af',
                'secondaryHover' => '#2563eb',
                'accent' => '#059669',
                'neutral' => '#374151',
                'light' => '#f9fafb',
                'dark' => '#111827'
            ]
        ];
    }

    public function index()
    {
        return view('admin.index', ['siteConfig' => $this->getSiteConfig(), 'page' => 'dashboard']);
    }

    public function products()
    {
        return view('admin.products', ['siteConfig' => $this->getSiteConfig(), 'page' => 'products']);
    }

    public function orders()
    {
        return view('admin.orders', ['siteConfig' => $this->getSiteConfig(), 'page' => 'orders']);
    }

    public function customers()
    {
        return view('admin.customers', ['siteConfig' => $this->getSiteConfig(), 'page' => 'customers']);
    }

    public function settings()
    {
        return view('admin.settings', ['siteConfig' => $this->getSiteConfig(), 'page' => 'settings']);
    }
}
