<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const PATH_VIEW = 'product.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProducts = Product::with('category')->get();
        return view(self::PATH_VIEW . __FUNCTION__,compact('listProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listCategory = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('listCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Product::query()->create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $listCategory = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('product','listCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $listCategory = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('product','listCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
    public function search(Request $request)
    {
        $product = Product::with('category')->where('name','like','%' . $request->product_name . '%')->get();
        if ($product) {
            $listCategory = Category::all();
            return view('product.search',compact('product','listCategory'));
        }

        return abort(404);
    }
}
