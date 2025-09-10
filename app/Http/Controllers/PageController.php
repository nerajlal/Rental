<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home()
    {
        return view('index', ['siteConfig' => $this->getSiteConfig(), 'page' => 'home']);
    }

    public function products()
    {
        $products = Product::with('images')->get();
        return view('products', [
            'siteConfig' => $this->getSiteConfig(),
            'page' => 'products',
            'products' => $products,
        ]);
    }

    public function about()
    {
        return view('about', ['siteConfig' => $this->getSiteConfig(), 'page' => 'about']);
    }

    public function contact()
    {
        return view('contact', ['siteConfig' => $this->getSiteConfig(), 'page' => 'contact']);
    }

    public function showProduct(Product $product)
    {
        $similarProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->with('images')
            ->limit(4)
            ->get();

        return view('single-product', [
            'siteConfig' => $this->getSiteConfig(),
            'page' => 'single-product',
            'product' => $product,
            'similarProducts' => $similarProducts,
        ]);
    }

    public function wishlist()
    {
        return view('wishlist', [
            'siteConfig' => $this->getSiteConfig(),
            'page' => 'wishlist',
        ]);
    }

    public function getProductsByIds(Request $request)
    {
        $ids = $request->input('ids', []);
        if (empty($ids)) {
            return response()->json([]);
        }

        $products = Product::whereIn('id', $ids)->with('images')->get();

        return response()->json($products);
    }
}
