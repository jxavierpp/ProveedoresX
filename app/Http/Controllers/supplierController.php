<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller {
    public function index(){
        $data = Supplier::orderBy('id','asc')->get();
        return response()->json($data, 200);
            //view('proveedores')->with('proveedor', $data);
    }

    public function store(Request $request){
        $supplier = new Supplier;
        $supplier->supplierName = $request->input('supplierName');
        $supplier->supplierEmail = $request->input('supplierEmail');
        $supplier->supplierPhone = $request->input('supplierPhone');
        $supplier->is_active = true;
        $supplier->save();
        return 'Supplier record succesfully created with id #' .$supplier->id;
    }

    public function show($id){
        return Supplier::find($id);
    }

    public function update(Request $request, $id){
        $supplier = Supplier::find($id);
        $supplier->supplierName = $request->input('supplierName');
        $supplier->supplierEmail = $request->input('supplierEmail');
        $supplier->supplierPhone = $request->input('supplierPhone');
        $supplier->save();
        return 'Supplier record succesfully updated with id #' .$supplier->id;
    }

    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->is_active = false;
        $supplier->save();
        return 'Supplier record succesfully deleted';
    }
}