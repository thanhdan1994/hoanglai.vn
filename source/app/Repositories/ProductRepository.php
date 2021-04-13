<?php
namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    public $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function getProducts($condition = [], $limit = 10): Collection
    {
        return $this->model->active()->where($condition)->get();
    }

    public function getProductsDiscount($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10): Collection
    {
        return $this->model->discount()->active()->where($condition)->orderBy($orderBy, $sort)->limit($limit)->get();
    }

    public function getProductsFavorite($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10): Collection
    {
        return $this->model->favorite()->active()->where($condition)->orderBy($orderBy, $sort)->limit($limit)->get();
    }

    public function findProductBySlug($slug): Product
    {
        return $this->model->where(['slug' => $slug])->firstOrFail();
    }
}
