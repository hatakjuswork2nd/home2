@section('content')
<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">お問い合わせフォーム</h2> -->
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label class="items-left">
                            <label for="company" class="font-semibold leading-none mt-4 ">会社名</label>
                            <label class="mr-12"></label>
                            {{ $inputs['company'] }}
                            <input name="company" value="{{ $inputs['company'] }}" type="hidden">
                            <lavel>a</label>
                        </label>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8 ">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="name" class="font-semibold leading-none mt-4 mr-16">名前</label>
                        {{ $inputs['name'] }}
                        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="call" class="font-semibold leading-none mt-4 mr-14">電話番号</label>
                        {{ $inputs['call'] }}
                        <input name="call" value="{{ $inputs['call'] }}" type="hidden">
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="email" class="font-semibold leading-none mt-4 mr-10">メールアドレス</label>
                        {{ $inputs['email'] }}
                        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <label for="birthday" class="font-semibold leading-none mt-4 mr-10">生年月日</label>
                    {{ $inputs['year'] }}
                    {{ $inputs['month'] }}
                    {{ $inputs['day'] }}
                    <input name="year" value="{{ $inputs['year'] }}" type="hidden">
                    <input name="month" value="{{ $inputs['month'] }}" type="hidden">
                    <input name="day" value="{{ $inputs['day'] }}" type="hidden">
                    </div>
                </div>
                <script src="/js/birthday.js"></script>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="genders" class="font-semibold leading-none mt-4 mr-10">性別</label>
                        {{ $inputs['genders'] }}
                        <input name="genders" value="{{ $inputs['genders'] }}" type="hidden">
                    </div>
                </div>
            </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="job" class="font-semibold leading-none mt-4 mr-10">職業</label>
                        {{ $inputs['job'] }}
                        <input name="job" value="{{ $inputs['job'] }}" type="hidden">
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="pref_id" class="font-semibold leading-none mt-4">都道府県</label>
                        {{ $inputs['pref_id'] }}
                        <input name="pref_id" value="{{ $inputs['pref_id'] }}" type="hidden">
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-800"></div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <label for="body" class="font-semibold leading-none mt-4 mr-10">お問い合わせ内容</label>
                        {!! nl2br(e($inputs['body'])) !!}
                        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-400 border border-gray-800 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-solid focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">入力内容確認</button>
                    </div>
                </div>
                <button type="submit" name="action" value="back">入力内容修正</button>
                <button type="submit" name="action" value="submit">送信する</button>
            </form>
        </div>
    </div>
</x-app-layout>