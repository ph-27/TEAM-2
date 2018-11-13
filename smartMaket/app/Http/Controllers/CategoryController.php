<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest; 
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
	{
        $categories = Category::all();
        
		return view('categories.index')->with('categories', $categories);
	}

	public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        Category::create($data);

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $category->update($data);

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function show($id)
    {   
        $products = Product::where('category_id', $id)->get();

        return view('products.index')->with('products', $products);
    }
}
