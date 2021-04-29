<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductRent;
use App\Models\Vendor;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\ProductRentRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepo;

    protected $productRentRepo;

    protected $articleRepo;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductRentRepositoryInterface $productRentRepository,
        ArticleRepositoryInterface $articleRepository
    ) {
        $this->productRepo = $productRepository;
        $this->productRentRepo = $productRentRepository;
        $this->articleRepo = $articleRepository;
    }

    public function index()
    {
        $productsDiscount = $this->productRepo->getProductsDiscount([], 'id', 'desc', 9);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);
        $articles = $this->articleRepo->getArticlesFavorite([], 'id', 'desc', 4);
        return view('welcome', compact('productsDiscount', 'productsBestSell', 'articles'));
    }

    public function detailProduct($slug, $id)
    {
        $product = $this->productRepo->findProductBySlug($slug);
        $productsDiscount = $this->productRepo->getProductsDiscount([['id', '<>', $id]], 'id', 'desc', 9);
        $productsBestSell = $this->productRepo->getProductsFavorite([['id', '<>', $id]], 'id', 'desc', 10);
        return view('product-detail', compact('product', 'productsDiscount', 'productsBestSell'));
    }

    public function detailProductRent($slug, $id)
    {
        $product = $this->productRentRepo->findProductRent(['slug' => $slug, 'id' => $id]);
        $productsDiscount = $this->productRepo->getProductsDiscount([], 'id', 'desc', 9);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 10);
        return view('product-rent-detail', compact('product', 'productsDiscount', 'productsBestSell'));
    }

    public function detailNews($slug, $id)
    {
        $news = $this->articleRepo->findArticle(['slug' => $slug, 'id' => $id]);
        $articles = $this->articleRepo->getArticlesFavorite([['id', '<>', $id]], 'id', 'desc', 4);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);
        return view('news-detail', compact('news', 'articles', 'productsBestSell'));
    }

    public function printers(Request $request)
    {
        $vendors = Vendor::where('printer_flg', true)->get();
        $articles = $this->articleRepo->getArticlesFavorite([], 'id', 'desc', '4');
        $condition = [
            ['category_id', Category::CATEGORY_PRINTER]
        ];
        if ($vendor = $request->get('brand')) {
            $condition[] = ['vendor_id', $vendor];
        }
        if ($price = $request->get('price')) {
            switch ($price) {
                case Product::PRICE_UNDER_5:
                    $condition[] = ['price', '<', 5000000.00];
                    break;
                case Product::PRICE_OVER_7:
                    $condition[] = ['price', '>', 7000000.00];
                    break;
                case Product::PRICE_UNDER_10:
                    $condition[] = ['price', '<', 10000000.00];
                    break;
                case Product::PRICE_OVER_10:
                    $condition[] = ['price', '>', 10000000.00];
                    break;
                default:
                    break;
            }
        }
        $products = $this->productRepo->getProducts($condition, 6);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);;
        return view('printers', compact('products', 'articles', 'productsBestSell', 'vendors'));
    }

    public function photocopies(Request $request)
    {
        $vendors = Vendor::where('photocopy_flg', true)->get();
        $articles = $this->articleRepo->getArticlesFavorite([], 'id', 'desc', '4');
        $condition = [
            ['category_id', Category::CATEGORY_PHOTOCOPY]
        ];
        if ($vendor = $request->get('brand')) {
            $condition[] = ['vendor_id', $vendor];
        }
        if ($price = $request->get('price')) {
            switch ($price) {
                case Product::PRICE_UNDER_5:
                    $condition[] = ['price', '<', 5000000.00];
                    break;
                case Product::PRICE_OVER_7:
                    $condition[] = ['price', '>', 7000000.00];
                    break;
                case Product::PRICE_UNDER_10:
                    $condition[] = ['price', '<', 10000000.00];
                    break;
                case Product::PRICE_OVER_10:
                    $condition[] = ['price', '>', 10000000.00];
                    break;
                default:
                    break;
            }
        }
        $products = $this->productRepo->getProducts($condition, 6);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);;
        return view('photocopy', compact('products', 'articles', 'productsBestSell', 'vendors'));
    }

    public function cartridges(Request $request)
    {
        $vendors = Vendor::where('cartridge_flg', true)->get();
        $articles = $this->articleRepo->getArticlesFavorite([], 'id', 'desc', '4');
        $condition = [
            ['category_id', Category::CATEGORY_CARTRIDGE]
        ];
        if ($vendor = $request->get('brand')) {
            $condition[] = ['vendor_id', $vendor];
        }
        if ($price = $request->get('price')) {
            switch ($price) {
                case Product::PRICE_UNDER_5:
                    $condition[] = ['price', '<', 5000000.00];
                    break;
                case Product::PRICE_OVER_7:
                    $condition[] = ['price', '>', 7000000.00];
                    break;
                case Product::PRICE_UNDER_10:
                    $condition[] = ['price', '<', 10000000.00];
                    break;
                case Product::PRICE_OVER_10:
                    $condition[] = ['price', '>', 10000000.00];
                    break;
                default:
                    break;
            }
        }
        $products = $this->productRepo->getProducts($condition, 6);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);;
        return view('cartridge', compact('products', 'articles', 'productsBestSell', 'vendors'));
    }

    public function photocopiesRent(Request $request)
    {
        $vendors = Vendor::where('photocopy_flg', true)->get();
        $articles = $this->articleRepo->getArticlesFavorite([], 'id', 'desc', '4');
        $condition = [];
        if ($vendor = $request->get('brand')) {
            $condition[] = ['vendor_id', $vendor];
        }
        if ($price = $request->get('price')) {
            switch ($price) {
                case ProductRent::RENT_PRICE_UNDER_5:
                    $condition[] = ['price', '<', 5000000.00];
                    break;
                case ProductRent::RENT_PRICE_OVER_7:
                    $condition[] = ['price', '>', 7000000.00];
                    break;
                case ProductRent::RENT_PRICE_UNDER_10:
                    $condition[] = ['price', '<', 10000000.00];
                    break;
                case ProductRent::RENT_PRICE_OVER_10:
                    $condition[] = ['price', '>', 10000000.00];
                    break;
                default:
                    break;
            }
        }
        $products = $this->productRentRepo->getProductsRent($condition, 6);
        $productsBestSell = $this->productRepo->getProductsFavorite([], 'id', 'desc', 6);;
        return view('list-photocopy-rent', compact('products', 'articles', 'productsBestSell', 'vendors'));
    }
}
