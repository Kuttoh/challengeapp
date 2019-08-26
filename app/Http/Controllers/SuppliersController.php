<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupplierCollection;
use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{

    public function index()
    {
        return new SupplierCollection(Supplier::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $supplier = new Supplier([
            'name' => $request->get('name')
        ]);

        $supplier->save();

        return response()->json('success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $supplier->update($request->all());

        return response()->json('successfully updated');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return response()->json('successfully deleted');

    }
}
