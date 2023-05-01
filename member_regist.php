<?php require_once('db_connect.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録フォーム</title>
<link rel="stylesheet" href="member_regist.css">

</head>
<body>

  <div class="member_regist_form">
    <h1>会員登録フォーム</h1>

    <form action="member_regist_check.php" method="POST">
      <div class ="name">
        <p>氏名</p>
        <p>姓<input name="name_sei" type="text" required maxlength="20"></p>
        <p>名<input name="name_mei" type="text" required maxlength="20"></p>
      </div>

      <div class="gender">
        <p>性別</p>
        <p><input type="radio" name="gender" value="男性" required>男性</p>
        <p><input type="radio" name="gender" value="女性">女性</p>
      </div>

      <div class="address">
        <p>住所</p>
        <p>都道府県
          <select name="pref" required>
          <option value="" selected>選択してください</option>
          <option value="北海道">北海道</option>
          <option value="青森県">青森県</option>
          <option value="岩手県">岩手県</option>
          <option value="宮城県">宮城県</option>
          <option value="秋田県">秋田県</option>
          <option value="山形県">山形県</option>
          <option value="福島県">福島県</option>
          <option value="茨城県">茨城県</option>
          <option value="栃木県">栃木県</option>
          <option value="群馬県">群馬県</option>
          <option value="埼玉県">埼玉県</option>
          <option value="千葉県">千葉県</option>
          <option value="東京都">東京都</option>
          <option value="神奈川県">神奈川県</option>
          <option value="新潟県">新潟県</option>
          <option value="富山県">富山県</option>
          <option value="石川県">石川県</option>
          <option value="福井県">福井県</option>
          <option value="山梨県">山梨県</option>
          <option value="長野県">長野県</option>
          <option value="岐阜県">岐阜県</option>
          <option value="静岡県">静岡県</option>
          <option value="愛知県">愛知県</option>
          <option value="三重県">三重県</option>
          <option value="滋賀県">滋賀県</option>
          <option value="京都府">京都府</option>
          <option value="大阪府">大阪府</option>
          <option value="兵庫県">兵庫県</option>
          <option value="奈良県">奈良県</option>
          <option value="和歌山県">和歌山県</option>
          <option value="鳥取県">鳥取県</option>
          <option value="島根県">島根県</option>
          <option value="岡山県">岡山県</option>
          <option value="広島県">広島県</option>
          <option value="山口県">山口県</option>
          <option value="徳島県">徳島県</option>
          <option value="香川県">香川県</option>
          <option value="愛媛県">愛媛県</option>
          <option value="高知県">高知県</option>
          <option value="福岡県">福岡県</option>
          <option value="佐賀県">佐賀県</option>
          <option value="長崎県">長崎県</option>
          <option value="熊本県">熊本県</option>
          <option value="大分県">大分県</option>
          <option value="宮崎県">宮崎県</option>
          <option value="鹿児島県">鹿児島県</option>
          <option value="沖縄県">沖縄県</option>
          </select>
        </p>
        <p>それ以降の住所<input name="etc_address" id="etc_address" type="text" maxlength="100"></p>
      </div>

      <div class="password">
        <p>パスワード<input name="password"id="password" type="password" required maxlength="20" minlength="8" pattern="^[a-zA-Z0-9]+$"></p>
      </div>

      <div class="password_check">
        <p>パスワード確認<input id="password_check" type="password" required pattern="^[a-zA-Z0-9]+$"></p>
      </div>

      <div class="email">
        <p>メールアドレス<input name="email" id="email" type="email" required></p>
      </div>

      <div class="btn">
        <input id="check_btn" type="submit" value="確認画面へ">
      </div>

    </form>


  </div>

</body>
</html>