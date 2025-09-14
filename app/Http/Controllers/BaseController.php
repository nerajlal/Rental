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
                'primary' => '#7B2CBF',       // Purple
                'primaryHover' => '#9D4EDD',  // Lighter Purple
                'secondary' => '#F72585',     // Magenta/Pink
                'secondaryHover' => '#FF4DA6',// Hover Pink
                'accent' => '#FF8500',        // Orange
                'neutral' => '#FFD60A',       // Yellow/Gold
                'light' => '#FFFFFF',         // White (background)
                'dark' => '#000000'           // Black (text)
            ]
        ];
    }
}
