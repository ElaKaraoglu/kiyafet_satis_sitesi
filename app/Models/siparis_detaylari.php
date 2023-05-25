<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siparis_detaylari extends Model
{
    use HasFactory;
    protected $table = 'siparis-dataylari';

   public function siparis()
   {
      return $this->belongsTo(siparisler::class,'siparis_id','id');
   }

   public function urun()
   {
      return $this->belongsTo(urunler::class,'urun_id','id');
   }

}
