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

    public static function findTotalSpend($id,$start,$end)
    {
        $totalSpend=Item::where('supplierId',$id)
        ->whereBetween('created_at',[date($start),date($end)])
        ->sum('price');
        return $totalSpend;
        //->sum('price');
    }
    public static function searchModel($request)
    {
        $suppliers = Supplier::where('name',$request->name)->get();
        return $suppliers;
    }
    public static function storeModel($request)
    {
        $supplier=Supplier::create($request);
        return $supplier;
    }
    public static function updateModel($id,$request)
    {
        $supplier=Supplier::findorFail($id)->update($request);
        return $supplier;
    }
    public static function destroyModel($id)
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
