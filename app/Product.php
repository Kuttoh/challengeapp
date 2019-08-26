<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'quantity'];

    public function productSuppliers()
    {
        return $this->belongsToMany(Supplier::class, 'supplier_products', 'supply_id', 'product_id')->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'order_id', 'product_id')->withTimestamps();
    }
}
