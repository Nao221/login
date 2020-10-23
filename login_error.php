<?php

session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインエラー</title>    
    <style type="text/css">
    
    #img{
    width: 250px;
    display: block;
    margin: 0 auto;
    line-height: 80px;
}



header{
    height: 80px;
    width: 100%;
    border-bottom: 2px solid lightgray;
    margin-bottom: 30px;
}
    
header a{
    float: right;
    margin-top: -20px;
    
}
   


main{
   margin: 0 auto;
    height: 250px;
    width: 500px;
    border: 2px solid lightgray;
    box-shadow:  4px 4px 4px lightgray;
    border-radius: 10px;
   text-align: center;
    padding-top: 20px;
}
.submit_button{
    height: 30px;
    width: 150px;
    color: white;
    background-color: #31A263;
    border-radius: 10px;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    font-size: 16px;
}
        
        .error{
            margin: 10px;
            background-color: lightpink;
            color:red;
            height: 35px;
            line-height: 35px;
            
        }
    </style>
</head>
<body>

<header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="login.php">ログイン</a>
    </header>

    <main>
        <div class="error">メールアドレスかパスワードが間違っています</div>
        <form action="mypage.php" method="post">
            <div class="box">
                <label>メールアドレス</label><br>
                <input type="text" name="mail" size="40" required>
            </div>

            <div class="box">
                <label>パスワード</label><br>
                <input type="password" name="password" size="40" required>
            </div>
            
            <label>
            <input type="checkbox" name="login_keep"　size="40" value="login_keep" <?php if(isset($_POST['login_keep'])){
    echo "checked='checked'";
} ?>>
            ログイン状態を維持する    
            </label>
            
            <input type="submit" size="35" value="ログイン" class="submit_button">
            
        </form>
    </main>


</body>
</html>
