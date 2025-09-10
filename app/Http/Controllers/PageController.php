<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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

    public function contact()
    {
        return view('contact', ['siteConfig' => $this->getSiteConfig(), 'page' => 'contact']);
    }

    public function handleContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Note: The admin email should ideally be in a config file.
        // Using the one from siteConfig for now.
        $adminEmail = $this->getSiteConfig()['business']['email'];

        Mail::to($adminEmail)->send(new ContactFormMail($validatedData));

        return redirect()->route('contact.index')->with('success', 'Thank you for your message! We will get back to you shortly.');
    }
}
