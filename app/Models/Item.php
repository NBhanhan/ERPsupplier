<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Item extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','supplierId','description','type','price','GST'
    ];

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
