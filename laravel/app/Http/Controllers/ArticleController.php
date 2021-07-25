<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests\ArticleRequest;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index ()
    {
    //     //ダミーデータ
    //     $articles = [
    //         // 型キャスト（object）配列がオブジェクト型に変換される
    //         (object)[
    //         "id" => 1,
    //         "title" => "タイトル1",
    //         "body" => "本文1",
    //         "created_at" => now(),
    //         "user" => (object) [
    //             "id" => 1,
    //             "name" => "ユーザー名1",
    //         ],
    //     ],
    //     (object) [
    //         "id" => 2,
    //         "title" => "タイトル2",
    //         "body" => "本文2",
    //         "created_at" => now(),
    //         "user" => (object) [
    //             "id" => 2,
    //             "name" => "ユーザー名2",
    //         ],
    //     ],
    //     (object) [
    //         "id" => 3,
    //         "title" => "タイトル3",
    //         "body" => "本文3",
    //         "created_at" => now(),
    //         "user" => (object) [
    //             "id" => 3,
    //             "name" => "ユーザー名3",
    //         ],
    //     ],
    // ];

    $articles = Article::all()->sortByDesc('created_at');
    // viewメソッドの第一引数には、ビューファイルを渡す
    // articles.index'とすることで、resources/views/articlesディレクトリにある、indexという名前のビューファイルが表示されます
    // 第二引数ではビューファイルに渡す名称とその変数の値を連想配列形式で指定します
    return view("articles.index", ["articles" => $articles]);

    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
        // $article->title = $request->title;
        // $article->body = $request->body;
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('article.index');
    }

    // public function edit(Article $article)
    // {
    //     return  view('article.edit', ['article' => $article]);
    // }


}
