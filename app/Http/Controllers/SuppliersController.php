<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Item;
class SuppliersController extends Controller
{

    public function create()
    {
        return view('suppliers.create');
    }
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        $totalSpend = Item::where('supplierId',$id)
        ->sum('price');


//        $total = Item::where('supplierId',$supplier->id)->sum('price');
        return view('suppliers.show',compact('supplier','totalSpend'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50|alpha_dash',
            'contactNum'=>'required|max:50|unique:suppliers',
            'email'=>'required|email|unique:suppliers|max:255',
            'address'=>'required|max:255',
            'note'=>'required',
//            'record'=>'required',
//            'totalSpend'=>'max:255'
        ]);

        $supplier = Supplier::create([
            'name'=>$request->name,
            'contactNum'=>$request->contactNum,
            'email'=>$request->email,
            'address'=>$request->address,
            'note'=>$request->note,
//            'record'=>$request->record,
//            'totalSpend'=>$request->totalSpend,
        ]);
        session()->flash('success','welcome!');
        return redirect()->route('suppliers.show',[$supplier]);
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit',compact('supplier'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50|alpha_dash',
            'contactNum'=>'required|max:50|unique:suppliers,contactNum,'.$id,
            'email'=>'required|email|max:255|unique:suppliers,email,'.$id,
            'address'=>'required|max:255',
            'note'=>'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update([
            'name'=>$request->name,
            'contactNum'=>$request->contactNum,
            'email'=>$request->email,
            'address'=>$request->address,
            'note'=>$request->note,
        ]);
        session()->flash('success','Update Successful!');
        return redirect()->route('suppliers.show',[$supplier]);
    }
    public function index()
    {
      $suppliers=Supplier::all();
      return view('suppliers.index',compact('suppliers'));
    }
    public function destroy($id)
    {
        $supplier=Supplier::findOrFail($id);
        $supplier->delete();
        session()->flash('success','Delete successful!');
        return back();

    }

}
