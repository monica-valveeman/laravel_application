<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('products');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255|min:5',
        'age' => 'required',
    ]);
}
public function samp(){
    echo"<br>Controller";
}

}
