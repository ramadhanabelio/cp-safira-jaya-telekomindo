<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(6)->get();
        return view('landing-page', compact('products'));
    }

    public function product()
    {
        $products = Product::latest()->get();
        return view('product', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('detail', compact('product'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('gallery', compact('galleries'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return response()->json(['message' => 'Pesan Anda telah terkirim. Terima kasih!']);
    }
}
