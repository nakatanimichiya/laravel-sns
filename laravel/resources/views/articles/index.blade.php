<!-- @extends('app')でapp.blade.phpをベースとして使うことを宣言しています。 -->
@extends('app')

<!-- @section('title', '記事一覧')はapp.blade.phpの@yield('title')に対応する -->
@section('title', '記事一覧')

<!-- app.blade.phpの@yield('content')に対応 -->
@section('content')

@include('nav')
<div class="container"></div>
@foreach($articles as $article) 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $article->user->name }} {{--この行を変更--}}
            </div> 
            <div class="font-weight-lighter">
            <!-- 属性：日付と時刻　役割：作成日時 他：updated_at-->
              {{ $article->created_at->format('Y/m/d H:i') }} {{--この行を変更--}}
            </div>
          </div>

          <!-- @if(Auth::id() === $article->user_id) -->
          <!-- dropdown -->
          <!-- <div class="ml-auto card-text">
            <div class="dropdown">
              <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('articles.edit',['article' => $article])}}" class="dropdown-item"></a>
                  <i class="fas fa-pen mr-1"></i>記事を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                </a>
              </div>
            </div>
          </div> -->
          <!-- dropdown -->
  
          <!-- modal -->
          <!-- <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $article->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
          @endif -->
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $article->title }} {{--この行を変更--}}
          </h3>
          <div class="card-text">
            {{ $article->body }} {{--この行を変更--}}
          </div>
        </div>
      </div>
    @endforeach {{--この行を追加--}}
  </div>
@endsection