
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員情報確認画面</title>
<link rel="stylesheet" href="member_regist_check.css">

</head>
<body>
  <div class="member_regist_check">
    <h1>会員情報確認画面</h1>
    <form action="member_regist_complete.php" method="POST">
      <div class="name">
        <p>氏名</p>
        <p><?php echo $_POST['name_sei']; ?></p>
        <p><?php echo $_POST['name_mei']; ?></p>
      </div>

      <div class="gender">
        <p>性別</p>
        <p><?php echo $_POST['gender']; ?></p>
      </div>

      <div class="address">
        <p>住所</p>
      </div>

      <div class="password">
        <p>パスワード</p>
        <p>セキュリティのため非表示</p>
      </div>

      <div class="email">
        <p>メールアドレス</p>
      </div>

      <div class="btn"><input id="complete_btn" type="submit" value="登録完了"></div>
      <div class="btn"><input id="prev_btn" type="button" value="前に戻る" onclick="history.back()"></div>

    </form>
    
  </div>




</body>
</html>