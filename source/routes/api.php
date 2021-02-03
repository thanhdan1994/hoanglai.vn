<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('products', function (Request $request) {
    $page = $request->get('page') ? $request->get('page') : 1;
    $size = $request->get('size') ? $request->get('size') : 6;
    $category = $request->get('category') ? $request->get('category') : 1; // default is printeer
    $skip = ($page - 1) * $size;
    $products = Product::active()->where('category_id', $category)->skip($skip)->take($size)->get();
    $products = collect($products)->each(function ($product) {
        $product->featured_image = $product->thumbnailUrl;
        $product->url = route('home.product', ['slug' => $product->slug, 'id' => $product->id]);
        $product->price_discount = number_format($product->price - ($product->price * $product->discount / 100)) . '₫';
        $product->price = number_format($product->price) . '₫';
        return $product;
    });
    return $products;
})->name('api.products');

Route::get('articles', function (Request $request) {
    $page = $request->get('page') ? $request->get('page') : 1;
    $size = $request->get('size') ? $request->get('size') : 4;
    $articleType = $request->get('article_type') ? $request->get('article_type') : 1; // default is news
    $skip = ($page - 1) * $size;
    $articles = Article::active()->where('article_type_id', $articleType)->skip($skip)->take($size)->get();
    $articles = collect($articles)->each(function ($article) {
        $article->featured_image = $article->thumbnailUrl;
        $article->url = route('home.news', ['slug' => $article->slug, 'id' => $article->id]);
        return $article;
    });
    return $articles;
})->name('api.articles');

Route::post('upload-image-editor', function (Request $request) {
    $path = $request->file('image')->store('public/editor/upload/image');
    return env('APP_URL') . Storage::url($path);
})->name('api.upload-image-editor');
