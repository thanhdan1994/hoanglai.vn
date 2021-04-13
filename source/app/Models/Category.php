<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const CATEGORY_PRINTER = 1;
    const CATEGORY_PHOTOCOPY = 2;
    const CATEGORY_CARTRIDGE = 3;

    use HasFactory;
}
