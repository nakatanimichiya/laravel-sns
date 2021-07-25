<?php

namespace App;

// リレーション
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    
    protected $fillable = [
    'title',
    'body',
    ];
    // $article->user;         //-- Userモデルのインスタンスが返る
    // $article->user->name;   //-- Userモデルのインスタンスのnameプロパティの値が返る
    // $article->user->hoge(); //-- Userモデルのインスタンスのhogeメソッドの戻り値が返る
    // $article->user();       //-- BelongsToクラスのインスタンスが返る
    public function user(): BelongsTo
    {

        // $this はArticleクラスのインスタンス自信を指す
        // $this->メソッド()＝インスタンスが持つメソッドが実行
        // $this->プロパティ名＝インスタンスが持つプロパティを参照
        return $this -> belongsTo('App\User');
    }
}
