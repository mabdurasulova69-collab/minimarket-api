<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\category as ModelsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('id' , 'desc')->paginate();
        return response()->json($category);
    }

    public function store(Request $request)
{
    $phone = $request->validate([
        'name' => 'required|string' ,
        'status' => 'required|boolean' 
       ]);
}

}