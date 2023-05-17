<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index() {
        try {
            $products = $this->product->all();
            return response()->json(['products' => $products]);
        }
        catch (\Exception $e) {
            echo 'Error: '.$e->getMessage();
            return false;
        }
    }

    public function store(Request $request) {
        try {
            $this->product->name = $request->name;
            $this->product->price = $request->price;
            $this->product->description = $request->description;
            $this->product->save();
            return response()->json('success');
        }
        catch (\Exception $e) {
            echo 'Error: '.$e->getMessage();
            return false;
        }
    }

    public function show($id) {
        try {
            $product = $this->product->where('id', $id)->first();
            return response()->json(['success' => true, 'product' => $product]);
        }
        catch (\Exception $e) {
            echo 'Error: '.$e->getMessage();
            return false;
        }
    }

    public function update($id, Request $request) {
        $update_form = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ];
        try {
            $product = $this->product->where('id', $id)->update($update_form);
            return response()->json(['success' => true, 'product' => $product]);
        }
        catch (\Exception $e) {
            echo 'Error: '.$e->getMessage();
            return false;
        }
    }

    public function delete($id) {
        try {
            $this->product->where('id', $id)->delete();
            return response()->json(['success' => true]);
        }
        catch (\Exception $e) {
            echo 'Error: '.$e->getMessage();
            return false;
        }
    }
}
