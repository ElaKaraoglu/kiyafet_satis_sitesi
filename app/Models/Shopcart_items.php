<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart_items extends Model
{
    use HasFactory;
    protected $table = 'Shopcart_items';
    public function urun()
    {
       return $this->belongsTo(urunler::class,'urun_id','id');
    }
    public function sepet()
    {
       return $this->belongsTo(sepet::class,'sepet_id');
    }
}
