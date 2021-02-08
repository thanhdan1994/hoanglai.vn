<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaProductRent extends Model
{
    use HasFactory;

    protected $table = 'media_product_rent';

    protected $fillable = [
        'media_id',
        'product_rent_id'
    ];

    public $timestamps = false;
}
