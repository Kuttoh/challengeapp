<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function supplierProducts()
    {
        return $this->belongsToMany(Product::class, 'supplier_products', 'product_id', 'supply_id')->withTimestamps();
    }
}
