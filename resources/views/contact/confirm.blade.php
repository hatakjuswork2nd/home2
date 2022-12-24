@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf

  <label>メールアドレス</label>
  {{ $inputs['email'] }}
  <!-- コントローラ側から変数を受け取る、表示している -->
  <input name="email" value="{{ $inputs['email'] }}" type="hidden">
  <!-- 値を送信する為のもの、type="hidden"は非表示 -->

  <label>タイトル</label>
  {{ $inputs['title'] }}
  <input name="title" value="{{ $inputs['title'] }}" type="hidden">


  <label>お問い合わせ内容</label>
  {!! nl2br(e($inputs['body'])) !!}
  <!-- nl2br  \nをHTML改行の<br>に変換-->
    <!-- e関数　入力値のみに対してエスケープ処理。セキュリティ対策 -->
  <input name="body" value="{{ $inputs['body'] }}" type="hidden">

  <button type="submit" name="action" value="back">入力内容修正</button>
  <button type="submit" name="action" value="submit">送信する</button>
  <!-- name="action"にvalue値入れた動きをする -->
</form>