<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class urunler extends Model
{
   use HasFactory;
   protected $table = 'urunler';

   #burada da bir çok ürünün 1 kategoriyle ilişkisi olduğunu söylüyorum many to one

   public function getkategori()
   {
      return $this->belongsTo('App\Models\kategoriler','kategori_id','id');
   }
   public function sepet()
   {
      return $this->hasMany(Shopcart_items::class,'urun_id','id');
   }
   public function siparis()
   {
      return $this->hasMany(siparis_detaylari::class,'urun_id','id');
   }

}
