<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of all products.
     */
    public function product_list()
    {
        $products = Product::all();
        return view('products.student_list_file', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function show_product_form()
    {
        return view('products.show_product_form_file');
    }

    /**
     * Store product data in database.
     */
    public function store_product_data(Request $request)
    {
        // Debug: Check incoming request data
        // dd('Request Data:', $request->all());

        // Create validator instance
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Debug: Check if validation fails
        if ($validator->fails()) {
            // dd('Validation Errors:', $validator->errors());
        }

        // Debug: Check validated data
        $validated = $validator->validated();
        // dd('Validated Data:', $validated);

        // Debug: Check product creation
        $product = Product::create($validated);
        // dd('Created Product:', $product);

        return redirect()->route('products.product_list')->with('success', 'Product created successfully!');
    }

 
}
