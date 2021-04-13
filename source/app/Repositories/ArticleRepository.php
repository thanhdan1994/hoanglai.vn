<?php
namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository implements ArticleRepositoryInterface
{
    protected $model;

    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    public function getArticlesFavorite($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10): Collection
    {
        return $this->model->favorite()->active()->where($condition)->orderBy($orderBy, $sort)->limit($limit)->get();
    }

    public function findArticle($condition = []) : Article
    {
        return $this->model->where($condition)->firstOrFail();
    }
}
