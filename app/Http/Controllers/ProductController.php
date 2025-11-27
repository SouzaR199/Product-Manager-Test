<?php

namespace App\Http\Controllers;

use App\Data\ProductData;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $dataArray = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string|in:ativo,inativo',
        ]);

        $productData = ProductData::from($dataArray);
        $productData->validate();

        $product = Product::create([
            'name' => $productData->name,
            'description' => $productData->description,
            'price' => $productData->price,
            'status' => $productData->status->value,
        ]);

        return redirect()->route('products.show', $product);
    }
}
