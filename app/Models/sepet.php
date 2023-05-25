<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepet extends Model
{
    protected $table = 'sepet';

    use HasFactory;
    public function shopcartitems()
    {
       return $this->hasMany(Shopcart_items::class,'sepet_id');
    }
    public function user()
    {
       return $this->hasOne(user::class,'kullanici_id');
    }


}
