<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class BaseController extends Controller
{
    protected function getSiteConfig()
    {
        return [
            'business' => [
                'name' => 'Test Ornament Rentals',
                'phone' => '+91 85474 70675',
                'email' => 'test@ornamentrentals.com',
                'address' => 'Test Event Street, City, State 12345',
                'whatsapp' => '+91 85474 70675',
                'instagram' => 'https://instagram.com/metora.in',
                'expiry_date' => '01-03-2026'
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
}
