@section('content')
<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">お問い合わせフォーム</h2> -->
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
                <input type="radio" id="contactChoice1" name="genders" value="email" />
      <label for="contactChoice1">メール</label>

      <input type="radio" id="contactChoice2" name="genders" value="phone" />
      <label for="contactChoice2">電話</label>

      <input type="radio" id="contactChoice3" name="genders" value="mail" />
      <label for="contactChoice3">郵便</label>
                <button type="submit" name="action" value="back">入力内容修正</button>
                <button type="submit" name="action" value="submit">送信する</button>
            </form>
        </div>
    </div>
</x-app-layout>