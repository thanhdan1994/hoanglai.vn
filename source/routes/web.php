<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleTypeArticleController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Vendor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
const CATEGORY_PRINTER = 1;
const CATEGORY_PHOTOCOPY = 2;
const CATEGORY_CARTRIDGE = 3;

const PRICE_UNDER_5 = 'duoi-5-trieu';
const PRICE_OVER_7 = 'tren-7-trieu';
const PRICE_UNDER_10 = 'duoi-10-trieu';
const PRICE_OVER_10 = 'tren-10-trieu';

const ARTICLE_NEWS = 1;
const ARTICLE_SERVICE = 2;
const ARTICLE_HELP_SERVICE = 3;

Route::get('/', function () {
    $productsDiscount = Product::discount()->active()->orderBy('id', 'desc')->limit(9)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    $articles = Article::favorite()->active()->orderBy('id', 'desc')->limit(4)->get();
    return view('welcome', compact('productsDiscount', 'productsBestSell', 'articles'));
})->name('home');

Route::get('/{slug}/p{id}.html', function ($slug, $id) {
    $product = Product::where(['slug' => $slug, 'id' => $id])->firstOrFail();
    $productsDiscount = Product::discount()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(9)->get();
    $productsBestSell = Product::favorite()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(10)->get();
    return view('product-detail', compact('product', 'productsDiscount', 'productsBestSell'));
})->name('home.product');

Route::get('/{slug}/n{id}.html', function ($slug, $id) {
    $news = Article::where(['slug' => $slug, 'id' => $id])->firstOrFail();
    $articles = Article::favorite()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(4)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('news-detail', compact('news', 'articles', 'productsBestSell'));
})->name('home.news');

Route::get('/may-in.html', function (Request $request) {
    $vendors = Vendor::all();
    $articles = Article::favorite()->active()->orderBy('id', 'desc')->limit(4)->get();
    $productQuery = Product::active()->where('category_id', CATEGORY_PRINTER);
    if ($vendor = $request->get('brand')) {
        $productQuery->where('vendor_id', $vendor);
    }
    if ($price = $request->get('price')) {
        switch ($price) {
            case PRICE_UNDER_5:
                $productQuery->where('price', '<', 5000000.00);
                break;
            case PRICE_OVER_7:
                $productQuery->where('price', '>', 7000000.00);
                break;
            case PRICE_UNDER_10:
                $productQuery->where('price', '<', 10000000.00);
                break;
            case PRICE_OVER_10:
                $productQuery->where('price', '>', 10000000.00);
                break;
            default:
                break;
        }
    }
    $products = $productQuery->limit(6)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('printers', compact('products', 'articles', 'productsBestSell', 'vendors'));
})->name('home.product-category.printer');

Route::get('/may-photocopy.html', function (Request $request) {
    $vendors = Vendor::all();
    $articles = Article::favorite()->active()->orderBy('id', 'desc')->limit(4)->get();
    $productQuery = Product::active()->where('category_id', CATEGORY_PHOTOCOPY);
    if ($vendor = $request->get('brand')) {
        $productQuery->where('vendor_id', $vendor);
    }
    if ($price = $request->get('price')) {
        switch ($price) {
            case PRICE_UNDER_5:
                $productQuery->where('price', '<', 5000000.00);
                break;
            case PRICE_OVER_7:
                $productQuery->where('price', '>', 7000000.00);
                break;
            case PRICE_UNDER_10:
                $productQuery->where('price', '<', 10000000.00);
                break;
            case PRICE_OVER_10:
                $productQuery->where('price', '>', 10000000.00);
                break;
            default:
                break;
        }
    }
    $products = $productQuery->limit(6)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('photocopy', compact('products', 'articles', 'productsBestSell', 'vendors'));
})->name('home.product-category.photocopy');

Route::get('/hop-muc.html', function (Request $request) {
    $vendors = Vendor::all();
    $articles = Article::favorite()->active()->orderBy('id', 'desc')->limit(4)->get();
    $productQuery = Product::active()->where('category_id', CATEGORY_CARTRIDGE);
    if ($vendor = $request->get('brand')) {
        $productQuery->where('vendor_id', $vendor);
    }
    if ($price = $request->get('price')) {
        switch ($price) {
            case PRICE_UNDER_5:
                $productQuery->where('price', '<', 5000000.00);
                break;
            case PRICE_OVER_7:
                $productQuery->where('price', '>', 7000000.00);
                break;
            case PRICE_UNDER_10:
                $productQuery->where('price', '<', 10000000.00);
                break;
            case PRICE_OVER_10:
                $productQuery->where('price', '>', 10000000.00);
                break;
            default:
                break;
        }
    }
    $products = $productQuery->limit(6)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('cartridge', compact('products', 'articles', 'productsBestSell', 'vendors'));
})->name('home.product-category.cartridge');

Route::get('/tin-tuc-cong-nghe.html', function () {
    $articles = Article::active()->where('article_type_id', ARTICLE_NEWS)->limit(4)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('news', compact('articles', 'productsBestSell'));
})->name('home.articles.news');

Route::get('/su-co-may-in-may-photocopy-thuong-gap.html', function () {
    $articles = Article::active()->where('article_type_id', ARTICLE_HELP_SERVICE)->limit(4)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('xulysuco', compact('articles', 'productsBestSell'));
})->name('home.articles.xulysuco');

Route::prefix('admin')->middleware('auth.basic')->group(function () {
    Route::resource('categories.products', CategoryProductController::class);
    Route::resource('article_type.articles', ArticleTypeArticleController::class);
    Route::resource('products', ProductController::class);
    Route::resource('articles', ArticleController::class);
});
