<?php

use App\Http\Controllers\VendorController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleTypeArticleController;
use Illuminate\Http\Request;
use App\Models\ProductRent;
use App\Models\Article;
use App\Models\Vendor;
use Illuminate\Support\Str;

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

Route::get('/{slug}/r{id}.html', function ($slug, $id) {
    $product = ProductRent::where(['slug' => $slug, 'id' => $id])->firstOrFail();
    $productsDiscount = Product::discount()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(9)->get();
    $productsBestSell = Product::favorite()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(10)->get();
    return view('product-rent-detail', compact('product', 'productsDiscount', 'productsBestSell'));
})->name('home.product-rent');

Route::get('/{slug}/n{id}.html', function ($slug, $id) {
    $news = Article::where(['slug' => $slug, 'id' => $id])->firstOrFail();
    $articles = Article::favorite()->active()->where('id', '<>', $id)->orderBy('id', 'desc')->limit(4)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('news-detail', compact('news', 'articles', 'productsBestSell'));
})->name('home.news');

Route::get('/may-in.html', function (Request $request) {
    $vendors = Vendor::where('printer_flg', true)->get();
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
    $vendors = Vendor::active()->where('photocopy_flg', true)->get();
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

Route::get('/danh-sach-may-photocopy-cho-thue.html', function (Request $request) {
    $vendors = Vendor::active()->where('photocopy_flg', true)->get();
    $articles = Article::favorite()->active()->orderBy('id', 'desc')->limit(4)->get();
    $productQuery = ProductRent::active();
    if ($vendor = $request->get('brand')) {
        $productQuery->where('vendor_id', $vendor);
    }
    if ($price = $request->get('price')) {
        switch ($price) {
            case PRICE_UNDER_5:
                $productQuery->where('price_rent', '<', 5000000.00);
                break;
            case PRICE_OVER_7:
                $productQuery->where('price_rent', '>', 7000000.00);
                break;
            case PRICE_UNDER_10:
                $productQuery->where('price_rent', '<', 10000000.00);
                break;
            case PRICE_OVER_10:
                $productQuery->where('price_rent', '>', 10000000.00);
                break;
            default:
                break;
        }
    }
    $products = $productQuery->limit(6)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('list-photocopy-rent', compact('products', 'articles', 'productsBestSell', 'vendors'));
})->name('home.product-category.list-photocopy-rent');

Route::get('/hop-muc.html', function (Request $request) {
    $vendors = Vendor::active()->where('cartridge_flg', true)->get();
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
    Route::get('', function () {
       return redirect()->route('categories.products.index', 1);
    });
    Route::resource('categories.products', CategoryProductController::class);
    Route::resource('article_type.articles', ArticleTypeArticleController::class);
    Route::resource('products', ProductController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('vendors', VendorController::class);
    Route::get('settings', function () {
        return view('admin.settings');
    })->name('settings');
    Route::put('settings', function (\App\Http\Requests\UpdateSettingRequest $request) {
        $file = fopen('settings.txt', 'w');
        fwrite($file, 'companyName=' . $request->get('companyName') . PHP_EOL);
        fwrite($file, 'phone1=' . $request->get('phone1') . PHP_EOL);
        fwrite($file, 'phone2=' . $request->get('phone2') . PHP_EOL);
        fwrite($file, 'phone3=' . $request->get('phone3') . PHP_EOL);
        fwrite($file, 'address1=' . $request->get('address1') . PHP_EOL);
        fwrite($file, 'email=' . $request->get('email') . PHP_EOL);
        fclose($file);
        return redirect()->route('settings')->with('message', 'Cập nhập thông tin thành công!');
    })->name('settings.update');

    Route::get('product-rent', function () {
        $products = ProductRent::orderBy('id', 'desc')->paginate(5);
        $products->appends(['sort' => 'id']);
        return view('admin.product_rent.index', compact('products'));
    })->name('product-rent.index');

    Route::get('product-rent/create', function () {
        $vendors = Vendor::all();
        return view('admin.product_rent.create', compact('vendors'));
    })->name('product-rent.create');

    Route::post('product-rent/store', function (\App\Http\Requests\StoreProductRentRequest $request) {
        $data = $request->all();
        $data['favorite_flg'] = $request->has('favorite_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $product = ProductRent::create($data);
            if ($request->file('featured_image')) {
                $media = $product
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $product->featured_image = $media->id;
                $product->save();
            }
            if ($request->get('images-base64')) {
                \App\Models\MediaProductRent::where('product_rent_id', $product->id)->delete();
                foreach ($request->get('images-base64') as $file) {
                    $media = $product->addMediaFromBase64($file)->usingFileName(Str::random(20).'.jpg')->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                    \App\Models\MediaProductRent::create([
                        'media_id' => $media->id,
                        'product_rent_id' => $product->id
                    ]);
                }
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('product-rent.create')->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('product-rent.index')->with('message', 'Sản phẩm '. $product->name .' đã được thêm vào hệ thống!');
    })->name('product-rent.store');

    Route::get('product-rent/{product}/edit', function (ProductRent $product) {
        $vendors = Vendor::all();
        return view('admin.product_rent.edit', compact('product', 'vendors'));
    })->name('product-rent.edit');

    Route::put('product-rent/{product}/update', function (\App\Http\Requests\UpdateProductRentRequest $request, ProductRent $product) {
        $data = $request->all();
        $data['favorite_flg'] = $request->has('favorite_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $product->update($data);
            if ($request->file('featured_image')) {
                $media = $product
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $product->featured_image = $media->id;
                $product->save();
            }
            if ($request->get('images-base64')) {
                \App\Models\MediaProductRent::where('product_rent_id', $product->id)->delete();
                foreach ($request->get('images-base64') as $file) {
                    $media = $product->addMediaFromBase64($file)->usingFileName(Str::random(20).'.jpg')->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                    \App\Models\MediaProductRent::create([
                        'media_id' => $media->id,
                        'product_rent_id' => $product->id
                    ]);
                }
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('product-rent.edit', $product)->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('product-rent.index')->with('message', 'Cập nhập thông tin sản phẩm thành công !');
    })->name('product-rent.update');
    Route::delete('product-rent/{id}', function ($id) {
        $product = ProductRent::find($id);
        $product->images()->detach();
        $product->delete();
        return redirect()->route('product-rent.index')->with('message', 'Sản phẩm <b>'. $product->name .'</b> đã được xóa khỏi hệ thống!');
    })->name('product-rent.destroy');
});
