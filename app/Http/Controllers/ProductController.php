<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(): View
    {
        return view('admin.create');
    }
    public function store(StoreProductRequest $request): RedirectResponse
    {
        Cache::forget('admin_products');

        $validated = $request->validated();

        $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
        $validated['thumbnail'] = str_replace('public/', '', $thumbnailPath);

        if ($request->file('images')) {
            foreach ($request->file('images') as $images) {
                $path = $images->store('images', 'public');
                $imagePath[] = str_replace('public/', '', $path);
            }
            $validated['images'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Product Updated');
    }
    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        $images = collect($product->thumbnail)->merge($product->images ?? []);
        $product = $product->except('thumbnail', 'images');

        return view('admin.edit', compact('product', 'images'));
    }
    public function update(UpdateProductRequest $request, string $id): RedirectResponse
    {
        Cache::forget('admin_products');

        $product = Product::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');

            Storage::disk('public')->delete($product->thumbnail);

            $validated["thumbnail"] = str_replace('public/', '', $thumbnailPath);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $images) {
                $path = $images->store('images', 'public');
                $imagePath[] = str_replace('public/', '', $path);
            }
            foreach ($product->images as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
            $validated['images'] = $imagePath;
        }


        $product->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Product Uploaded');
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $images = collect(Arr::wrap($product->thumbnail))->merge($product->images ?? []);

        foreach ($images as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }

        $product->delete();

        Cache::forget('admin_products');

        return redirect()->route('admin.dashboard')->with('success', 'Product Deleted');
    }

    public function clearList(): RedirectResponse
    {
        $products = Product::all();

        $images = collect(Arr::wrap($products->thumbnail))->merge($products->images ?? []);

        foreach ($images as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }

        $products->truncate();

        Cache::forget('admin_products');

        return redirect()->back()->with('success', 'Product List has been Cleared');
    }
}
