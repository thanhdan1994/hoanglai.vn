<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\MediaProduct;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('admin.products.create', compact('categories', 'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['favorite_flg'] = $request->has('favorite_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $product = Product::create($data);
            if ($request->file('featured_image')) {
                $media = $product
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $product->featured_image = $media->id;
                $product->save();
            }
            if ($request->get('images-base64')) {
                MediaProduct::where('product_id', $product->id)->delete();
                foreach ($request->get('images-base64') as $file) {
                    $media = $product->addMediaFromBase64($file)->usingFileName(Str::random(20).'.jpg')->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                    MediaProduct::create([
                        'media_id' => $media->id,
                        'product_id' => $product->id
                    ]);
                }
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('products.create')->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('categories.products.index', $product->category_id)->with('message', 'Sản phẩm '. $product->name .' đã được thêm vào hệ thống!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('admin.products.edit', compact('product', 'categories', 'vendors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequest $request
     * @param  Product $product
     * @return Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
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
                MediaProduct::where('product_id', $product->id)->delete();
                foreach ($request->get('images-base64') as $file) {
                    $media = $product->addMediaFromBase64($file)->usingFileName(Str::random(20).'.jpg')->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                    MediaProduct::create([
                        'media_id' => $media->id,
                        'product_id' => $product->id
                    ]);
                }
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('products.edit', $product)->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('products.edit', $product)->with('message', 'Cập nhập thông tin sản phẩm thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->images()->detach();
        $product->delete();
        return redirect()->route('categories.products.index', $product->category_id)->with('message', 'Sản phẩm <b>'. $product->name .'</b> đã được xóa khỏi hệ thống!');
    }
}
