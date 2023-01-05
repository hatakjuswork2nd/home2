@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">投稿の新規作成</h2>
        
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
            <!--action先にはURLを指定しますが、Laravelではルーティング処理でつけた名前でも指定可能です。
    ここではルーティング名「contact.confirm」(入力値確認ページ)へ送信します。  -->
    <div class="md:flex items-center mt-8">
        <div class="w-full flex flex-col">
            <label for="name" class="font-semibold leading-none mt-4">名前</label>
            <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" value="{{old('name')}}" placeholder="例) 名前">
            <!-- <input name="email" value="{{ old('email') }}" type="text"> -->
            @if ($errors->has('name'))
            <p class="error-message">{{ $errors->first('name') }}</p>
            @endif
        </div>
    </div>

    <div class="md:flex items-center mt-8">
        <div class="w-full flex flex-col">
            <label for="email" class="font-semibold leading-none mt-4">メールアドレス</label>
            <input type="text" name="email" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="email" value="{{old('email')}}" placeholder="例) xxx@xxx.xxx">
            <!-- <input name="email" value="{{ old('email') }}" type="text"> -->
            @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>
    </div>
    

    <!-- oldヘルパ関数は直前のinput要素に入力された値を表示することができる関数 -->
    <!-- テンプレート側で表示する際は、hasメソッドで中身の有無を確認し、firstメソッドで1番目に格納されているエラーメッセージを取り出すのが基本です。
    firstメソッドではなくgetメソッドにすると指定項目の全メッセージを、引数なしのallメソッドにすると全項目の全エラーメッセージカードを取得できます。
    <label>タイトル</label>
    <input name="title" value="{{ old('title') }}" type="text">
    @if ($errors->has('title'))
    <p class="error-message">{{ $errors->first('title') }}</p>
    @endif
    controlllerに書いたValidationでエラーレスポンスが$errorsに格納される、それがindexに戻った際に表示される
    
    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <p class="error-message">{{ $errors->first('body') }}</p>
    @endif -->


    <div class="md:flex items-center mt-8">
        <div class="w-full flex flex-col">
            <label for="body" class="font-semibold leading-none mt-4">都道府県</label>
            <select name="pref_id" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" >
            @foreach(config('pref') as $pref_id => $name)
                <option value="{{ $pref_id }}" {{ old('pref_id') === $pref_id ? "selected" : ""}}>{{ $name }}</option>
            @endforeach
            </select>
            @if ($errors->has('pref_id'))
            <p class="error-message">{{ $errors->first('pref_id') }}</p>
            @endif
            <!-- プルダウンにこの3行合ってるのか分からん -->
        </div>
    </div>
    
    <div class="md:flex items-center mt-8">
        <div class="w-full flex flex-col">
            <label for="body" class="font-semibold leading-none mt-4">お問い合わせ内容</label>
            <input type="text" name="body" class="w-auto py-8 placeholder-gray-300 border border-gray-300 rounded-md" id="body" value="{{old('body')}}" placeholder="具体的な内容を記載">
            @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
        </div>
    </div>
        <button type="submit" class="mt-4">入力内容確認</button>
        </form>
     </div>
</div>
</x-app-layout>