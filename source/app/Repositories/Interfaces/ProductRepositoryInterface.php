<?php
namespace App\Repositories\Interfaces;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    public function getProducts($condition = [], $limit = 10) : Collection;

    public function getProductsDiscount($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10) : Collection;

    public function getProductsFavorite($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10) : Collection;

    public function findProductBySlug($slug) : Product;
}
