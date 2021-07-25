@extends('app')

@section('title', 'ユーザー登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">memo</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

            @include('error_card_list')

            <div class="card-text">
                <form method="POST" action="{{route('register')}}">
                <!-- rfは、Cross-Site Request Forgeries(クロスサイト・リクエスト・フォージェリ)というWebアプリケーションの脆弱性の略称 -->
                <!-- 脆弱性からwebサービスを守ためのトークン情報 -->
                    @csrf
                    <div class="md-form">
                        <label for="nema">ユーザー名</label>
                        <!-- old関数は入力した内容が保持された状態でユーザー登録画面が表示される -->
                        <input type="text" name="name" id="name" class="form-control" required value="{{old('name')}}">
                        <small>英数字3~16文字（登録後の変更はできません）</small>
                    </div>
                    <div class="md-form">
                        <label for="email">メールアドレス</label>
                        <input type="text" name="email" class="form-control" id="email" required value="{{old('email')}}">
                    </div>
                    <div class="md-form">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" class="form-control" id="password" required> 
                    </div>
                    <div class="md-form">
                        <label for="password_confirmation">パスワード（確認）</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
                </form>
                <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


            