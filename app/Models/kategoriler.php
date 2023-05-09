<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class kategoriler extends Model
{
   use HasFactory;
   protected $table = 'kategoriler';


   #bu fonksiyon ile ürünlerle bire çok ilişki olduğunu bildiriyorum one to many
   public function urunler():HasMany
   {
      return $this->hasMany(urunler::class);
   }

   #ana kategoriye aitliği gösteriyo many kategıori 1 ana kategoriye ait  many to one
   public function parent():BelongsTo
   {
    return $this->belongsTo(kategoriler::class,'parent_id');
   }
   #bir kategorinin birden fazla alt kategorisi yani çocuğu olacağını gösteriyo one to many
   public function children():HasMany
   {
    return $this->hasMany(kategoriler::class,'parent_id');
   }

   public function getParentsTree()
   {
       $tree = $this->ad;
       $category = $this;

       while ($category->parent) {
           $category = $category->parent;
           $tree = $category->ad . ' > ' . $tree;
       }

       return $tree;
   }
}
