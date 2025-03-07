<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['client_id', 'total'];

    public function client()
{
    return $this->belongsTo(Client::class);
}

public function products()
{
    return $this->belongsToMany(Product::class)
                ->withPivot('quantity', 'price');
}


}
