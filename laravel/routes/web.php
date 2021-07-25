<?php

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

Auth::routes();

// RouteファサードのGetというメソッドに2つの引数を渡している
// 第二引数では、どのコントローラーでなんのメソッドを実行するのかを文字列で渡します
// コントローラー名とメソッドの間には＠が必要
// Nameに名前をつける
Route::get('/', 'ArticleController@index')->name('articles.index');


// ・一覧表示
// ・個別表示
// ・新規登録
// ・更新
// ・削除
// 上記の機能のルーティングをまとめたメソッド
// latavelのmiddlewareで未ログイン状態で投稿一覧に行かせない
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');
?>
