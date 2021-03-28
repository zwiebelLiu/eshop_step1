<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['name','price','description','cate_id','photo'];


    public function category()
    {
       return $this->belongsTo(category::class,'cate_id');
      //  return $this->belongsTo('APP\Models\category','cate_id');
    }
}
