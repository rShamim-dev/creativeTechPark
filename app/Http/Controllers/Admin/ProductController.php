<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categories')->latest()->get();

        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->select('id', 'name')->get();

        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['name']);
        $validated = Arr::except($validated, ['image', 'categories']);

        $product = Product::create($validated);
        $product->categories()->attach($request->categories);

        if ($request->hasFile('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('products.index')->withSuccess('Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::active()->select('id', 'name')->get();

        return view('backend.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['name']);
        $validated = Arr::except($validated, ['image', 'categories']);

        $product->update($validated);
        $product->categories()->sync($request->categories);

        if ($request->hasFile('image')) {
            if ($product->hasMedia('images')) {
                $product->clearMediaCollection('images');
            }
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('products.index')->withSuccess('Product created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withSuccess('Product deleted successfully!');
    }


    public function getProduct()
    {
        $products = Product::active()->get();
        return response()->json($products);
    }
}
