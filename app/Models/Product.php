<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'products';
  protected $guarded = false;

  public function category()
  {
    return $this->hasOne(Category::class, 'category_id', 'id');
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
  }

  public function imgs()
  {
    return $this->hasMany(ProductImg::class, 'product_id', 'id');
  }
}