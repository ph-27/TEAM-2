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
		return view('admin.products.index')->with('products',$products);
    }

    public function create()
    {
        return view('admin.products.create');
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

        return view('admin.products.edit', compact('product'));
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
        return view('admin.products.show', compact('product'));
    }

    public function category(Request $request, $id)
    {
        $products = (new Product())
            ->where('category_id', $id)->paginate(5); 


        return view('admin.products.index', compact('category', 'products'));
    }

    public function xuLyUpload(Request $rq) {
        $rules = [ 'picture' => 'image|max:1024' ]; 
        $posts = [ 'picture' => $rq->file('image') ];
        
        $valid = Validator::make($posts, $rules);
        if ($valid->fails()) {
            
            return redirect()->back()->withErrors($valid)->withInput();
        }
        else {
           
            if ($rq->file('image')->isValid()) {
                
                $fileExtension = $rq->file('image')->getClientOriginalExtension(); 
                
                
                $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                            
               
                $uploadPath = public_path('C:\xampp\htdocs\ahihi52\smartMaket\resources\images'); 
                
                
                $rq->file('image')->move($uploadPath, $fileName);
                
                
                return redirect()->back()->with('success', 'Upload files thành công!');
            }
            else {
                
                return redirect()->back()->with('error', 'Upload files thất bại!');
            }
        }
    }
}
