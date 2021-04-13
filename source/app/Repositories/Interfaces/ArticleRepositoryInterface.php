<?php
namespace App\Repositories\Interfaces;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

interface ArticleRepositoryInterface
{
    public function getArticlesFavorite($condition = [], $orderBy = 'id', $sort = 'desc', $limit = 10) : Collection;

    public function findArticle($condition = []) : Article;
}
