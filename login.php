<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");}
 
    

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="login.php">ログイン</a>
    </header>

    <main>
        <form action="mypage.php" method="post">
            <div class="box">
                <label>メールアドレス</label><br>
                <input type="text" name="mail" size="40" value="<?php if(!empty($_SESSION['login_keep'])){echo $_SESSION['mail'];} ?>" required>
            </div>

            <div class="box">
                <label>パスワード</label><br>
                <input type="password" name="password" size="40" value="<?php if(!empty($_SESSION['login_keep'])){echo $_SESSION['password'];} ?>" required>
            </div>
            
            
            
            <label>
                <input type="checkbox" name="login_keep" 　size="40" value="login_keep" <?php if(isset($_SESSION['login_keep'])){
    echo "checked='checked'";
} ?>>
                ログイン状態を維持する
            </label>


            <input type="submit" size="35" value="ログイン" class="submit_button">

        </form>
    </main>

    <footer>
        ©2018 InterNous.inc All rights reserved
    </footer>

</body>

</html>
