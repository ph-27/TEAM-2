<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
// Include Model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); cái này có nghĩa là chị phải login ms được truy cập vào => e close nóp lại
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = new Product();

        //$allProduct = $product->all();

        // Step 1. new model category

        $modelCategory = new Category();// chị nên đặt tên biến là $modelCategory hoặc $categỏy
        // Step 2. Get all category by model
        $allCategory = $modelCategory->all(); // dưới này chị mss đặt là allCategory hoặc categorries

        return view('pages.users.index', [
            'allCategory' => $allCategory
        ]);
    }
}
