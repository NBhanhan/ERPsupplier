<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SuppliersController extends Controller
{
    //
    public function create()
    {
        return view('suppliers.create');
    }
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.show',compact('supplier'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50',
            'contactNum'=>'required|max:50',
            'email'=>'required|email|unique:suppliers|max:255',
            'address'=>'required|max:255',
            'note'=>'required',
            'record'=>'required',
            'totalSpend'=>'max:255'
        ]);

        $supplier = Supplier::create([
            'name'=>$request->name,
            'contactNum'=>$request->contactNum,
            'email'=>$request->email,
            'address'=>$request->address,
            'note'=>$request->note,
            'record'=>$request->record,
            'totalSpend'=>$request->totalSpend,
        ]);
        session()->flash('success','welcome!');
        return redirect()->route('suppliers.show',[$supplier]);
    }

}
