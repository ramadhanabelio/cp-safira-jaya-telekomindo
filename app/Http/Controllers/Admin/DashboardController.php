<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Product;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalContacts = Contact::count();
        $totalGalleries = Gallery::count();

        return view('admin.dashboard', compact('totalProducts', 'totalContacts', 'totalGalleries'));
    }
}
