<?php
mb_internal_encoding('utf8');
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="log_out.php">ログアウト</a>
    </header>

    <main>
        <h2>会員情報</h2>
        <p>こんにちは<?php echo $_SESSION['name']; ?> さん</p>
        <form action="mypage_update.php" method="post">
            <div class="bio">

                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>

                <div class="info">
                    <ul>
                        <li>氏名：<input type="text" value="<?php echo $_SESSION['name']; ?>" size="35" name="name"></li>

                        　<li>メール：<input type="text" value="<?php echo $_SESSION['mail']; ?>" size="35" name="mail"></li>

                        　<li>パスワード：<input type="text" value="<?php echo $_SESSION['password']; ?>" size="35" name="password"></li>
                    </ul>
                </div>

            </div>

            <div class="comments">
                <textarea cols="40" rows="4" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
            </div>

            <div class="button_center">
                <input type="submit" value="この内容に変更する" size="40" class="submit_button">
            </div>
        </form>


    </main>

    <footer>
        ©2018 InterNous.inc All rights reserved
    </footer>


</body>

</html>
