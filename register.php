<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="login.php">ログイン</a>
    </header>

    <main>
        <h2>会員登録</h2>

        <div class="contents">
            <form method="post" action="register_confirm.php" enctype="multipart/form-data">

                <div class="box">
                    <div class="hissu">必須</div>
                    <label>氏名</label><br>
                    <input type="text" name="name" size="40" required>
                </div>

                <div class="box">
                    <div class="hissu">必須</div>
                    <label>メールアドレス</label><br>
                    <input type="text" name="mail" size="40" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"　 required>
                </div>

                <div class="box">
                    <div class="hissu">必須</div>
                    <label>パスワード</label><br>
                    <input type="password" name="password" size="40" pattern="^[a-zA-Z0-9]+$" id="password" 　required>
                </div>

                <div class="box">
                    <div class="hissu">必須</div>
                    <label>パスワード確認</label><br>
                    <input type="password" name="confirm_password" size="40" id="confirm" oninput="ConfirmPassword(this)" 　required>
                </div>

                <div class="box">
                    <label>プロフィール写真</label>
                    <input  type="hidden" name="max_file_size" value="1000000" />
                    <input type="file" name="picture" size="40">
                </div>

                <div class="box">
                    <label>コメント</label><br>
                    <textarea cols="40" rows="4" name="comments"></textarea>
                </div>


                <input type="submit" name="enroll" size="20" value="登録する" class="submit_button">

            </form>

        </div>
    </main>
    <footer>
        ©2018 InterNous.inc All rights reserved
    </footer>

<script>
     function ConfirmPassword(confirm)
      var input1 = password.value;
      var input2 = confirm.value;
      if(var1 != var2){
          confirm.setCustomValidity("パスワードが一致しません");
      }else{
                confirm.setCustomValidity("");}
    </script>
</body>

</html>
