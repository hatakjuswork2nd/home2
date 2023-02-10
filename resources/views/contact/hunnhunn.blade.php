<!-- @extends('layouts.app') -->
<!--  -->
<!-- @section('content') -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('Createです') }}
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        氏名<input type="text" name="name"><br>
                        メールアドレス<input type="email" name="email"><br>
                        性別<input type="radio" name="sex" value="0">男性<input type="radio" name="sex" value="1">女性<br>
                        年齢<select name="age">
                            <option value="">選択してください</option>
                            <option value="1">～19歳</option>
                            <option value="2">20～29歳</option>
                            <option value="3">30～39歳</option>
                            <option value="4">40～49歳</option>
                            <option value="5">50～59歳</option>
                            <option value="6">60歳～</option>
                            </select>
                        <br>
                        URL<input type="url" name="url"><br>
                        件名<input type="text" name="subject"><br>
                        お問い合わせ内容<textarea name="description"></textarea><br>
                        <input type="checkbox" name="caution" value="1">注意事項に同意する<br>
                        <input class="btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection