<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['order_number'];

    public function products()
    {
        $this->belongsToMany(Product::class, 'order_details', 'product_id', 'order_id')->withTimestamps();
    }
}
