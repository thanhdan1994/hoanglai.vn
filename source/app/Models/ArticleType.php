<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    const ARTICLE_NEWS = 1;
    const ARTICLE_SERVICE = 2;
    const ARTICLE_HELP_SERVICE = 3;

    use HasFactory;

    public $table = 'article_type';
}
