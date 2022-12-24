class ContactsSendmail extends Mailable
{
use Queueable, SerializesModels;

// プロパティを定義
private $email;
private $title;
private $body;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct( $inputs )
  {
    // コンストラクタでプロパティに値を格納
    $this->email = $inputs['email'];
    $this->title = $inputs['title'];
    $this->body = $inputs['body'];
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    // メールの設定
    return $this
            ->from('example@gmail.com')//自分のメールアドレス
            ->subject('自動送信メール')//メールタイトルを設定するメソッド
            ->view('contact.mail')
            ->with([
            'email' => $this->email,
            'title' => $this->title,
            'body' => $this->body,
            ]);
  } }