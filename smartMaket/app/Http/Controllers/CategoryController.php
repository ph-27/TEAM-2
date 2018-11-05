<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
	{
		$categories = category::all();
		return view('categories.index')->with('categories',$categories);
		
	}
}
