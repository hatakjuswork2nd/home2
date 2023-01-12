@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">お問い合わせフォーム</h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
            <!--action先にはURLを指定しますが、Laravelではルーティング処理でつけた名前でも指定可能です。
            ここではルーティング名「contact.confirm」(入力値確認ページ)へ送信します。  -->
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">必須</label>
                        <label class="items-left">
                            <label for="company" class="font-semibold leading-none mt-4 ">会社名</label>
                            <label class="mr-12"></label>
                        </label>
                        <input type="text" name="company" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="company" value="{{old('company')}}" placeholder="例) 株式会社○○">
                            @if ($errors->has('company'))
                        <p class="error-message text-red-500">{{ $errors->first('company') }}</p>
                            @endif
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">必須</label>
                        <label for="name" class="font-semibold leading-none mt-4 mr-16">名前</label>
                        <input type="text" name="name" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" value="{{old('name')}}" placeholder="例) 名前">
                            @if ($errors->has('name'))
                        <p class="error-message text-red-500">{{ $errors->first('name') }}</p>
                            @endif
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">必須</label>
                        <label for="call" class="font-semibold leading-none mt-4 mr-14">電話番号</label>
                        <input type="text" name="call" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="call" value="{{old('call')}}" placeholder="例) xxx-xxxx-xxxx">
                            @if ($errors->has('call'))
                        <p class="error-message text-red-500">{{ $errors->first('call') }}</p>
                            @endif
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">必須</label>
                        <label for="email" class="font-semibold leading-none mt-4 mr-10">メールアドレス</label>
                        <input type="text" name="email" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="email" value="{{old('email')}}" placeholder="例) xxx@xxx.xxx">
                            @if ($errors->has('email'))
                        <p class="error-message text-red-500">{{ $errors->first('email') }}</p>
                            @endif
                    </div>
                </div>
                <!-- 生年月日 -->
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">必須</label>
                    <label for="birthday" class="font-semibold leading-none mt-4 mr-10">生年月日</label>
                    <select id="year" name="year" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md">
                        <option value="">---</option>
                        <?php $years = array_reverse(range(today()->year - 100, today()->year)); ?>
                            @foreach($years as $year)
                            <option
                            value="{{ $year }}"
                            {{ old('year') == $year ? 'selected' : '' }}
                            >{{ $year }}</option>
                            @endforeach
                    </select>
                    <label for="year">年</label>
                    <select id="month" name="month" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md">
                    <option value="">---</option>
                    @foreach(range(1, 12) as $month)
                    <option
                    value="{{ $month }}"
                    {{ old('month') == $month ? 'selected' : '' }}
                    >{{ $month }}</option>
                    @endforeach
                    </select>
                    <label for="month">月</label>
                    <select
                        id="day"
                        name="day"
                        data-old-value="{{ old('day') }}"
                        class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md"
                    ></select>
                    <label for="day" >日</label>
                    </div>
                </div>
                <script src="/js/birthday.js"></script>
  <!-- 生年月日ここまで -->
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">必須</label>
                        <label for="genders" class="font-semibold leading-none mt-4 mr-10">性別</label>
                        <input type="text" name="genders" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="genders" value="{{old('genders')}}" placeholder="例) 性別">
                            @if ($errors->has('genders'))
                        <p class="error-message text-red-500">{{ $errors->first('genders') }}</p>
                            @endif
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">必須</label>
                        <label for="job" class="font-semibold leading-none mt-4 mr-10">職業</label>
                        <input type="text" name="job" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="job" value="{{old('job')}}" placeholder="例) 職業">
                            @if ($errors->has('job'))
                        <p class="error-message text-red-500">{{ $errors->first('job') }}</p>
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
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">必須</label>
                        <label for="pref_id" class="font-semibold leading-none mt-4">都道府県</label>
                        <select name="pref_id" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" >
                            @foreach(config('pref') as $pref_id => $name)
                            <option value="{{ $pref_id }}" {{ old('pref_id') === $pref_id ? "selected" : ""}}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('pref_id'))
                        <p class="error-message text-red-500">{{ $errors->first('pref_id') }}</p>
                        @endif
                    </div>
                </div>   
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">必須</label>
                        <label for="body" class="font-semibold leading-none mt-4 mr-10">お問い合わせ内容</label>
                        <input type="text" name="body" class="w-35 py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="body" value="{{old('body')}}" placeholder="例) お問い合わせ内容">
                            @if ($errors->has('body'))
                        <p class="error-message text-red-500">{{ $errors->first('body') }}</p>
                            @endif
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <!-- <div class="w-full flex flex-col"> -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-400 border border-gray-800 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-solid focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">入力内容確認</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>