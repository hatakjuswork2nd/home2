@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <!--action先にはURLを指定しますが、Laravelではルーティング処理でつけた名前でも指定可能です。
    ここではルーティング名「contact.confirm」(入力値確認ページ)へ送信します。  -->
    <label>メールアドレス</label>
    <input
    name="email"
    value="{{ old('email') }}"
    type="text">
    @if ($errors->has('email'))
    <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
    <!-- oldヘルパ関数は直前のinput要素に入力された値を表示することができる関数 -->
    <!-- テンプレート側で表示する際は、hasメソッドで中身の有無を確認し、firstメソッドで1番目に格納されているエラーメッセージを取り出すのが基本です。
    firstメソッドではなくgetメソッドにすると指定項目の全メッセージを、引数なしのallメソッドにすると全項目の全エラーメッセージカードを取得できます。 -->
    <label>タイトル</label>
    <input
    name="title"
    value="{{ old('title') }}"
    type="text">
    @if ($errors->has('title'))
    <p class="error-message">{{ $errors->first('title') }}</p>
    @endif
    <!-- controlllerに書いたValidationでエラーレスポンスが$errorsに格納される、それがindexに戻った際に表示される -->
    
    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <p class="error-message">{{ $errors->first('body') }}</p>
    @endif
    
    <p>a</p>
    <button type="submit">入力内容確認</button>
</form>
