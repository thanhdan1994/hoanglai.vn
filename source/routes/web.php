<?php

use App\Http\Controllers\VendorController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleTypeArticleController;
use App\Models\ProductRent;
use App\Models\Article;
use App\Models\Vendor;
use Illuminate\Support\Str;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}/p{id}.html', [HomeController::class, 'detailProduct'])->name('home.product');
Route::get('/{slug}/r{id}.html', [HomeController::class, 'detailProductRent'])->name('home.product-rent');
Route::get('/{slug}/n{id}.html', [HomeController::class, 'detailNews'])->name('home.news');
Route::get('/may-in.html', [HomeController::class, 'printers'])->name('home.product-category.printer');
Route::get('/may-photocopy.html', [HomeController::class, 'photocopies'])->name('home.product-category.photocopy');
Route::get('/hop-muc.html', [HomeController::class, 'cartridges'])->name('home.product-category.cartridge');
Route::get('/danh-sach-may-photocopy-cho-thue.html', [HomeController::class, 'photocopiesRent'])->name('home.product-category.list-photocopy-rent');

Route::get('/tin-tuc-cong-nghe.html', function () {
    $articles = Article::active()->where('article_type_id', \App\Models\ArticleType::ARTICLE_NEWS)->limit(4)->get();
    $productsBestSell = Product::favorite()->active()->orderBy('id', 'desc')->limit(6)->get();
    return view('news', compact('articles', 'productsBestSell'));
})->name('home.articles.news');

Route::get('/su-co-may-in-may-photocopy-thuong-gap.html', function () {
    $articles = Article::active()->where('article_type_id', \App\Models\ArticleType::ARTICLE_HELP_SERVICE)->limit(4)->get();
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
