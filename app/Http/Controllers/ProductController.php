<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index');
    }

    public function edit($id)
    {
        $product = Product::where(['id' => $id])->first();
        return view('product.edit', compact( 'product'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $productName = $product->product_name;
        $product->delete();

        return Redirect::to('/')
            ->with('success', 'Product deleted: ' . $productName);
    }
}
