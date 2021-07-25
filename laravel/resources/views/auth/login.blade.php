@extends ('app')

@section ('title', 'ログイン')

@section ('content')
<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-x-6">
            <h1 class="text-center"><a href="/" class="text-dark">memo</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ログイン</h2>

                    @include('error_card_list')

                    <div class="card-text">
                        <form method="POST" action="{{route('login')}}">
                        @csrf

                            <div class="mad-form">
                                <label for="email">メールアドレス</label>
                                <input type="text" name="email" class="form-control" id="email" required value="{{old('email')}}">
                            </div>
                            
                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input type="password" namee="password" class="form-control" id="password" required>
                            </div>

                            <input type="hidden" name="remember" id="remember" value="on">

                            <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
                        </form>
    
                            <div class="mt-0">
                                <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
                            </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection