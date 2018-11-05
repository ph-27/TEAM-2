<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
	{
		$products = product::all();
		return view('products.index')->with('products',$products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function show(\App\Models\Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function category($name)
    {
        $category = \App\Models\Category::where('name', $name)
            ->first();
        $products = $category->products;
        return view('products.index', compact('category', 'products'));
    }
}
