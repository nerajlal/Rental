<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
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
