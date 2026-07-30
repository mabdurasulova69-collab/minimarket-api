<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PhoneController extends Controller
{
    
    public function index()
{
    $phones = Phone::orderBy('id' , 'desc')->paginate();
    return response()->json($phones);
}

public function store(Request $request)
{
    $phone = $request->validate([
        'name' => 'required|string' ,
        'price' => 'required|integer' ,
        'count' => 'required|integer' ,
        'model' => 'required|string' ,
        'category_id' => 'required|integer',
       ]);
}

public function update(Request $request , $id) {
    $phone = Phone::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string' ,
        'price' => 'required|integer' ,
        'count' => 'required|integer' ,
        'model' => 'required|string' ,
        
        'category_id' => 'required|integer'
    ]);

    $phone->update($data); 

    return response()->json($phone , 200);
}

public function delete($id)
{
    $phone = Phone::findOrFail($id);
    $phone->delete();
}




}