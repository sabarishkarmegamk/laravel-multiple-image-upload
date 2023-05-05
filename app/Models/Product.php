<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
  protected $table = 'products';
  protected $fillable = [
      'name', 'discription'
  ];
  public function images()
  {
   return $this->hasMany('App\Image', 'product_id');
  }
}