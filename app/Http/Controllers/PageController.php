<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
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

    public function home()
    {
        return view('index', ['siteConfig' => $this->getSiteConfig(), 'page' => 'home']);
    }

    public function products()
    {
        return view('products', ['siteConfig' => $this->getSiteConfig(), 'page' => 'products']);
    }

    public function about()
    {
        return view('about', ['siteConfig' => $this->getSiteConfig(), 'page' => 'about']);
    }

    public function singleProduct()
    {
        return view('single-product', ['siteConfig' => $this->getSiteConfig(), 'page' => 'single-product']);
    }
}
