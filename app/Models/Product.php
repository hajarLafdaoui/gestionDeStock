<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'price', 'quantity', 'category_id', 'image'];

    public function category()
{
    return $this->belongsTo(Category::class);
}
public function orders()
{
    return $this->belongsToMany(Order::class)
                ->withPivot('quantity', 'price');
}


}
