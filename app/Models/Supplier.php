<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','contactNum','email','address','note'
    ];

    public function findTotalSpend($id)
    {
        $totalSpend=Item::where('supplierId',$id)
        ->whereBetween('created_at',[date('2017-02-13 05:41:42'),date('2017-02-20 11:03:53')])
        ->sum('price');
        return $totalSpend;
        //->sum('price');
    }
    public function searchSupplier($request)
    {
        $suppliers = Supplier::where('name',$request->name)->get();
        return $suppliers;
    }
    public function storeSupplier($request)
    {
        $supplier=Supplier::create($request->all());
        return $supplier;
    }
    public function updateSupplier($id,$request)
    {
        $supplier=Supplier::findorFail($id)->update($request->all());
        return $supplier;
    }
    public function destroySupplier($id)
    {
        $supplier=Supplier::findOrFail($id);
        $supplier->delete();
        return true;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
/*    protected $hidden = [
        'password', 'remember_token',
    ];
*/
}
