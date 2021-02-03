<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaProduct extends Model
{
    use HasFactory;

    protected $table = 'media_product';

    protected $fillable = [
        'media_id',
        'product_id'
    ];

    public $timestamps = false;
}
