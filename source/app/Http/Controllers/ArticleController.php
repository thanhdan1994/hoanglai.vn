<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
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
        $articleTypes = ArticleType::all();
        return view('admin.articles.create', compact( 'articleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreArticleRequest  $request
     * @return Response
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->all();
        $data['favorite_flg'] = $request->has('favorite_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $article = Article::create($data);
            if ($request->file('featured_image')) {
                $media = $article
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $article->featured_image = $media->id;
                $article->save();
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('articles.create')->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('article_type.articles.index', $article->article_type_id)->with('message', 'Bài viết '. $article->name .' đã được thêm vào hệ thống!');
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
     * @param  Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        $articleTypes = ArticleType::all();
        return view('admin.articles.edit', compact('article', 'articleTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateArticleRequest  $request
     * @param  Article  $article
     * @return Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->all();
        $data['favorite_flg'] = $request->has('favorite_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $article->update($data);
            if ($request->file('featured_image')) {
                $media = $article
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $article->featured_image = $media->id;
                $article->save();
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('articles.edit', $article)->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('articles.edit', $article)->with('message', 'Cập nhập thông tin bài viết thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article_type.articles.index', $article->article_type_id)->with('message', 'Bài viết <b>'. $article->name .'</b> đã được xóa khỏi hệ thống!');
    }
}
