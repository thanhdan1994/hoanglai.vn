<?php
namespace App\Repositories;

use App\Models\ProductRent;
use App\Repositories\Interfaces\ProductRentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRentRepository implements ProductRentRepositoryInterface
{
    protected $model;

    public function __construct(ProductRent $productRent)
    {
        $this->model = $productRent;
    }

    public function findProductRent($condition): ProductRent
    {
        return $this->model->where($condition)->firstOrFail();
    }

    public function getProductsRent($condition, $limit = 10): Collection
    {
        return $this->model->active()->where($condition)->get();
    }
}
