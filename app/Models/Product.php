<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameProduct',
        'stock',
        'unit_price',
        'id_brand',
        'image'
    ];

    public function BrandFunction():BelongsTo{
        return $this->belongsTo(Brand::class, 'id_brand');
    }
}
