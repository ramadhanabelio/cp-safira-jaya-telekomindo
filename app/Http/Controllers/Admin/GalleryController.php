<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'desc' => 'nullable|string|max:255',
        ]);

        $path = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'image' => $path,
            'desc' => $request->desc,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'desc' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }

            $gallery->image = $request->file('image')->store('galleries', 'public');
        }

        $gallery->desc = $request->desc;
        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}
