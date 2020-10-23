<?php

mb_internal_encoding('utf8');
session_start();

if(empty($_SESSION['id'])){
    
    try{
        $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    }catch(PDOException $e){
        die("<p>アクセスできません</p><a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
    }
    
    $stmt = $pdo->prepare("select * from login_mypage where mail=? && password=?");
    
    $stmt->bindValue(1,$_POST['mail']);
    $stmt->bindValue(2,$_POST['password']);
    
    $stmt->execute();
    $pdo=NULL;
    
    while($row = $stmt->fetch()){
    
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['mail']=$row['mail'];
    $_SESSION['password']=$row['password'];
    $_SESSION['picture']=$row['picture'];
    $_SESSION['comments']=$row['comments'];
}
    
    if(empty($_SESSION['id'])){
        header("Location:login_error.php");
    }
    
    if(!empty($_POST['login_keep'])){
        $_SESSION['login_keep']=$_POST['login_keep'];
    }
    
}

if(!empty($_SESSION['id']) && !empty($_SESSION['login_keep'])){
    setcookie('mail',$_SESSION['mail'],time()+60*60*24*7);
    setcookie('password',$_SESSION['password'],time()+60*60*24*7);
    setcookie('login_keep',$_SESSION['login_keep'],time()+60*60*24*7);
}else if(empty($_SESSION['login_keep'])){
    setcookie('mail','',time()-1);
    setcookie('password','',time()-1);
    setcookie('login_keep','',time()-1);
}


?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" type="text/css" href="mypage.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="log_out.php">ログアウト</a>
    </header>

    <main>
        <h2>会員情報</h2>
        <p><?php echo "こんにちは" .$_SESSION['name']."さん" ?></p>

        <div class="bio">
            <div class="profile_pic">
                <img src="<?php echo $SESSION['picture']; ?>">
            </div>

            <div class="info">
                <ul>
                    <li>氏名：<?php echo $_SESSION['name'] ?></li>
                    　<li>メール：<?php echo $_SESSION['mail'] ?></li>
                    　<li>パスワード：<?php echo $_SESSION['password'] ?></li>
                </ul>
            </div>
        </div>

        <div class="comments">
            <p><?php echo $_SESSION['comments'] ?></p>
        </div>

        <form action="mypage_hensyu.php" method="post">
            <input type="hidden" value="<?php echo rand(1,10); ?>" name="from_mypage">
            <input type="submit" value="編集する" size="40" class="submit_button">

        </form>
    </main>


</body>

</html>
