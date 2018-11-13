<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Category;
use Validator;

class ProductController extends Controller
{
    public function index()
	{
        $perpage = 5;
		$products = Product::orderBy('created_at', 'DESC')->paginate($perpage);
		return view('products.index')->with('products',$products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
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
    public function update(ProductRequest $request, $id)
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

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function category($name)
    {
        $category = Category::where('name', $name)
            ->first();
        $products = $category->products;

        return view('products.index', compact('category', 'products'));
    }
}
