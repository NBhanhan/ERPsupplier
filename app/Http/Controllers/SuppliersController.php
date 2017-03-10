<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Item;
class SuppliersController extends Controller
{

    public function index()
    {
      $suppliers=Supplier::all();
      return $suppliers;
    }

    public function show($id,$start,$end)
    {

        $supplier = Supplier::findOrFail($id);
        $totalSpend = new Supplier();
        return [$supplier,$totalSpend->findTotalSpend($id,$start,$end)];
    }

    public function search(Request $request)
    {
        $suppliers = new Supplier();
        return $suppliers->searchModel($request);
    }

    // public function create()
    // {
    //     return view('suppliers.create');
    // }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50|alpha_dash',
            'contactNum'=>'required|max:50|unique:suppliers',
            'email'=>'required|email|unique:suppliers|max:255',
            'address'=>'required|max:255',
            'note'=>'required',
        ]);
        $supplier= new Supplier();
        session()->flash('success','welcome!');
        return redirect()->route('suppliers.show',[$supplier->storeModel($request)]);
    }

    // public function edit($id)
    // {
    //     $supplier = Supplier::findOrFail($id);
    //     return view('suppliers.edit',compact('supplier'));
    // }

    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50|alpha_dash',
            'contactNum'=>'required|max:50|unique:suppliers,contactNum,'.$id,
            'email'=>'required|email|max:255|unique:suppliers,email,'.$id,
            'address'=>'required|max:255',
            'note'=>'required',
        ]);
        $supplier= new Supplier();
        $supplier->updateModel($id,$request);
        session()->flash('success','Update Successful!');
        return redirect()->route('suppliers.show',[$id]);
    }

    public function destroy($id)
    {
        $supplier= new Supplier();
        $supplier->destroyModel($id);
        session()->flash('success','Delete successful!');
        return back();
    }

}
