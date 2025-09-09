<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends BaseController
{
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
