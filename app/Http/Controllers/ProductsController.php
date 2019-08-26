<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return new ProductCollection(Product::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'quantity' => $request->get('quantity')
        ]);

        $product->save();

        return response()->json('success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update($request->all());

        return response()->json('successfully updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return response()->json('successfully deleted');
    }
}
