<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactsSendmail;//メール送信機能をコントローラ内で使えるようにContactscontrollerの上部に以下の文を追記

class ContactsController extends Controller
{
    public function index()
    {
        // 入力ページを表示
        return view('contact.index');
    }
    public function test()
    {
        //ページ作るようのテストページ
        return view('contact.test');
    }
    //indexページ→確認ページに変異する際のアクションメソッドを定義
    public function confirm(Request $request)// アクションメソッドの引数にリクエストオブジェクトを渡す
    {
        // バリデーションルールを定義
        // 引っかかるとエラーを起こしてくれる
        $request->validate([//request=HTTPリクエスト情報(POSTされた入力値やURL、リクエストヘッダ情報など)を取得できる機能。バリデーション=値が適切かチェック
        'company' => 'required',
        'name' => 'required',
        'call' => 'required',
        'email' => 'required|email',
        'year' => 'required',
        'month' => 'required',
        'day' => 'required',
        'genders' => 'required',
        'job' => 'required',
        'pref_id' => 'required',
        'body' => 'required',
        ]);
    
        // フォームからの入力値を全て取得
        $inputs = $request->all();// 連想配列形式で取得
        //渡す際のキー値をinputsとしているので確認ページ内では$inputs['項目名'] でアクセスできます
    
        // 確認ページに表示
        // 入力値を引数に渡す
        return view('contact.confirm', [
        'inputs' => $inputs,
        ]);
    }
    public function send(Request $request)
{
    // バリデーション
    $request->validate([
        'company' => 'required',
        'name' => 'required',
        'call' => 'required',
        'email' => 'required|email',
        'year' => 'required',
        'month' => 'required',
        'day' => 'required',
        'genders' => 'required',
        'job' => 'required',
        'pref_id' => 'required',
        'body' => 'required',
  ]);

    // actionの値を取得
    $action = $request->input('action');

    // action以外のinputの値を取得
    $inputs = $request->except('action');

    //actionの値で分岐

        // 送信ボタンの場合、送信処理

        // ユーザにメールを送信
        // 自分にメールを送信

        // 二重送信対策のためトークンを再発行
        $request->session()->regenerateToken();

        // 送信完了ページのviewを表示
        return view('contact.thanks');

    }

    
    public function store(Request $request)
    {
        //
        $contact = new ContactForm;
        
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->sex = $request->input('sex');
        $contact->age = $request->input('age');
        $contact->subject = $request->input('subject');
        $contact->description = $request->input('description');
        $contact->save();
        
        return redirect('contact/index');
    }
}