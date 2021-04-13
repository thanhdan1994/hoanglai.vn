<?php
namespace App\Repositories\Interfaces;

use App\Models\ProductRent;
use Illuminate\Database\Eloquent\Collection;

interface ProductRentRepositoryInterface
{
    public function findProductRent($condition) : ProductRent;

    public function getProductsRent($condition, $limit = 10) : Collection;
}
